<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecurityClassification;
use Yajra\DataTables\DataTables;

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
        $this->middleware('permission:security-list', ['only' => ['index']]);
        $this->middleware('permission:security-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:security-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:security-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(SecurityClassification::orderBy('id')->get())
                ->addColumn('action', function($data){
                    $permission = '';
                    if (auth()->user()->can('security-edit')) {
                        $permission .= '<a href="'.route('security.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>';
                    }
                    if (auth()->user()->can('security-delete')) {
                        $permission .= '<a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>';
                    }

                    if (auth()->user()->can('security-edit') || auth()->user()->can('security-delete')) {
                        return '<div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
    
                                        <div class="dropdown-menu dropdown-menu-right">
                                            '.$permission.'
                                        </div>
                                    </div>
                                </div>';
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
            'name' => 'required|max:255',
            'access_rights' => 'required|max:255',
            'basic_consideration' => 'required|max:255',
            'processing_unit' => 'required|max:255'
        ]);

        SecurityClassification::create([
            'name' => $request->name,
            'access_rights' => $request->access_rights,
            'basic_consideration' => $request->basic_consideration,
            'processing_unit' => $request->processing_unit
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
            'access_rights' => 'required|max:255',
            'basic_consideration' => 'required|max:255',
            'processing_unit' => 'required|max:255'
        ]);

        $security = SecurityClassification::find($id);
        $security->update([
            'name' => $request->name,
            'access_rights' => $request->access_rights,
            'basic_consideration' => $request->basic_consideration,
            'processing_unit' => $request->processing_unit
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
