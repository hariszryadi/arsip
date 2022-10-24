<?php

namespace App\Http\Controllers;

use App\Models\Rack;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RackController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'rack.';

    /**
     * Route index
     */
    protected $_route = 'rack.index';

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
            return DataTables::of(Rack::orderBy('id')->get())
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="'.route('rack.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                        <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>';
                })
                ->editColumn('type', function($data) {
                    if ($data->type == 'S') {
                        return 'Statis';
                    } else {
                        return 'Dinamis';
                    }
                    
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
        return view($this->_view.'form');
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
            'floor' => 'required',
            'type' => 'required',
            'no_rack' => 'required',
            'capacity' => 'required'
        ]);

        Rack::create([
            'floor' => $request->floor,
            'type' => $request->type,
            'no_rack' => $request->no_rack,
            'capacity' => $request->capacity
        ]);

        return redirect()->route($this->_route)->with('success', 'Data rak berhasil ditambahkan');
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
        $rack = Rack::find($id);
        return view($this->_view.'form', compact('rack'));
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
            'floor' => 'required',
            'type' => 'required',
            'no_rack' => 'required',
            'capacity' => 'required'
        ]);

        $rack = Rack::find($id);
        $rack->update([
            'floor' => $request->floor,
            'type' => $request->type,
            'no_rack' => $request->no_rack,
            'capacity' => $request->capacity
        ]);

        return redirect()->route($this->_route)->with('success', 'Data rak berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rack = Rack::findOrFail($id);
        $rack->delete();

        return response()->json(['success' => 'Data rak berhasil dihapus']);
    }
}
