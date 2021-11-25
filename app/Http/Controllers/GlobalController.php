<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attachment;

class GlobalController extends Controller
{
    //
    function deleteFile(Request $req){
        $id = $req->id;
        Attachment::where('id', $id)->delete();
        $webmsg = [
            "class" => "success",
            "message" => "file deleted successfully",
        ];
        return redirect()->back()->with($webmsg);
    }
}
