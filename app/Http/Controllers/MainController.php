<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index( )
    {
        return view('pages.login');
    }

    function checklogin(Request $request)
    {
        $this->validate(
            $request, [
                'email' => 'required|email',
                'password' => 'required'
            ] 
        );

        $user_data = array(
            'email' =>  $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('/success');
        } else {
            return redirect('/failed');
        }
    }

    function success()
    {
        return view('pages.success');
    }

    function failed()
    {
        return view('pages.failed');
        //return back()->with('error', 'Wrong Login Details');
    }
}
