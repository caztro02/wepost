<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
Use DB;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $users = new User;
        $email = $request->input('email');
        $password = $request->input('password');

        //echo $email."-----".$password;

        $checklogin = $users->where(['email'=>$email,'password'=>$password])->get();
        
        if (count($checklogin) > 0 ) {
             echo "Login Successful";  
        } else {
            echo "Login Failed";
        }
    }
}