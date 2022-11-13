<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\Banner;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class GuestController extends Controller
{
    /**
     * Show form register guest.
     */
    public function register()
    {
        $banner = Banner::where('status', 1)->get();
        return view('guest', compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(), 
            [
                'fullname' => 'required',
                'address' => 'required',
                'nik' => 'required|numeric'
            ],
            [
                'fullname.required' => 'Kolom Nama Lengkap harus diisi',
                'address.required' => 'Kolom Alamat / Nama Instansi harus diisi',
                'nik.required' => 'Kolom NIK / NIP harus diisi',
                'nik.numeric' => 'Kolom NIK / NIP harus berupa angka'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($request->static == null && $request->inactive == null) {
            return response()->json(['error'=>'Pilih minimail 1 jenis arsip']);
        }

        $token = Str::random(40);
        Guest::create([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'nik' => $request->nik,
            'static' => $request->static,
            'inactive' => $request->inactive,
            'phone_number' => $request->phone_number,
            'token' => $token
        ]);
        
        return response()->json([
            'url' => url('/guest/archive/'.$token) 
        ]);
    }

    /**
     * Show page guest
     * 
     * @param String $token
     */
    public function archive($token)
    {
        $guest = Guest::where('token', $token)->first();
        return view('archive-guest', compact('guest'));
    }

    /**
     * Clear token guest
     * 
     * @param String $token
     */
    public function logout($token)
    {
        $guest = Guest::where('token', $token);
        $guest->update([
            'token' => null
        ]);

        return redirect()->route('guest.register');
    }

    /**
     * Datatable archive static
     */
    public function get_static()
    {
        return DataTables::of(Archives::with('mapping')->where('status', '1')->orderBy('id')->get())
            ->editColumn('amount', function($data) {
                return $data->amount . ' Sampul';
            })
            ->editColumn('dev_level', function($data) {
                return $this->get_dev_level($data->dev_level);
            })
            ->editColumn('rack', function($data) {
                return 'R.' . $data->rack->floor . '.' . $data->rack->type . '.' . $data->rack->no_rack;
            })
            ->addColumn('generate', function($data) {
                if ($data->file != null) {
                    return '<a href="'.route('guest.generate-pdf', $data->id).'" class="btn btn-download"><i class="fa fa-download" title="download"></i></a>';
                }
            })
            ->rawColumns(['generate'])
            ->make(true);
    }

    /**
     * Datatable archive inactive
     */
    public function get_inactive()
    {
        return DataTables::of(Archives::with('mapping')->where('status', '2')->orderBy('id')->get())
            ->editColumn('amount', function($data) {
                return $data->amount . ' Sampul';
            })
            ->editColumn('dev_level', function($data) {
                return $this->get_dev_level($data->dev_level);
            })
            ->editColumn('rack', function($data) {
                return 'R.' . $data->rack->floor . '.' . $data->rack->type . '.' . $data->rack->no_rack;
            })
            ->editColumn('mapping', function($data) {
                return '(' . $data->mapping->code . ') - ' . $data->mapping->archive_type;
            })
            ->addColumn('generate', function($data) {
                return '<a href="'.route('guest.generate-pdf', $data->id).'" class="btn btn-download"><i class="fa fa-download" title="download"></i></a>';
            })
            ->rawColumns(['generate'])
            ->make(true);
    }

    /**
     * Get description development level.
     * 
     * @param String $dev_level
     */
    private function get_dev_level($dev_level) 
    {
        switch ($dev_level) {
            case '1':
                return 'Asli';
                break;
            case '2':
                return 'Copy';
                break;
            case '3':
                return 'Salinan';
                break;
            case '4':
                return 'Pertinggal';
                break;
            case '5':
                return 'Asli/Copy';
                break;
            
            default:
                return '-';
                break;
        }
    }

    /**
     * Download file
     *
     * @return string
    */
    public function generate_pdf($id)
    {
        $archives = Archives::find($id);
        $file = public_path('storage/' . $archives->file);
        $headers = array(
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
            'Content-Description' => 'File Transfer'
        );

        return response()->download($file, basename($file), $headers);
    }
}
