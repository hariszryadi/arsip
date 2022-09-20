<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapping;
use App\Models\PrimaryClassification;
use App\Models\SecurityClassification;
use App\Models\RetentionClassification;
use Illuminate\Support\Facades\DB;
use DataTables;

class MappingController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'mapping.';

    /**
     * Route index
     */
    protected $_route = 'mapping.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    private function query($code) {
        $query = DB::select('SELECT * FROM ( 
            SELECT CODE, NAME FROM primary_classifications UNION ALL 
            SELECT CODE, NAME FROM secondary_classifications UNION ALL 
            SELECT CODE, NAME FROM tertiary_classifications 
        ) a WHERE CODE  = "'.$code.'"');

        return $query;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::select("SELECT
                    mapping.* 
                FROM
                    mapping
                    LEFT JOIN primary_classifications ON SUBSTRING_INDEX( mapping.CODE, '.', 1 ) = primary_classifications.CODE 
                ORDER BY
                    primary_classifications.id");

        if (request()->ajax()) {
            return Datatables::of($query)
                ->editColumn('name', function($data) {
                    return $data->code.' - '.$data->name;
                })
                ->editColumn('security', function($data) {
                    $security = SecurityClassification::where('id', $data->security)->first();
                    return $security->name;
                })
                ->editColumn('retention', function($data) {
                    $retention = RetentionClassification::where('id', $data->retention)->first();
                    return $retention->name;
                })
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="'.route('mapping.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
                foreach ($p->secondary as $j => $s) {
                    if ($s->tertiary()->exists()) {
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

        $security = SecurityClassification::orderBy('id')->get();
        $retention = RetentionClassification::orderBy('id')->get();

        return view($this->_view.'form', compact('classification', 'security', 'retention'));
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
            'classification' => 'required',
            'archive_type' => 'required|unique:mapping,archive_type',
            'security' => 'required',
            'retention' => 'required',
            'active' => 'required',
            'inactive' => 'required'
        ]);

        Mapping::create([
            'code' => $request->classification,
            'name' => $this->query($request->classification)[0]->{"NAME"},
            'archive_type' => $request->archive_type,
            'security' => $request->security,
            'retention' => $request->retention,
            'active' => $request->active,
            'inactive' => $request->inactive
        ]);

        return redirect()->route($this->_route)->with('success', 'Data mapping berhasil ditambahkan');
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
        $mapping = Mapping::find($id);
        $classification = [];
        $primary = PrimaryClassification::orderBy('id')->get();
        foreach ($primary as $i => $p) {
            if ($p->secondary()->exists()) {
                foreach ($p->secondary as $j => $s) {
                    if ($s->tertiary()->exists()) {
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

        $security = SecurityClassification::orderBy('id')->get();
        $retention = RetentionClassification::orderBy('id')->get();

        return view($this->_view.'form', compact('mapping', 'classification', 'security', 'retention'));
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
            'classification' => 'required',
            'archive_type' => 'required|unique:mapping,archive_type,'.$id,
            'security' => 'required',
            'retention' => 'required',
            'active' => 'required',
            'inactive' => 'required'
        ]);

        $mapping = Mapping::find($id);
        $mapping->update([
            'code' => $request->classification,
            'name' => $this->query($request->classification)[0]->{"NAME"},
            'archive_type' => $request->archive_type,
            'security' => $request->security,
            'retention' => $request->retention,
            'active' => $request->active,
            'inactive' => $request->inactive
        ]);

        return redirect()->route($this->_route)->with('success', 'Data mapping berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapping = Mapping::findOrFail($id);
        $mapping->delete();

        return response()->json(['success' => 'Data mapping berhasil dihapus']);
    }
}
