<?php

namespace App;
use App\Traits\Friendable;
use App\Notifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
Use App\Role;
Use App\Comment;
use App\Friend;
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use Friendable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile', 'token', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];
//

    public function posts()
    {
        return $this->hasMany('App\Post');
    }   

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    
//
    public function setPasswordAttribute($password)
    {
        //$this->attributes['password'] = bcrypt($password);
        $this->attributes['password']=Hash::needsRehash($password) ? Hash::make($password) : $password;
    }
//
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
//


    /*public function me()
    {
        return $this->hasMany('App\Friend', 'user_id')->withTrashed();
    }

    public function friends()
    {
        return $this->hasMany('App\Friend', 'friend_id')->withTrashed();
    }*/
//

    public function user()
        {
        return $this->hasMany('App\Friend', 'user_id');
    }   
    public function friends()
    {
        return $this->hasMany('App\Friend', 'friend_id');
    }
   /**

    * @param string|array $roles

    */
/*
    public function authorizeRoles($roles) {

        if (is_array($roles)) {

            return $this->hasAnyRole($roles) || 
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) || 
        abort(401, 'This action is unauthorized.');
    }
*/
    /** 
    * Check multiple roles
    * @param array $roles
    */

   /* public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    /**
    * Check one role
    * @param string $role
    */
/*
    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }*/

    public function IsAdmin()
    {
        if($this->roles()->where('name', $role));
    }

   

   

    /*public function sendVerificationEmail()
    {
        $this->notify(new VerifyEmail($this));
    }
*/
    /*public function friends()
	{
		return $this->belongsToMany('App\User', 'friends_users', 'user_id', 'friend_id');
	}

	public function addFriend(User $user)
	{
		$this->friends()->attach($user->id);
	}

	public function removeFriend(User $user)
	{
		$this->friends()->detach($user->id);
	}*/
    
}
