<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->session()->put(['vladan'=>'master php']);
        
        //session(['vladan', 'student']); //global,dont need this Request $request in function argument
        
        //echo $request->session()->get('vladan');
        
//        session(['vladan2'=>'sesija1']);
//        
//        echo session('vladan2');
        
        //return $request->session()->all();
        
        
        //$request->session()->forget('vladan2');
        
        //$request->session()->flush();
        
        //return $request->session()->all();
        
        //$request->session()->flash('message', 'Post has been create');
        
        //return $request->session()->get('message');
        
        return view('home');
    }
}
