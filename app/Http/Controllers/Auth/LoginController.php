<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/chroma';
    protected function authenticated(Request $request, $user)
    {
        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }
        //return redirect()->intended($this->redirectPath());
        
        if (Auth::user()->roles()->first()->id == '1') {
                return redirect()->route('posts.index');   
        } else if(Auth::user()->roles()->first()->id == '2')
                return redirect()->route('admin.index');   
        
        /*if ($user->hasRole('admin')) {
            return redirect()->route('admin.index');
        } else if ($user->hasRole('user')) {
            return redirect()->route('posts.index');
        } else {
            return redirect('/');
        }*/
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
