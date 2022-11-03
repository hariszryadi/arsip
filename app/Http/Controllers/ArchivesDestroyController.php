<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\Rack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class ArchivesDestroyController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'archives.destroy.';
    
    /**
     * Route index
     */
    protected $_route = 'archives-destroy.index';

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
                        AND mapping.retention = 1 
                    HAVING
                        destroyed_at <= DATE_FORMAT(CURDATE(),'%Y')
                    ORDER BY
                        archives.id"
                );

        if (request()->ajax()) {
            return DataTables::of($query)
                ->addColumn('form', function($data) {
                    return '<input type="checkbox" class="sub_chk" data-id="'.$data->id.'">';
                })
                ->editColumn('amount', function($data) {
                    return $data->amount . ' Berkas';
                })
                ->editColumn('dev_level', function($data) {
                    return $this->get_dev_level($data->dev_level);
                })
                ->editColumn('rack', function($data) {
                    return 'R.' . $data->floor . '.' . $data->type . '.' . $data->no_rack;
                })
                ->addColumn('action', function($data){
                    return '<a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i></a>';
                })
                ->rawColumns(['form', 'action'])
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_all(Request $request)
    {
        $ids = explode(',', $request->ids);
        foreach ($ids as $key => $value) {
            $archives = Archives::findOrFail($value);
            $path = \storage_path('app/public/' . $archives->file);
            File::delete($path);
            $delete = $archives->delete();
    
            if ($delete) {
                $rack = Rack::find($archives->rack_id);
                $rack->update([
                    'used' => DB::raw('used - 1')
                ]);
            }
        }

        return response()->json(['success' => 'Data usul musnah berhasil dihapus']);
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
}
