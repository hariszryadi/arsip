<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecondaryClassification;
use App\Models\PrimaryClassification;
use DataTables;

class SecondaryClassificationController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'classification.secondary.';
    
    /**
     * Route index
     */
    protected $_route = 'secondary-classification.index';

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

        if (request()->ajax()) {
            $query = SecondaryClassification::with('primary');
            if (request()->filter_primary != null) {
                $query->where('primary_classification_id', request()->filter_primary);
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
                                        <a href="'.route('secondary-classification.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
        $secondary = SecondaryClassification::find($id);
        return view($this->_view.'edit', compact('secondary'));
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
            'name' => 'required|max:255'
        ]);

        $secondary = SecondaryClassification::find($id);
        $secondary->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route($this->_route)->with('success', 'Data klasifikasi sekunder berhasil diubah');
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
