<?php

namespace App\Http\Controllers;

use App\Models\Collegium;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $collegiums = Collegium::all();
        return view('home', compact('collegiums'));
    }
//    public function admin()
//    {
//        $this->middleware('auth');
//        return view('admin.home');
//    }
}
