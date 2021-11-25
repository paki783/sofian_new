<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchaseHistory;

class PurchaseController extends Controller
{
    //
    function all(Request $req){
        $data = PurchaseHistory::with([
            "getCourse" => function($q){
                $q->with([
                    "getCategory"
                ]);
            },
            "getUser",
        ])
        ->whereHas("getCourse")
        ->paginate(10);
        return view("backend.purchases.all",[
            "menu" => "purchases",
            "sub_menu" => "",
            "data" => $data,
        ]);
    }
}
