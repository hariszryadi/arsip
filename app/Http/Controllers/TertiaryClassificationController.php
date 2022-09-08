<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryClassification;
use App\Models\TertiaryClassification;
use App\Models\SecondaryClassification;
use DataTables;

class TertiaryClassificationController extends Controller
{
    /**
     * Folder views
     */
    protected $_view = 'classification.tertiary.';

    /**
     * Route index
     */
    protected $_route = 'tertiary-classification.index';

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
        $secondaries = SecondaryClassification::orderBy('id')->get();

        if (request()->ajax()) {
            $query = TertiaryClassification::with('secondary');
            if (request()->filter_primary != null) {
                $query->whereRelation('secondary', 'primary_classification_id', request()->filter_primary);
            }
            if (request()->filter_secondary != null) {
                $query->where('secondary_classification_id', request()->filter_secondary);
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
                                        <a href="'.route('tertiary-classification.edit', $data->id).'" class="dropdown-item"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                    </div>
                                </div>
                            </div>';
                })
                ->make(true);
        }

        return view($this->_view.'index', compact('primaries', 'secondaries'));
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
        $tertiary = TertiaryClassification::find($id);
        return view($this->_view.'edit', compact('tertiary'));
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

        $tertiary = TertiaryClassification::find($id);
        $tertiary->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route($this->_route)->with('success', 'Data klasifikasi tersier berhasil diubah');
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
}
