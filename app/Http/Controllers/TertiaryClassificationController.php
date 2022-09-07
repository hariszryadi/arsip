<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use App\Models\TertiaryClassification;
use App\Models\SecondaryClassification;
use DataTables;

class TertiaryClassificationController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'classification.tertiary.';

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
        $primaries = PrimaryClassification::orderBy('id')->get();
        $secondaries = SecondaryClassification::orderBy('id')->get();

        if (request()->ajax()) {
            $query = TertiaryClassification::with('secondary');
            if (request()->filter_primary != null) {
                $query->whereRelation('secondary', 'primary_classification_id', request()->filter_primary);
            }
            if (request()->filter_secondary != null) {
                $query->where('secondary_classification_id', request()->filter_secondary);
            }
            $query->orderBy('id')->get();

            return Datatables::of($query)
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Ubah</a>
                                    </div>
                                </div>
                            </div>';
                })
                ->make(true);
        }

        return view($this->_view.'index', compact('primaries', 'secondaries'));
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
