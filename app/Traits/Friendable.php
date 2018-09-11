<?php

namespace App\Traits;

use App\Friend;
use App\User;
use Auth;
trait Friendable
{
    public function addfriend($friend_id)
    {
        $me = Auth::user()->id;
        $friendship = Friend::create(
            [
                'friend_id' => $friend_id,
                'user_id' => $me,
            ]
        );
    }

    public function acceptFriend($friend_id)
    {
        //return dd($friend_id);
        //$friendship = Friend::where('friend_id', $friend_id)
                            //->where('user_id', Auth::user()->id)
                            //->first();
        $me = Auth::user()->id;
        //return $me." ".$friend_id;
        $friendship = new Friend;
       //return $friend_id." ".$me;
        $data = $friendship->where('friend_id', $me)
                    ->where('user_id', $friend_id)
                    //->get();
        
                    ->update(['status'=>1]);
        foreach($data as $a){
            return $a;
        }
        /*if ($friendship) {
            $friendship->update(
                [
                    'status' => 1
                ]
            );
            
            return dd($friendship->status);
        }*/
        //return dd($friend_id);

    }

    public function friendList()
    {
        $me = Auth::user()->id;
        $friends = array();

        $f1 = Friend::where('status', 1)
                    ->where('user_id', $me)
                    ->get();

        foreach ($f1 as $friendship) { 
            array_push($friends, \App\User::find($friendship->friend_id));
        }

        $friends2 = array();

        $f2 = Friend::where('status', 1)
                    ->where('friend_id', $me)
                    ->get();

        foreach ($f2 as $friendship) { 
            array_push($friends2, \App\User::find($friendship->user_id));
        }

        $data['data'] =  array_merge($friends, $friends2);

        return view('friend.friends', $data);
    }

    public function friendRequest()
    {
        $me = Auth::user()->id;
        $requests = array();

        $f1 = Friend::where('status', 0)
                    ->where('friend_id', $me)
                    ->get();

        foreach ($f1 as $friendship) { 
            array_push($requests, \App\User::find($friendship->user_id));
        }

        $data['data'] = $requests;
        //return $requests;
        return view('friend.friendRequest', $data);
    }
}