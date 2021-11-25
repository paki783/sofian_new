<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    function index(){
        $data = Category::where([
            "parent_cat" => 0,
            "type" => "schools"
        ])->paginate(10);
        return view('backend.category.all',[
            "menu" => "category",
            "data" => $data,
            "type" => "schools"
        ]);
    }
    function add($type){
        $cats = Category::where("type", $type)->get();
        return view('backend.category.add',[
            "menu" => "category",
            "cats" => $cats,
            "type" => $type
        ]);
    }
    function save(Request $req){
        $validator = Validator::make($req->all(), [
            'category_name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        Category::create([
            "category_name" => $req->category_name,
            "parent_cat" => $req->parent_id,
            "type" => $req->type
        ]);
        $webmsg = [
            "class" => "success",
            "message" => "Category Added Successfully",
        ];
        return redirect()->back()->with($webmsg);
    }
    function edit(Request $req){
        $id = $req->id;
        $data = Category::where("id", $id)->first();

        return view('backend.category.edit',[
            "menu" => "category",
            "data" => $data
        ]);
    }
    function update(Request $req){
        $id = $req->id;
        $validator = Validator::make($req->all(), [
            'category_name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        Category::where("id", $id)->update([
            "category_name" => $req->category_name,
        ]);
        $webmsg = [
            "class" => "success",
            "message" => "Category Updated Successfully",
        ];
        return redirect()->back()->with($webmsg);
    }
    function delete(Request $req){
        $id = $req->id;
        Category::where("id", $id)->delete();
        $webmsg = [
            "class" => "success",
            "message" => "Category deleted successfully",
        ];
        return redirect()->back()->with($webmsg);
    }
    public function courses_cat(Request $req){
        $data = Category::where([
            "parent_cat" => 0,
            "type" => "courses_cat"
        ])->paginate(10);
        return view('backend.category.all',[
            "menu" => "category",
            "data" => $data,
            "type" => "courses_cat"
        ]);
    }
}
