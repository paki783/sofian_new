<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Course;
use App\Models\Attachment;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    //
    function index(){
        $data = Course::with([
            "getCategory",
        ])->paginate(10);

        return view("backend.courses.all",[
            "menu" => "courses",
            "data" => $data,
        ]);
    }
    function add(Request $req){
        $categories = Category::where("type", "courses_cat")->get();
        return view("backend.courses.add",[
            "menu" => "courses",
            "categories" => $categories,
        ]);
    }
    function save(Request $req){
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'cat_id' => 'required',
            'desc' => 'required',
            "attachments" => 'required',
            "price" => "required",
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        
        $course_id = Course::create([
            "title" => $req->title,
            "description" => $req->desc,
            "category_id" => $req->cat_id,
            "price" => $req->price
        ])->id;
        if ($req->file('attachments')) {
            foreach($req->file('attachments') as $a){
                $imagePath = "emp_".time()."_".$a;
                $imageName = $a->getClientOriginalName();

                $path = $a->storeAs('uploads', $imageName, 'public');
                
                Attachment::create([
                    "type" => "course",
                    "type_id" => $course_id,
                    "path" => $path,
                ]);
            }
        }
        if(!empty($req->videoURL)){
            $links = explode(",", $req->videoURL);
            foreach($links as $l){
                Attachment::create([
                    "type" => "course_videos",
                    "type_id" => $course_id,
                    "path" => trim($l),
                ]);
            }
        }
        if(empty($check)){
            $webmsg = [
                "class" => "success",
                "message" => "courses added successfully",
            ];
            return redirect()->back()->with($webmsg);
        }
    }
    function edit(Request $req){
        $id = $req->id;
        $categories = Category::where("type", "courses_cat")->get();
        
        $videoURL = [];
        
        $data = Course::with([
            "getCategory",
            "getPictures",
            "getVideos",
        ])->where("id", $id)->first();
        
        if(!empty($data->getVideos)){
            foreach($data->getVideos as $v){
                array_push($videoURL, $v->path);
            }
        }
        if(is_array($videoURL)){
            $videoURL = implode(", ", $videoURL);
        }else{
            $videoURL = "";
        }

        return view("backend.courses.edit",[
            "menu" => "courses",
            "data" => $data,
            "categories" => $categories,
            "videoURL" => $videoURL,
        ]);
    }
    function update(Request $req){
        $id = $req->id;
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'cat_id' => 'required',
            'desc' => 'required',
            "price" => "required",
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Course::where("id", $id)->update([
            "title" => $req->title,
            "description" => $req->desc,
            "category_id" => $req->cat_id,
            "price" => $req->price
        ]);
        if ($req->file('attachments')) {
            foreach($req->file('attachments') as $a){
                $imagePath = "emp_".time()."_".$a;
                $imageName = $a->getClientOriginalName();

                $path = $a->storeAs('uploads', $imageName, 'public');
                
                Attachment::create([
                    "type" => "course",
                    "type_id" => $id,
                    "path" => $path,
                ]);
            }
        }

        if(empty($check)){
            $webmsg = [
                "class" => "success",
                "message" => "courses added successfully",
            ];
            return redirect()->back()->with($webmsg);
        }
    }
    function delete(Request $req){
        $id = $req->id;
        Course::where("id", $id)->delete();
        Attachment::where([
            "type" => "course",
            "type_id" => $id,
        ])->delete();
        Attachment::where([
            "type" => "course_videos",
            "type_id" => $id,
        ])->delete();
        $webmsg = [
            "class" => "success",
            "message" => "courses deleted successfully",
        ];
        return redirect()->back()->with($webmsg);
    }
}
