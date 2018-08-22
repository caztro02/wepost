<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Auth;
Use DB;
use App\User;

class UserController extends Controller
{

    public function profile()
    {
            return view('user.profile');
    }

    public function login(Request $request)
    {
        $users = new User;
        $email = $request->input('email');
        $password = $request->input('password');

        //echo $email."-----".$password;

        $checklogin = $users->where(['email'=>$email,'password'=>$password])->get();
        
        if (count($checklogin) > 0 ) {
            //return redirect('profile')->with('email', $email);
            //return view('user.profile')->with('email', $email);
            return redirect('/log')->with('email', $email);
        } else {
            echo "Login Failed";
        }
    }

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
    } 

    public function updateUser(Request $request) 
    {
        $users = new User;
        
        $name = $request -> input('name');
        $email = $request -> input('email');
        $password = $request -> input('password');
        

        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password);

        $users->insert($data); //if storing array
        
    }

    /*  public function getData(Request, $request)
    {
        $users = new User;

        $data['data'] = $users -> where(['email'=>$email])-> get();

        if (count('data[0]') >0 ) {
            return view('user.profile', $data);
        } else {
            return view('user.profile');
        }
    }   */
}
