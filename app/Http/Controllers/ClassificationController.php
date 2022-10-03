<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use App\Models\SecondaryClassification;
use App\Models\TertiaryClassification;
use DataTables;

class ClassificationController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'classification.';

    /**
     * Route index
     */
    protected $_route = 'classification.index';

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
                ->addColumn('action', function($data){
                    return '<div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="'.route('classification.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
        return view($this->_view.'create_primary');
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
            'code' => 'required|max:2',
            'name' => 'required|max:255'
        ]);

        PrimaryClassification::create([
            'code' => $request->code,
            'category' => $request->category,
            'name' => $request->name
        ]);

        return redirect()->route($this->_route)->with('success', 'Data klasifikasi primer berhasil ditambahkan');
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
        $primary = PrimaryClassification::find($id);
        return view($this->_view.'edit_primary', compact('primary'));
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

        $primary = PrimaryClassification::find($id);
        $primary->update([
            'category' => $request->category,
            'name' => $request->name
        ]);

        return redirect()->route($this->_route)->with('success', 'Data klasifikasi primer berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $primary = PrimaryClassification::findOrFail($id);
        $primary->delete();

        return response()->json(['success' => 'Data klasifikasi primer berhasil dihapus']);
    }

    /**
     * Get data secondary classification by primary classification id
     * 
     * @param \Illuminate\Http\Request  $request
     * @return json
     */
    public function get_secondary(Request $request)
    {
        try {
            if ($request->primary_id == '') {
                $secondary = SecondaryClassification::orderBy('id')->get();
            } else {
                $secondary = SecondaryClassification::where('primary_classification_id', $request->primary_id)->orderBy('id')->get();
            }
            return response()->json([
                'data' => $secondary
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get data tertiary classification by primary secondary id
     * 
     * @param \Illuminate\Http\Request  $request
     * @return json
     */
    public function get_tertiary(Request $request)
    {
        try {
            if ($request->secondary_id == '') {
                $tertiary = TertiaryClassification::orderBy('id')->get();
            } else {
                $tertiary = TertiaryClassification::where('secondary_classification_id', $request->secondary_id)->orderBy('id')->get();
            }
            return response()->json([
                'data' => $tertiary
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource secondary.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_secondary()
    {
        $primary = PrimaryClassification::orderBy('id')->get();
        return view($this->_view.'create_secondary', compact('primary'));
    }

    /**
     * Store a newly created resource secondary in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_secondary(Request $request)
    {
        $this->validate($request, [
            'primary_classification' => 'required',
            'code' => 'required|max:5',
            'name' => 'required|max:255'
        ]);

        SecondaryClassification::create([
            'primary_classification_id' => $request->primary_classification,
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description != null ? $request->description : ''
        ]);

        return redirect()->route($this->_route)->with('success', 'Data klasifikasi sekunder berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource secondary.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_secondary($id)
    {
        $secondary = SecondaryClassification::find($id);
        return view($this->_view.'edit_secondary', compact('secondary'));
    }

    /**
     * Update the specified resource secondary in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_secondary(Request $request, $id)
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
     * Remove the specified resource secondary from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_secondary($id)
    {
        $secondary = SecondaryClassification::findOrFail($id);
        $secondary->delete();

        return response()->json(['success' => 'Data klasifikasi sekunder berhasil dihapus']);
    }

    /**
     * Show the form for creating a new resource tertiary.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_tertiary()
    {
        $primary = PrimaryClassification::orderBy('id')->get();
        return view($this->_view.'create_tertiary', compact('primary'));
    }

    /**
     * Store a newly created resource tertiary in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_tertiary(Request $request)
    {
        $this->validate($request, [
            'primary_classification' => 'required',
            'secondary_classification' => 'required',
            'code' => 'required|max:8',
            'name' => 'required|max:255'
        ]);

        TertiaryClassification::create([
            'secondary_classification_id' => $request->secondary_classification,
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description != null ? $request->description : ''
        ]);

        return redirect()->route($this->_route)->with('success', 'Data klasifikasi tersier berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource tertiary.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_tertiary($id)
    {
        $tertiary = TertiaryClassification::find($id);
        return view($this->_view.'edit_tertiary', compact('tertiary'));
    }

    /**
     * Update the specified resource tertiary in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_tertiary(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255'
        ]);

        $tertiary = TertiaryClassification::find($id);
        $tertiary->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route($this->_route)->with('success', 'Data klasifikasi tersier berhasil diubah');
    }

    /**
     * Remove the specified resource tertiary from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_tertiary($id)
    {
        $tertiary = TertiaryClassification::findOrFail($id);
        $tertiary->delete();

        return response()->json(['success' => 'Data klasifikasi tersier berhasil dihapus']);
    }
}
