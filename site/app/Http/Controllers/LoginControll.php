<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class LoginControll extends Controller
{
    function LoginIndex(){
        return view('Login');
    }
    function Logout(Request $request){
        $request->session()->flush();
        return redirect('/Login');
    }
    function onLogin(Request $request){
        $name = $request->input('name');
        $password = $request->input('pass');
        $result = ContactModel::where('Username',$name)->where('Password',$password)->count();
        if($result==true){
            $request->session()->put('user',$name);
            return 1;
        }else{
            return 0;
        }
    }
}
