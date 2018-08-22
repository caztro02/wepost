<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*
        if ($request->user()->authorizeRoles(['user'])) {
            return redirect()->route('posts.index');
        } else if ($request->user()->authorizeRoles(['admin'])) {
            return redirect()->route('admin.index');
        }
        */
        return redirect()->route('posts.index');
    }
}
