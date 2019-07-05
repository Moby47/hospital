<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\appointment;

class guestcontroller extends Controller
{
    
    public function book(){
        return view('book');
    }

    public function bookApp(Request $request){
        $save = new appointment;
       $save->fullname = $request->input('name');
       $save->age = $request->input('age');
       $save->sym = $request->input('sym');
       $save->save();
       return redirect('/book')->with('msg','Your Appointment Was Booked successfully!');
    }
    
}
