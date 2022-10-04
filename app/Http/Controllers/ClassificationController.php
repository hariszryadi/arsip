<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use App\Models\SecondaryClassification;
use App\Models\TertiaryClassification;
use App\Models\Archives;
use App\Models\Mapping;
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
            'code' => 'required|max:2',
            'name' => 'required|max:255'
        ]);

        $primary = PrimaryClassification::find($id);
        $secondaries = SecondaryClassification::where('primary_classification_id', $id)->get();
        $mappings = Mapping::where('code', $primary->code)->get();
        $archives = Archives::where('code_classification', $primary->code)->get();

        // update manual relation secondary table
        if (!empty($secondaries)) {
            foreach ($secondaries as $key => $secondary) {
                $tertiaries = TertiaryClassification::where('secondary_classification_id', $secondary->id)->get();
                $s_mappings = Mapping::where('code', $secondary->code)->get();
                $s_archives = Archives::where('code_classification', $secondary->code)->get();

                // update manual relation tertiary table
                if (!empty($tertiaries)) {
                    foreach ($tertiaries as $key => $tertiary) {
                        $t_mappings = Mapping::where('code', $tertiary->code)->get();
                        $t_archives = Archives::where('code_classification', $tertiary->code)->get();

                        // update manual relation tertiary mapping table
                        if (!empty($t_mappings)) {
                            foreach ($t_mappings as $key => $t_mapping) {
                                $t_mapping->update([
                                    'code' => $request->code . substr($tertiary->code, 2, 6)
                                ]);
                            }
                        }

                        // update manual relation tertiary archives table
                        if (!empty($t_archives)) {
                            foreach ($t_archives as $key => $t_archive) {
                                $t_archive->update([
                                    'code_classification' => $request->code . substr($tertiary->code, 2, 6)
                                ]);
                            }
                        }

                        $tertiary->update([
                            'code' => $request->code . substr($tertiary->code, 2, 6)
                        ]);
                    }
                }

                // update manual relation secondary mapping table
                if (!empty($s_mappings)) {
                    foreach ($s_mappings as $key => $s_mapping) {
                        $s_mapping->update([
                            'code' => $request->code . substr($secondary->code, 2, 3)
                        ]);
                    }
                }

                // update manual relation secondary archives table
                if (!empty($s_archives)) {
                    foreach ($s_archives as $key => $s_archive) {
                        $s_archive->update([
                            'code_classification' => $request->code . substr($secondary->code, 2, 3)
                        ]);
                    }
                }

                $secondary->update([
                    'code' => $request->code . substr($secondary->code, 2, 3)
                ]);
            }
        }

        // update manual relation mapping table
        if (!empty($mappings)) {
            foreach ($mappings as $key => $mapping) {
                $mapping->update([
                    'code' => $request->code,
                    'name' => $request->name
                ]);
            }
        }

        // update manual relation archives table
        if (!empty($archives)) {
            foreach ($archives as $key => $archive) {
                $archive->update([
                    'code_classification' => $request->code
                ]);
            }
        }

        $primary->update([
            'code' => $request->code,
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
        $mapping = Mapping::where('code', 'like', '%' . $primary->code . '%');
        $archives = Archives::where('code_classification', 'like', '%' . $primary->code . '%');
        $primary->delete();
        $mapping->delete();
        $archives->delete();

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
            'code' => 'required|max:5',
            'name' => 'required|max:255'
        ]);

        $secondary = SecondaryClassification::find($id);
        $tertiaries = TertiaryClassification::where('secondary_classification_id', $id)->get();
        $mappings = Mapping::where('code', $secondary->code)->get();
        $archives = Archives::where('code_classification', $secondary->code)->get();

        // update manual relation tertiary table
        if (!empty($tertiaries)) {
            foreach ($tertiaries as $key => $tertiary) {
                $t_mappings = Mapping::where('code', $tertiary->code)->get();
                $t_archives = Archives::where('code_classification', $tertiary->code)->get();

                // update manual relation tertiary mapping table
                if (!empty($t_mappings)) {
                    foreach ($t_mappings as $key => $t_mapping) {
                        $t_mapping->update([
                            'code' => $request->code . substr($tertiary->code, 5, 5)
                        ]);
                    }
                }

                // update manual relation tertiary archives table
                if (!empty($t_archives)) {
                    foreach ($t_archives as $key => $t_archive) {
                        $t_archive->update([
                            'code_classification' => $request->code . substr($tertiary->code, 5, 5)
                        ]);
                    }
                }

                $tertiary->update([
                    'code' => $request->code . substr($tertiary->code, 5, 5)
                ]);
            }
        }

        // update manual relation mapping table
        if (!empty($mappings)) {
            foreach ($mappings as $key => $mapping) {
                $mapping->update([
                    'code' => $request->code,
                    'name' => $request->name
                ]);
            }
        }

        // update manual relation archives table
        if (!empty($archives)) {
            foreach ($archives as $key => $archive) {
                $archive->update([
                    'code_classification' => $request->code
                ]);
            }
        }

        $secondary->update([
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description != null ? $request->description : ''
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
        $mapping = Mapping::where('code', 'like', '%' . $secondary->code . '%');
        $archives = Archives::where('code_classification', 'like', '%' . $secondary->code . '%');
        $secondary->delete();
        $mapping->delete();
        $archives->delete();

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
            'code' => 'required|max:8',
            'name' => 'required|max:255'
        ]);

        $tertiary = TertiaryClassification::find($id);
        $mappings = Mapping::where('code', $tertiary->code)->get();
        $archives = Archives::where('code_classification', $tertiary->code)->get();

        // update manual relation mapping table
        if (!empty($mappings)) {
            foreach ($mappings as $key => $mapping) {
                $mapping->update([
                    'code' => $request->code,
                    'name' => $request->name
                ]);
            }
        }

        // update manual relation archives table
        if (!empty($archives)) {
            foreach ($archives as $key => $archive) {
                $archive->update([
                    'code_classification' => $request->code
                ]);
            }
        }

        $tertiary->update([
            'code' => $request->code,
            'name' => $request->name,
            'description' => $request->description != null ? $request->description : ''
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
        $mapping = Mapping::where('code', 'like', '%' . $tertiary->code . '%');
        $archives = Archives::where('code_classification', 'like', '%' . $tertiary->code . '%');
        $tertiary->delete();
        $mapping->delete();
        $archives->delete();

        return response()->json(['success' => 'Data klasifikasi tersier berhasil dihapus']);
    }
}
