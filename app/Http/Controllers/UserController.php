<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    function registerUser(Request $req){
        $validator = Validator::make($req->all(), [
            'email' => 'required|email|unique:users,email',
            'pass' => 'required',
            'uname' => 'required',
            'passagain' => 'required|required_with:password|same:pass',
            "emailagain" => 'required|email|required_with:email|same:email',
        ],[
            "passagain.required" => "Password and confirm password is not same",
            "emailagain.required" => "Email and confirm email is not same",
            "passagain.same" => "Password and confirm password is not same",
            "emailagain.same" => "Email and confirm email is not same"
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        User::create([
            "name" => $req->uname,
            "password" => $req->pass,
            "email" => $req->email
        ]);

        $webmsg = [
            "class" => "success",
            "message" => "email registered successfully",
        ];
        return redirect()->back()->with($webmsg);
    }
    function loginAuth(Request $req){
        $validator = Validator::make($req->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        $check = User::where([
            "password" => $req->password,
            "email" => $req->email
        ])->first();
        if(empty($check)){
            $webmsg = [
                "class" => "danger",
                "message" => "email/password is incorrect",
            ];
            return redirect()->back()->with($webmsg);
        }
        Auth::login($check);
        return redirect('/');
    }
    function logout(Request $req){
        Auth::logout();
        return redirect('/');
    }
}
