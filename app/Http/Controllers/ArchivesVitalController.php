<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use App\Models\User;
use App\Models\Mapping;
use App\Models\Archives;
use DataTables;
use File;

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
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Archives::with('mapping')->where('status', '3')->orderBy('id')->get())
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
                                        <a href="'.route('archives-vital.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
        $mapping = Mapping::orderBy('id')->get();
        $user = User::orderBy('id')->get();
        return view($this->_view.'create', compact('mapping', 'user'));
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
            $path = $file->storeAs('archive/vital', $file_name, ['disk' => 'public']);
        }

        Archives::create([
            'name' => $request->name,
            'mapping_id' => $request->mapping,
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
            'status' => '3'
        ]);

        return redirect()->route($this->_route)->with('success', 'Data arsip berhasil ditambahkan');
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
        return view($this->_view.'edit', compact('archives', 'mapping', 'user'));
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
            $path = $file->storeAs('archive/vital', $file_name, ['disk' => 'public']);

            $old_path = \storage_path('app/public/' . $archives->file);
            File::delete($old_path);
        } else {
            $path = $archives->file;
        }

        $archives->update([
            'name' => $request->name,
            'mapping_id' => $request->mapping,
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

        return redirect()->route($this->_route)->with('success', 'Data arsip berhasil diubah');
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

        return response()->json(['success' => 'Data archives berhasil dihapus']);
    }

    /**
     * Get description development level
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
}
