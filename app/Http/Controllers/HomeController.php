<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use url;

class HomeController extends Controller
{
    //
    function index(){
        $category = Category::where([
            "parent_cat" => 0,
            "type" => "schools"
        ])->latest()->get();
        $sub_cat = [];
        if(!empty($category[0])){
            $sub_cat = Category::where("parent_cat", $category[0]->id)->get();
        }
        return view('frontend.homepage',[
            "body_class" => "home de guest",
            "intro" => true,
            "category" => $category,
            "sub_cat" => $sub_cat,
        ]);
    }
    function leistungsuebersicht(){
        return view('frontend.leistungsuebersicht',[]);
    }
    function nachhilfe(){
        return view('frontend.nachhilfe', []);
    }
    function kontakt(){
        return view('frontend.kontakt', []);
    }
    function login(){
        return view('frontend.login', []);
    }
    function lost_account_details(){
        return view('frontend.lost-account-details', []);
    }
    function lost_username(){
        return view('frontend.lost_username', []);
    }
    function lost_password(){
        return view('frontend.lost_password', []);
    }
    function faq(){
        return view('frontend.faq', []);
    }
    function impressum(){
        return view('frontend.impressum', []);
    }
    function agb(){
        return view('frontend.agb', []);
    }
    function datenschutz(){
        return view('frontend.datenschutz', []);
    }
    function register(){
        return view('frontend.register', []);
    }
}

