<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    //
    function inclass(Request $req){
        return view('classroom.inclass');
    }
}
