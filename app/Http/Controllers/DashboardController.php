<?php

namespace App\Http\Controllers;

use App\Models\Archives;
use App\Models\Rack;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $archive = Archives::all();
        $rack = Rack::orderBy('id')->get();
        
        return view('home', compact('archive', 'rack'));
    }
}
