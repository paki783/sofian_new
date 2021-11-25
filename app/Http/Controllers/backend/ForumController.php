<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fourm;
use App\Models\FourmComment;

class ForumController extends Controller
{
    //
    function all(){
        $data = Fourm::with([
            "getUser"
        ])->whereHas("getUser")->withCount("getComments")->paginate(10);
        return view("backend.forum.all",[
            "menu" => "forum",
            "data" => $data,
        ]);
    }
    function edit(Request $req){
        $id = $req->id;
        $data = Fourm::with([
            "getUser",
            "getComments" => function($q){
                $q->with("getUser");
            },
        ])->first();
        return view("backend.forum.edit",[
            "menu" => "forum",
            "data" => $data,
        ]);
    }
    function deleteComment(Request $req){
        FourmComment::where("id", $req->id)->delete();
        $webmsg = [
            "class" => "success",
            "message" => "user comment deleted successfully",
        ];
        return redirect()->back()->with($webmsg);
    }
}
