<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function addUserPgae()
    {
        return view('add_user');
    }

    public function login(Request $request)
    {
        $user = User::where(['email'=>$request->email])->first();
        if(!$user || !($request->password == $user->password))
            return "erorr";
        else
        {
            $request->session()->put('user',$user);
            return  redirect('/');
        }
    }
}
