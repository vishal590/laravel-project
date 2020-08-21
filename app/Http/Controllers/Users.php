<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Users extends Controller
{
    public function list()
    {
        $user=User::all();
        return view('userlist',['user'=>$user]);

    }

    public function create()
    {
        return view('create');
    }

    public function loginsub(Request $req)
    {
         User::select('name')->where(
             [['email','=',$req->email],
             ['password','=',$req->password]]
         )->get();
        // print_r($req->input());
            $req->session()->put('logData',[$req->input()]);
            return redirect('/list');

    }

    public function createsub(Request $req)
    {
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $result=$user->save();
        if($result)
        {
            return redirect('/list');
        }
    }
}
