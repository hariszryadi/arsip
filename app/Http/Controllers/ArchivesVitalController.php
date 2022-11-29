<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rack;
use App\Models\Archives;
use App\Models\ArchiveCreator;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ArchivesVitalImport;
use App\Models\PrimaryClassification;
use Illuminate\Support\Facades\DB;

class ArchivesVitalController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'archives.vital.';
    
    /**
     * Route index
     */
    protected $_route = 'archives-vital.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:archives-vital-list', ['only' => ['index']]);
        $this->middleware('permission:archives-vital-create', ['only' => ['create', 'store', 'import', 'download_template']]);
        $this->middleware('permission:archives-vital-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:archives-vital-delete', ['only' => ['destroy']]);
        $this->middleware('permission:archives-vital-download', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Archives::with('mapping')->where('status', '3')->orderBy('id')->get())
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Folder';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->editColumn('rack', function($data) {
                    return 'R.' . $data->rack->floor . '.' . $data->rack->type . '.' . $data->rack->no_rack;
                })
                ->addColumn('action', function($data){
                    $permission = '';
                    if (auth()->user()->can('archives-vital-download')) {
                        $permission .= '<a href="'.route('archives-vital.download', $data->id).'" class="dropdown-item"><i class="icon-download text-success"></i> Download</a>';
                    }
                    if (auth()->user()->can('archives-vital-edit')) {
                        $permission .= '<a href="'.route('archives-vital.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>';
                    }
                    if (auth()->user()->can('archives-vital-delete')) {
                        $permission .= '<a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>';
                    }

                    if (auth()->user()->can('archives-vital-download') || auth()->user()->can('archives-vital-edit') || auth()->user()->can('archives-vital-delete')) {
                        return '<div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
    
                                        <div class="dropdown-menu dropdown-menu-right">
                                            '.$permission.'
                                        </div>
                                    </div>
                                </div>';
                    }
                })
                ->make(true);
        }

        return view($this->_view.'index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classification = [];
        $primary = PrimaryClassification::orderBy('id')->get();
        foreach ($primary as $i => $p) {
            if ($p->secondary()->exists()) {
                array_push($classification, ['id' => $p->id, 'code' => $p->code, 'name' => $p->name]);
                foreach ($p->secondary as $j => $s) {
                    if ($s->tertiary()->exists()) {
                        array_push($classification, ['id' => $s->id, 'code' => $s->code, 'name' => $s->name]);
                        foreach ($s->tertiary as $k => $t) {
                            array_push($classification, ['id' => $t->id, 'code' => $t->code, 'name' => $t->name]);
                        }
                    } else {
                        array_push($classification, ['id' => $s->id, 'code' => $s->code, 'name' => $s->name]);
                    }
                }
            } else {
                array_push($classification, ['id' => $p->id, 'code' => $p->code, 'name' => $p->name]);
            }
        }
        $user = User::orderBy('id')->get();
        $creator = ArchiveCreator::orderBy('id')->get();
        $rack = Rack::where('type', 'V')->orderBy('id')->get();
        return view($this->_view.'create', compact('classification', 'user', 'creator', 'rack'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'code_classification' => 'required',
            'archive_creator_id' => 'required',
            'year' => 'required',
            'amount' => 'required',
            'dev_level' => 'required',
            'rack_id' => 'required',
            'box' => 'required',
            'file' => 'mimes:jpeg,bmp,png,gif,svg,pdf',
            'officer' => 'required'
        ]);

        $check = Rack::find($request->rack_id);
        if ($check->capacity == $check->used) {
            return redirect()->route($this->_route)->with('error', 'Kapasitas rak R.' . $check->floor . '.' . $check->type . '.' . $check->no_rack .' sudah penuh');
        }

        $path = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = date('YmdHis') . $file->getClientOriginalName();
            $path = $file->storeAs('archive/vital', $file_name, ['disk' => 'public']);
        }

        $store = Archives::create([
            'name' => $request->name,
            'code_classification' => $request->code_classification,
            'archive_creator_id' => $request->archive_creator_id,
            'year' => $request->year,
            'amount' => $request->amount,
            'dev_level' => $request->dev_level,
            'rack_id' => $request->rack_id,
            'box' => $request->box,
            'file' => $path,
            'officer' => $request->officer,
            'status' => '3'
        ]);

        if ($store) {
            $rack = Rack::find($request->rack_id);
            $rack->update([
                'used' => DB::raw('used + 1')
            ]);
        }

        return redirect()->route($this->_route)->with('success', 'Data arsip vital berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $archives = Archives::find($id);
        $classification = [];
        $primary = PrimaryClassification::orderBy('id')->get();
        foreach ($primary as $i => $p) {
            if ($p->secondary()->exists()) {
                array_push($classification, ['id' => $p->id, 'code' => $p->code, 'name' => $p->name]);
                foreach ($p->secondary as $j => $s) {
                    if ($s->tertiary()->exists()) {
                        array_push($classification, ['id' => $s->id, 'code' => $s->code, 'name' => $s->name]);
                        foreach ($s->tertiary as $k => $t) {
                            array_push($classification, ['id' => $t->id, 'code' => $t->code, 'name' => $t->name]);
                        }
                    } else {
                        array_push($classification, ['id' => $s->id, 'code' => $s->code, 'name' => $s->name]);
                    }
                }
            } else {
                array_push($classification, ['id' => $p->id, 'code' => $p->code, 'name' => $p->name]);
            }
        }
        $user = User::orderBy('id')->get();
        $creator = ArchiveCreator::orderBy('id')->get();
        $rack = Rack::where('type', 'V')->orderBy('id')->get();
        return view($this->_view.'edit', compact('archives', 'classification', 'user', 'creator', 'rack'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'code_classification' => 'required',
            'archive_creator_id' => 'required',
            'year' => 'required',
            'amount' => 'required',
            'dev_level' => 'required',
            'rack_id' => 'required',
            'box' => 'required',
            'file' => 'mimes:jpeg,bmp,png,gif,svg,pdf',
            'officer' => 'required'
        ]);

        $archives = Archives::find($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = date('YmdHis') . $file->getClientOriginalName();
            $path = $file->storeAs('archive/vital', $file_name, ['disk' => 'public']);

            $old_path = \storage_path('app/public/' . $archives->file);
            File::delete($old_path);
        } else {
            $path = $archives->file;
        }

        $archives->update([
            'name' => $request->name,
            'code_classification' => $request->code_classification,
            'archive_creator_id' => $request->archive_creator_id,
            'year' => $request->year,
            'amount' => $request->amount,
            'dev_level' => $request->dev_level,
            'rack_id' => $request->rack_id,
            'box' => $request->box,
            'file' => $path,
            'officer' => $request->officer,
        ]);

        return redirect()->route($this->_route)->with('success', 'Data arsip vital berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $archives = Archives::findOrFail($id);
        $path = \storage_path('app/public/' . $archives->file);
        File::delete($path);
        $delete = $archives->delete();

        if ($delete) {
            $rack = Rack::find($archives->rack_id);
            $rack->update([
                'used' => DB::raw('used - 1')
            ]);
        }
        
        return response()->json(['success' => 'Data arsip vital berhasil dihapus']);
    }

    /**
     * Get description development level
     * 
     * @param String $dev_level
     */
    private function get_dev_level($dev_level) {
        switch ($dev_level) {
            case '1':
                return 'Asli';
                break;
            case '2':
                return 'Copy';
                break;
            case '3':
                return 'Salinan';
                break;
            case '4':
                return 'Pertinggal';
                break;
            case '5':
                return 'Asli/Copy';
                break;
            
            default:
                return '-';
                break;
        }
    }

    /**
     * Download file archives
     */
    public function download($id)
    {
        try {
            $archives = Archives::find($id);

            if ($archives->file !== null) {
                $file = public_path('storage/' . $archives->file);
                $headers = array(
                    'Cache-Control' => 'no-cache, no-store, must-revalidate',
                    'Pragma' => 'no-cache',
                    'Expires' => '0',
                    'Content-Description' => 'File Transfer'
                );
    
                return response()->download($file, basename($file), $headers);
            } else {
                return redirect()->back()->with('error', 'File tidak ditemukan');
            }
        } catch (\Exception $e) {
            abort(500);
        }
    }

        /**
     * Import archives
     * 
     * @param \Illuminate\Http\Request  $request
     */
    public function import(Request $request)
    {
        try {
            $this->validate($request, [
                'file' => 'required'
            ]);

            Excel::import(new ArchivesVitalImport, $request->file);

            return response()->json([
                'success' => 'Berhasil melakukan import data arsip statis.'
            ], 200);
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            $errors = "";
            foreach ($failures as $failure) {
                $errors .= "Error baris " . $failure->row() . ", " . $failure->errors()[0] . "<br>\n";
            }

            return response()->json([
                'errors' => $errors
            ], 500);
        }
    }

    /**
     * Download template file for import archives
     * 
     */
    public function download_template()
    {
        try {
            $file = public_path('template/template-arsip-vital.xlsx');
            $headers = array(
                'Cache-Control' => 'no-cache, no-store, must-revalidate',
                'Pragma' => 'no-cache',
                'Expires' => '0',
                'Content-Description' => 'File Transfer'
            );

            return response()->download($file, basename($file), $headers);
        } catch (\Exception $e) {
            abort(500);
        }
    }

    public function get_rack(Request $request)
    {
        $rack = Rack::find($request->id);
        if ($rack->capacity == $rack->used) {
            $text = 'text-danger';
        } else {
            $text = 'text-success';
        }

        return '<span class="span-feedback ' .$text . '">
                    <strong>Kapasitas : ' . $rack->used . '/' . $rack->capacity . '</strong>
                </span>';
    }
}
