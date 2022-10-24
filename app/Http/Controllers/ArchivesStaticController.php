<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use Illuminate\Support\Facades\DB;
use App\Imports\ArchivesImport;
use App\Models\Archives;
use App\Models\Mapping;
use App\Models\User;
use DataTables;
use Excel;
use File;

class ArchivesStaticController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'archives.static.';
    
    /**
     * Route index
     */
    protected $_route = 'archives-static.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Archives::with('mapping')->where('status', '1')->orderBy('id')->get())
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Sampul';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="'.route('archives-static.download', $data->id).'" class="dropdown-item"><i class="icon-download text-success"></i> Download</a>
                                        <a href="'.route('archives-static.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                        <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>';
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
        return view($this->_view.'create', compact('classification', 'user'));
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
            'year' => 'required',
            'amount' => 'required',
            'dev_level' => 'required',
            'loc_floor' => 'required',
            'loc_status' => 'required',
            'loc_rack' => 'required',
            'loc_box' => 'required',
            'file' => 'mimes:jpeg,bmp,png,gif,svg,pdf',
            'officer' => 'required'
        ]);

        $path = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = date('YmdHis') . $file->getClientOriginalName();
            $path = $file->storeAs('archive/static', $file_name, ['disk' => 'public']);
        }

        Archives::create([
            'name' => $request->name,
            'code_classification' => $request->code_classification,
            'year' => $request->year,
            'amount' => $request->amount,
            'dev_level' => $request->dev_level,
            'location' => 'R'.$request->loc_floor.$request->loc_status.$request->loc_rack.$request->loc_box,
            'loc_floor' => $request->loc_floor,
            'loc_status' => $request->loc_status,
            'loc_rack' => $request->loc_rack,
            'loc_box' => $request->loc_box,
            'file' => $path,
            'officer' => $request->officer,
            'status' => '1'
        ]);

        return redirect()->route($this->_route)->with('success', 'Data arsip statis berhasil ditambahkan');
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
        return view($this->_view.'edit', compact('archives', 'classification', 'user'));

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
            'year' => 'required',
            'amount' => 'required',
            'dev_level' => 'required',
            'loc_floor' => 'required',
            'loc_status' => 'required',
            'loc_rack' => 'required',
            'loc_box' => 'required',
            'file' => 'mimes:jpeg,bmp,png,gif,svg,pdf',
            'officer' => 'required'
        ]);

        $archives = Archives::find($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = date('YmdHis') . $file->getClientOriginalName();
            $path = $file->storeAs('archive/static', $file_name, ['disk' => 'public']);

            $old_path = \storage_path('app/public/' . $archives->file);
            File::delete($old_path);
        } else {
            $path = $archives->file;
        }

        $archives->update([
            'name' => $request->name,
            'code_classification' => $request->code_classification,
            'year' => $request->year,
            'amount' => $request->amount,
            'dev_level' => $request->dev_level,
            'location' => 'R'.$request->loc_floor.$request->loc_status.$request->loc_rack.$request->loc_box,
            'loc_floor' => $request->loc_floor,
            'loc_status' => $request->loc_status,
            'loc_rack' => $request->loc_rack,
            'loc_box' => $request->loc_box,
            'file' => $path,
            'officer' => $request->officer,
        ]);

        return redirect()->route($this->_route)->with('success', 'Data arsip statis berhasil diubah');
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
        $archives->delete();

        return response()->json(['success' => 'Data arsip statis berhasil dihapus']);
    }

    /**
     * Get description development level
     * 
     * @param String $dev_level
     */
    private function get_dev_level($dev_level) 
    {
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
            $file = public_path('storage/' . $archives->file);
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

    public function import(Request $request)
    {
        try {
            Excel::import(new ArchivesImport, $request->file);
            return response()->json([
                'success' => 'Berhasil melakukan import data arsip statis.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
