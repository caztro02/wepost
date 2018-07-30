<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
Use DB;
use App\User;

class SignupController extends Controller
{
    public function signup(Request $request) 
    {
        $users = new User;
        
        $name = $request -> input('name');
        $email = $request -> input('email');
        $password = $request -> input('password');
        

        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password);

        $users->insert($data); //if storing array
        //$users->save(); --if not array
        
        //DB::table('users')->insert($data);

        echo "Saved";
    }
}
