<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecurityClassification;
use DataTables;

class SecurityController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'security.';

    /**
     * Route index
     */
    protected $_route = 'security.index';

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
            return Datatables::of(SecurityClassification::orderBy('id')->get())
                ->editColumn('created_at', function($data) {
                    if ($data->created_at != null) {
                        $date = $data->created_at;
                        return $date->format('Y-m-d H:i:s');
                    }
                })
                ->editColumn('updated_at', function($data) {
                    if ($data->updated_at != null) {
                        $date = $data->updated_at;
                        return $date->format('Y-m-d H:i:s');
                    }
                })
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="'.route('security.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
            'name' => 'required|max:255',
        ]);

        SecurityClassification::create([
            'name' => $request->name
        ]);

        return redirect()->route($this->_route)->with('success', 'Data keamanan berhasil ditambahkan');
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
        $security = SecurityClassification::find($id);
        return view($this->_view.'form', compact('security'));
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
        ]);

        $security = SecurityClassification::find($id);
        $security->update([
            'name' => $request->name
        ]);

        return redirect()->route($this->_route)->with('success', 'Data keamanan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $security = SecurityClassification::findOrFail($id);
        $security->delete();

        return response()->json(['success' => 'Data keamanan berhasil dihapus']);
    }
}
