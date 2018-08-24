<?php

namespace App\Http\Controllers\Auth;
use App\Notifications\VerifyEmail;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make(
            $data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}+$/|confirmed',
            
            ]
        );

        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * 
     */
    
    protected function create(array $data)
    {
        $user = new User;
        $fileNameToStore = "index.png";

        $user=User::create( 
            [
            'name' => ucwords($data['name']),
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'profile' => $fileNameToStore,
            'token' => str_random(25), 
            ]
        );
        //$user->User::find(1);
        $user_role=Role::where('name', 'user')->first();
        $user->roles()->attach($user_role);


        $user->sendVerificationEmail();
        //$user->notify(new VerifyEmail($user));

        return $user;
    }
}
