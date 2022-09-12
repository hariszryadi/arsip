<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use App\Models\Archives;
use DataTables;

class ArchivesController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'archives.';
    
    /**
     * Route index
     */
    protected $_route = 'archives.index';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Archives::orderBy('id')->get())
                ->editColumn('created_at', function($data) {
                    $date = $data->created_at;
                    $date->settings(['formatFunction' => 'translatedFormat']);
                    return $date->format('j F Y ');
                })
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="'.route('archives.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
        $primaries = PrimaryClassification::orderBy('id')->get();
        return view($this->_view.'form', compact('primaries'));
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
