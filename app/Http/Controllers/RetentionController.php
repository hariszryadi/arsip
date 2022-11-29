<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RetentionClassification;
use Yajra\DataTables\DataTables;

class RetentionController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'retention.';

    /**
     * Route index
     */
    protected $_route = 'retention.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:retention-list', ['only' => ['index']]);
        $this->middleware('permission:retention-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:retention-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:retention-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(RetentionClassification::orderBy('id')->get())
                ->addColumn('action', function($data){
                    $permission = '';
                    if (auth()->user()->can('retention-edit')) {
                        $permission .= '<a href="'.route('retention.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>';
                    }
                    if (auth()->user()->can('retention-delete')) {
                        $permission .= '<a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>';
                    }

                    if (auth()->user()->can('retention-edit') || auth()->user()->can('retention-delete')) {
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
        ]);

        RetentionClassification::create([
            'name' => $request->name
        ]);

        return redirect()->route($this->_route)->with('success', 'Data retensi berhasil ditambahkan');
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
        $retention = RetentionClassification::find($id);
        return view($this->_view.'form', compact('retention'));
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

        $retention = RetentionClassification::find($id);
        $retention->update([
            'name' => $request->name
        ]);

        return redirect()->route($this->_route)->with('success', 'Data retensi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $retetntion = RetentionClassification::findOrFail($id);
        $retetntion->delete();

        return response()->json(['success' => 'Data retensi berhasil dihapus']);
    }
}
