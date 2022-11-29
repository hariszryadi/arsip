<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ArchivesOverController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'archives.over.';
    
    /**
     * Route index
     */
    protected $_route = 'archives-over.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:archives-over-list', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::select(
                    "SELECT
                        archives.id,
                        archives.name,
                        mapping.code,
                        mapping.archive_type,
                        archives.year,
                        archives.amount,
                        archives.dev_level,
                        archives.rack_id,
                        archives.box,
                        mapping.active,
                        mapping.inactive,
                        racks.floor,
                        racks.type,
                        racks.no_rack,
                        retention_classifications.name AS retention,
                        ( CAST( archives.YEAR AS UNSIGNED ) + mapping.active ) AS destroyed_at 
                    FROM
                        archives
                        LEFT JOIN mapping ON archives.mapping_id = mapping.id
                        LEFT JOIN racks ON archives.rack_id = racks.id
                        LEFT JOIN retention_classifications ON mapping.retention = retention_classifications.id 
                    WHERE
                        archives.status = '2' 
                        AND mapping.retention = 2 
                    HAVING
                        destroyed_at <= DATE_FORMAT(CURDATE(),'%Y')
                    ORDER BY
                        archives.id"
                );

        if (request()->ajax()) {
            return DataTables::of($query)
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Berkas';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->editColumn('rack', function($data) {
                    return 'R.' . $data->floor . '.' . $data->type . '.' . $data->no_rack;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
