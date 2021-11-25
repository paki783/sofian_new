<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use App\Models\Fourm;
use App\Models\FourmComment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForumController extends Controller
{
    //
    function add(){
        return view('frontend.forum.add');
    }
    function all(){
        $data = Fourm::with([
            "getUser"
        ])->withCount('getComments')->paginate(10);

        //dd($data);
        return view('frontend.forum.all',[
            "data" => $data,
        ]);
    }
    function create(Request $req){
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'editordata' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        Fourm::create([
            "title" => $req->title,
            "description" => $req->editordata,
            "user_id" => Auth::user()->id,
        ]);

        return redirect('forum');
    }
    function details($id, $title){
        $data = Fourm::where("id", $id)->with([
            "getUser",
            "getComments" => function($q){
                $q->with([
                    "getUser",
                ]);
            },
        ])->first();
        return view('frontend.forum.detail',[
            "data" => $data,
        ]);
    }
    function addcomment(Request $req){
        $validator = Validator::make($req->all(), [
            'forum_id' => 'required',
            'comments' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        FourmComment::create([
            "forum_id" => $req->forum_id,
            "comment" => $req->comments,
            "user_id" => Auth::user()->id,
        ]);
        $getFourm = Fourm::where("id", $req->forum_id)->first();

        return redirect('/forum/'.$req->forum_id.'/'.$getFourm->title);
    }
}
