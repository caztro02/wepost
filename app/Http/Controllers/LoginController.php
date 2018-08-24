<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
Use DB;
use App\User;

class LoginController extends Controller
{
    function index( )
    {
        return view('pages.login');
        
    }

    function login(Request $request) 
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        

        // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), $rules);
     
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput($request->except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {


            $email = $request->input('email');
            $password = $request->input('password');

            $userdata = array(
                'email' => $email,
                'password' => $password
            );

            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                echo 'SUCCESS!';
        
            } else {        
        
                // validation not successful, send back to form 
                //return redirect('/login');
                //echo 'Failed';
                dd($userdata);
            }
            //dd($email, $password);
        }
        
    }
}