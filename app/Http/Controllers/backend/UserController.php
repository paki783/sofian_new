<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    function login(Request $req){
        return view("backend.login");
    }
    function Auth(Request $req){
        $validator = Validator::make($req->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $credentials = $req->only('email', 'password');

        $check = User::role('admin')->where([
            "email" => $req->email,
            "password" => $req->password
        ])->first();
        if(empty($check)){
            $webmsg = [
                "class" => "danger",
                "message" => "wrong email/password",
            ];
            return redirect()->back()->with($webmsg);
        }

        $value = session('userdata', $check);

        return redirect()->intended("admin/dashboard");
    }
    public function createUser(){
        $user = User::create([
            "name" => "admin",
            "email" => "admin@admin.com",
            "password" => "admin123",
        ]);

        //$user = User::where("id", 3)->first();
        $user->assignRole('admin');
    }
    public function all(){
        $data = User::paginate(10);
        return view('backend.user.all', [
            "menu" => "user",
            "data" => $data,
        ]);
    }
}
