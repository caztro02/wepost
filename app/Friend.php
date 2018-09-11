<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public $table = "friends";
    protected $fillable = [
        'user_id', 'friend_id', 'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User')->withTrashed();
    }

    /*public function friends()
    {
        return $this->belongsTo('App\User', 'friend_id')->withTrashed();
    }*/

    /*public function me()
    {
        return $this->belongsToMany('App\User', 'user_id');
           
        
        
    }*/

    //invitor
   /* public function Myfriends()
    {
        return $this->belongsToMany('App\User', 'friends', 'user_id', 'friend_id');
              
    } 
//invited friends
    public function friendsOf()
    {
        return $this->belongsToMany('App\User', 'friends', 'friend_id', 'user_id');
    }*/

//

// Merge
  

    
}


