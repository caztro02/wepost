<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;
use App\Posts;
class Comment extends Model
{

    use Notifiable;

    protected $fillable = [
        'content', 'user_id', 'posts_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
