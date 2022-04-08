<?php

namespace App\Http\Controllers;
use App\Models\restro;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function loginpage()
    {
        return view("profile");
    }
    public function add(Request $req)
    {
        $restro=new restro;
        $restro->name=$req->name;
        $restro->email=$req->email;
        $restro->address=$req->address;
        $restro->save();
        return redirect("home");
    }
    public function login()
    {
        return view("login");
    }
    public function userlogin(Request $re)
    {
        $data=$re->input("name");
        $re->session()->put('name',$data);
        return redirect("profile");

    }
}
