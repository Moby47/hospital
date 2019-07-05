<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\appointment;

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
        return view('create');
    }

    public function manage(){
        $rec = patient::all();
        return view('manage')->with('rec',$rec);
    }

    public function create(){
        return view('create');
    }

    public function appointment(){
        $rec = appointment::all();
        return view('appointment')->with('app',$app);
    }

    public function newP(Request $request){
        $save = new patient;
       $save->fullname = $request->input('name');
       $save->age = $request->input('age');
       $save->sym = $request->input('sym');
       $save->pres = $request->input('pres');
       $save->save();
       return redirect('/create')->with('msg','Patient Record Created successfully!');
    }

}
