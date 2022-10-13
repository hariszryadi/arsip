<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapping;
use App\Models\PrimaryClassification;
use App\Models\SecurityClassification;
use App\Models\RetentionClassification;
use App\Models\SecondaryClassification;
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

    /**
     * Query classification
     */
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
        $primaries = PrimaryClassification::orderBy('id')->get();

        // $query = DB::select("SELECT
        //             mapping.* 
        //         FROM
        //             mapping
        //             LEFT JOIN primary_classifications ON SUBSTRING_INDEX( mapping.code, '.', 1 ) = primary_classifications.code
        //         ORDER BY
        //             primary_classifications.id, mapping.code");

        $query = DB::table('mapping')
                ->selectRaw('mapping.*')
                ->leftJoin('primary_classifications', DB::raw("SUBSTRING_INDEX( mapping.code, '.', 1 )"), 'primary_classifications.code');
                
        if (request()->filter_primary != null) {
            $query->where(DB::raw("SUBSTRING_INDEX( mapping.code, '.', 1 )"), request()->filter_primary);
        }

        if (request()->filter_archive_type != null) {
            $query->where('mapping.archive_type', 'like', '%'.request()->filter_archive_type.'%');
        }

        $query->orderBy('primary_classifications.id')->orderBy('mapping.code')->get();
        

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

        return view($this->_view.'index', compact('primaries'));
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
        // insert manual HK.02
        $hk = SecondaryClassification::where('code', 'HK.02')->first();
        $insert_hk = ['id' => $hk->id, 'code' => $hk->code, 'name' => $hk->name];
        array_splice( $classification, 22, 0, [$insert_hk] );
        // insert manual PG.02
        $pg2 = SecondaryClassification::where('code', 'PG.02')->first();
        $insert_pg2 = ['id' => $pg2->id, 'code' => $pg2->code, 'name' => $pg2->name];
        array_splice( $classification, 149, 0, [$insert_pg2] );
        // insert manual PG.03
        $pg3 = SecondaryClassification::where('code', 'PG.03')->first();
        $insert_pg3 = ['id' => $pg3->id, 'code' => $pg3->code, 'name' => $pg3->name];
        array_splice( $classification, 153, 0, [$insert_pg3] );
        // insert manual PG.03
        $pk1 = SecondaryClassification::where('code', 'PK.01')->first();
        $insert_pk1 = ['id' => $pk1->id, 'code' => $pk1->code, 'name' => $pk1->name];
        array_splice( $classification, 575, 0, [$insert_pk1] );

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
            'inactive' => $request->inactive,
            'retention_text' => $request->retention_text
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
        // insert manual HK.02
        $hk = SecondaryClassification::where('code', 'HK.02')->first();
        $insert_hk = ['id' => $hk->id, 'code' => $hk->code, 'name' => $hk->name];
        array_splice( $classification, 22, 0, [$insert_hk] );
        // insert manual PG.02
        $pg2 = SecondaryClassification::where('code', 'PG.02')->first();
        $insert_pg2 = ['id' => $pg2->id, 'code' => $pg2->code, 'name' => $pg2->name];
        array_splice( $classification, 149, 0, [$insert_pg2] );
        // insert manual PG.03
        $pg3 = SecondaryClassification::where('code', 'PG.03')->first();
        $insert_pg3 = ['id' => $pg3->id, 'code' => $pg3->code, 'name' => $pg3->name];
        array_splice( $classification, 153, 0, [$insert_pg3] );
        // insert manual PG.03
        $pk1 = SecondaryClassification::where('code', 'PK.01')->first();
        $insert_pk1 = ['id' => $pk1->id, 'code' => $pk1->code, 'name' => $pk1->name];
        array_splice( $classification, 575, 0, [$insert_pk1] );
        
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
            'inactive' => $request->inactive,
            'retention_text' => $request->retention_text
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
