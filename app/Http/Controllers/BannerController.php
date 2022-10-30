<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class BannerController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'banner.';

    /**
     * Route index
     */
    protected $_route = 'banner.index';

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
            return DataTables::of(Banner::orderBy('id')->get())
                ->editColumn('status', function($data) {
                    if ($data->status == 1) {
                        $checked = 'checked';
                        $text = 'Aktif';
                    } else {
                        $checked = '';
                        $text = 'Tidak Aktif';
                    }
                    return '<div class="custom-control custom-switch custom-control-success mb-2">
                                <input type="checkbox" class="custom-control-input switch" id="sc_r_success'.$data->id.'" data-id="'.$data->id.'" '.$checked.'>
                                <label class="custom-control-label" for="sc_r_success'.$data->id.'">'.$text.'</label>
                            </div>';
                })    
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="'.route('banner.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                        <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" class="dropdown-item"><i class="icon-bin text-danger"></i> Hapus</a>
                                    </div>
                                </div>
                            </div>';
                })
                ->rawColumns(['status', 'action'])
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
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banner', ['disk' => 'public']);
        }

        Banner::create([
            'image' => $path,
            'caption' => $request->caption,
            'status' => 1
        ]);

        return redirect()->route($this->_route)->with('success', 'Data banner berhasil ditambahkan');
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
        $banner = Banner::find($id);
        return view($this->_view.'form', compact('banner'));
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
        $banner = Banner::find($id);
        if ($request->hasFile('image')) {
            $image = $banner->first()->image;
            $path = \storage_path('app/public/' . $image);
            File::delete($path);

            $path = $request->file('image')->store('banner', ['disk' => 'public']);
            $data['image'] = $path;
        }

        $data['caption'] = $request->caption;
        $banner->update($data);

        return redirect()->route($this->_route)->with('success', 'Data banner berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $image = $banner->first()->image;
        $path = \storage_path('app/public/' . $image);
        File::delete($path);
        $banner->delete();

        return response()->json(['success' => 'Data rak berhasil dihapus']);
    }

    /**
     * Update status the specified resource from storage.
     */
    public function update_status(Request $request)
    {
        $banner = Banner::find($request->id);
        if ($banner->status == 1) {
            $banner->update(['status' => 0]);
        } else {
            $banner->update(['status' => 1]);
        }
        
        return response()->json(['success' => 'Status banner berhasil diubah']);
    }
}
