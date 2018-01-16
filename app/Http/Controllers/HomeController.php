<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Closure;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('Start.home');

    }

    public function info($idLink)
    {
        return view('Start.startManual')->with(['link'=>$idLink]);
    }

}
