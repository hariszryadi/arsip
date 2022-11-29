<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ArchivesInactiveImport;
use App\Models\ArchiveCreator;
use App\Models\Archives;
use App\Models\Mapping;
use App\Models\Rack;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class ArchivesInactiveController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'archives.inactive.';
    
    /**
     * Route index
     */
    protected $_route = 'archives-inactive.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:archives-inactive-list', ['only' => ['index']]);
        $this->middleware('permission:archives-inactive-create', ['only' => ['create', 'store', 'import', 'download_template']]);
        $this->middleware('permission:archives-inactive-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:archives-inactive-delete', ['only' => ['destroy']]);
        $this->middleware('permission:archives-inactive-download', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Archives::with('mapping')->where('status', '2')->orderBy('id')->get())
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Berkas';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->editColumn('rack', function($data) {
                    return 'R.' . $data->rack->floor . '.' . $data->rack->type . '.' . $data->rack->no_rack;
                })
                ->addColumn('action', function($data){
                    $permission = '';
                    if (auth()->user()->can('archives-inactive-download')) {
                        $permission .= '<a href="'.route('archives-inactive.download', $data->id).'" class="dropdown-item"><i class="icon-download text-success"></i> Download</a>';
                    }
                    if (auth()->user()->can('archives-inactive-edit')) {
                        $permission .= '<a href="'.route('archives-inactive.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>';
                    }
                    if (auth()->user()->can('archives-inactive-delete')) {
                        $permission .= '<a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>';
                    }

                    if (auth()->user()->can('archives-inactive-download') || auth()->user()->can('archives-inactive-edit') || auth()->user()->can('archives-inactive-delete')) {
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
        $mapping = Mapping::orderBy('id')->get();
        $user = User::orderBy('id')->get();
        $creator = ArchiveCreator::orderBy('id')->get();
        $rack = Rack::where('type', 'D')->orderBy('id')->get();
        return view($this->_view.'create', compact('mapping', 'user', 'creator', 'rack'));
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
            'mapping' => 'required',
            'archive_creator_id' => 'required',
            'year' => 'required',
            'amount' => 'required',
            'dev_level' => 'required',
            'rack_id' => 'required',
            'box' => 'required',
            // 'file' => 'mimes:jpeg,bmp,png,gif,svg,pdf',
            'file' => 'mimes:pdf',
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
            $path = $file->storeAs('archive/inactive', $file_name, ['disk' => 'public']);
        }

        $store = Archives::create([
            'name' => $request->name,
            'mapping_id' => $request->mapping,
            'archive_creator_id' => $request->archive_creator_id,
            'year' => $request->year,
            'amount' => $request->amount,
            'dev_level' => $request->dev_level,
            'rack_id' => $request->rack_id,
            'box' => $request->box,
            'file' => $path,
            'officer' => $request->officer,
            'status' => '2'
        ]);

        if ($store) {
            $rack = Rack::find($request->rack_id);
            $rack->update([
                'used' => DB::raw('used + 1')
            ]);
        }

        return redirect()->route($this->_route)->with('success', 'Data arsip inaktif berhasil ditambahkan');
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
        $mapping = Mapping::orderBy('id')->get();
        $user = User::orderBy('id')->get();
        $creator = ArchiveCreator::orderBy('id')->get();
        $rack = Rack::orderBy('id')->get();
        return view($this->_view.'edit', compact('archives', 'mapping', 'user', 'creator', 'rack'));
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
            'mapping' => 'required',
            'archive_creator_id' => 'required',
            'year' => 'required',
            'amount' => 'required',
            'dev_level' => 'required',
            'rack_id' => 'required',
            'box' => 'required',
            // 'file' => 'mimes:jpeg,bmp,png,gif,svg,pdf',
            'file' => 'mimes:pdf',
            'officer' => 'required'
        ]);

        $archives = Archives::find($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = date('YmdHis') . $file->getClientOriginalName();
            $path = $file->storeAs('archive/inactive', $file_name, ['disk' => 'public']);

            $old_path = \storage_path('app/public/' . $archives->file);
            File::delete($old_path);
        } else {
            $path = $archives->file;
        }

        $archives->update([
            'name' => $request->name,
            'mapping_id' => $request->mapping,
            'archive_creator_id' => $request->archive_creator_id,
            'year' => $request->year,
            'amount' => $request->amount,
            'dev_level' => $request->dev_level,
            'rack_id' => $request->rack_id,
            'box' => $request->box,
            'file' => $path,
            'officer' => $request->officer,
        ]);

        return redirect()->route($this->_route)->with('success', 'Data arsip inaktif berhasil diubah');
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

        return response()->json(['success' => 'Data arsip inaktif berhasil dihapus']);
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
     * 
     * @param  int  $id
     */
    public function download($id)
    {
        try {
            $archives = Archives::find($id);
            
            if ($archives->file != null) {
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

            // $pathTofile = $request->file('file')->store('inactive','public');
            // $import =  new ArchivesInactiveImport;
            // $import->import(\storage_path('app/public/' . $pathTofile));

            Excel::import(new ArchivesInactiveImport, $request->file);

            return response()->json([
                'success' => 'Berhasil melakukan import data arsip inaktif.'
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
            $file = public_path('template/template-arsip-inaktif.xlsx');
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
        
        return '<span class="span-feedback ' . $text . '">
                    <strong>Kapasitas : ' . $rack->used . '/' . $rack->capacity . '</strong>
                </span>';
    }
}
