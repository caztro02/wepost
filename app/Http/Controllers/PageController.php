<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index( )
    {
        return view('pages.login');
    }

    public function signup( )
    {
            return view('pages.signup');
    }
}
