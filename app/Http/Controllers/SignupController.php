<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
Use DB;
use App\User;

class SignupController extends Controller
{
    public function signup( )
    {
            return view('pages.signup');
    }
}
