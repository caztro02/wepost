<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;
use App\User;
use Auth;

use App\Traits\Friendable;
class FriendController extends Controller
{
    use Friendable;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auth::user()->friendList();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$friends = new Friend;
        
        $friends->user_id = Auth::user()->id;
        $friends->friend_id = $request->friend_id;
        
        $friends->save();
        return $friends;
        */
        //return Auth::user()->addFriend();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add($friend_id)
    {
        return Auth::user()->addFriend($friend_id);
    }

    public function acceptFriend($friend_id)
    {
        return Auth::user()->acceptFriend($friend_id);
        //return dd($friend_id);
    }

    public function friendList()
    {
        return Auth::user()->friendList();
    }
    public function friendRequest()
    {
        return Auth::user()->friendRequest();
    }

    
}   
