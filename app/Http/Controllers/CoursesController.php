<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\PurchaseHistory;
use Illuminate\Support\Facades\Validator;
Use Auth;

class CoursesController extends Controller
{
    //
    function courses(){
        $courses = Course::paginate(10);
        return view('frontend.courses.courses', [
            "data" => $courses,
        ]);
    }
    function details($id){
        $courses = Course::where("id", $id)->first();
        return view('frontend.courses.detail', [
            "data" => $courses,
        ]);
    }
    function purchaseHistory(Request $req){
        $validator = Validator::make($req->all(), [
            'course_id' => 'required',
        ]);

        PurchaseHistory::create([
            "user_id" => Auth::user()->id,
            "course_id" => $req->course_id
        ]);

        $webmsg = [
            "class" => "success",
            "message" => "course purchased successfully",
        ];
        
        return response()->json($webmsg, 200);
    }
}
