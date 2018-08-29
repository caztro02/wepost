<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Auth;
class VerifyController extends Controller
{
    public function verify($token) 
    {
    $user = User::where('token', $token)->firstOrFail();
        if (isset($user)) {
            if (!$user->verified) {
                $data = array(
                    'verified'=> 1,
                    'token'=> null,
                );
                $user->update($data);
                
                //Auth::loginUsingId($user->id);

               
                $status = "Your e-mail is verified. You can now login.";
                
                //return dd($user);
            } else {
                $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
        return redirect('/login')->with('status', $status);
        
    }

    public function verifyEmail()
    {
        return view('email.verifyEmail');
    }
}
