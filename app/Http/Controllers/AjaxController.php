<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AjaxController extends Controller
{
    //
    function getCategory(Request $req){
        $sub_cat = [];
        $data = Category::where("parent_cat", $req->cat_id)->get();
        $selected_title = Category::where("id", $req->cat_id)->first();
        if(!empty($data[0])){
            $sub_cat = Category::where("parent_cat", $data[0]->id)->get();
        }
        $res = [
            "status" => 0,
            "message" => "success",
            "data" => $data,
            "sub_cat" => $sub_cat,
            "selected_title" => $selected_title,
        ];
        return response()->json($res, 200);
    }
}
