<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\Banner;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class GuestController extends Controller
{
    /**
     * Show form register guest.
     */
    public function register()
    {
        return view('guest');
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
            'fullname' => 'required',
            'address' => 'required',
            'nik' => 'required'
        ]);

        if ($request->static == null && $request->inactive == null) {
            return redirect()->back()->withInput()->with('error', 'Pilih minimail 1 jenis arsip');
        }

        $token = Str::random(40);
        Guest::create([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'nik' => $request->nik,
            'static' => $request->static,
            'inactive' => $request->inactive,
            'token' => $token
        ]);
        
        return redirect()->route('guest.archive', $token);
    }

    /**
     * Show page guest
     * 
     * @param String $token
     */
    public function archive($token)
    {
        $guest = Guest::where('token', $token)->first();
        $banner = Banner::where('status', 1)->get();
        return view('archive-guest', compact('guest', 'banner'));
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
}
