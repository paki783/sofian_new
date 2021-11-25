<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use App\Models\PurchaseHistory;

class DashboardController extends Controller
{
    //
    function index(){
        if(!Auth::check()){
            return redirect("/");
        }

        $data = PurchaseHistory::with([
            "getCourse" => function($q){
                $q->with([
                    "getPictures"
                ]);
            }
        ])
        ->whereHas("getCourse")
        ->where([
            "user_id" => Auth::user()->id
        ])->latest()->paginate(10);

        return view('frontend.dashboard.index', [
            "data" => $data,
            "active" => "courses",
        ]);
    }
    function purchase_history(Request $req){
        if(!Auth::check()){
            return redirect("/");
        }

        $data = PurchaseHistory::with([
            "getCourse"
        ])
        ->whereHas("getCourse")
        ->where([
            "user_id" => Auth::user()->id
        ])->latest()->paginate(10);

        return view('frontend.dashboard.purchase_history', [
            "data" => $data,
            "active" => "purchase_history",
        ]);
    }
}
