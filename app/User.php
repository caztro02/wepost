<?php

namespace App;
use App\Notifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
Use App\Role;
Use App\Comment;
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

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
    
}
