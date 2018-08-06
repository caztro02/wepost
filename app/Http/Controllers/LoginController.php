<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
Use DB;
use App\User;

class LoginController extends Controller
{
    function login( )
    {
        return view('pages.login');
    }
}