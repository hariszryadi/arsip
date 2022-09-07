<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use DataTables;

class PrimaryClassificationController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'classification.primary.';

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
            return Datatables::of(PrimaryClassification::orderBy('id')->get())
                ->editColumn('category', function($data) {
                    if ($data->category == '1') {
                        return 'Fasilitatif';
                    } else {
                        return 'Subtantif';
                    }
                })
                // ->addColumn('action', function($data){
                //     return '<ul class="icons-list">
                //                 <li>
                //                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                //                         <i class="icon-menu9"></i>
                //                     </a>
                //                     <ul class="dropdown-menu dropdown-menu-right text-center">
                //                         <li>
                //                             <a href="/classification/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Ubah</a>
                //                         </li>
                //                         <li>
                //                             <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'"><i class="icon-bin text-danger"></i> Hapus</a>
                //                         </li>
                //                     </ul>
                //                 </li>
                //             </ul>';
                // })
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
