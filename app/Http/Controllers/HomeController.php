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
        $rec = patient::where('id','!=',0)->paginate(7);
        return view('manage')->with('rec',$rec);
    }

    public function create(){
        return view('create');
    }

    public function appointment(){
        $app = appointment::where('id','!=',0)->paginate(7);
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


    public function edit($id){
        return $id;
    }


    public function deletep($id){
        $del = patient::findorfail($id);
        $del->delete();
        return redirect('/manage')->with('msg','Patient Record Deleted!');
    }



    public function deletea($id){
        $del = appointment::findorfail($id);
        $del->delete();
        return redirect('/appointment')->with('msg','Appointment Deleted!');
    }

}
