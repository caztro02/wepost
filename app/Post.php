<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User')->withTrashed();
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
