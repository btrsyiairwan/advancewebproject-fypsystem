<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class homeControl extends Controller
{
    function index(){
        $output=Student::all();
        return view('home',['list'=>$output]);
    }

    function redirectFunct(){

        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
            return view('admin.adminpage');
        }

        else
        {
        // return view('home');
        // return view('main');
        return view('supervisor.supervisorpage');
    }
    }
    
}
