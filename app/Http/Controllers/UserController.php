<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Auth;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $users = new User;

        $data['data'] = $users->orderBy('name', 'ASC')->get();

        if (count('data[0]') >0 ) {
            return view('admin.index', $data);
        } else {
            return view('admin.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
     
    public function store(Request $request)
    {
        if ($request->hasFile('profile')) {
            //get file name with the extension
            $fileNameWithExt = $request->file('profile')->getClientOriginalName();
            //get file name only
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get ext only
            $extension = $request->file('profile')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename."_".time().".".$extension;
            //upload
            $path = $request->file('profile')->storeAs('public/profile', $fileNameToStore);
        } else {
            $fileNameToStore = 'index.png';
        }

        $users = new User;
        
        $users->email = $request-> email;
        $users->name = $request-> name;
        $users->password = $request-> password;
        $users->profile = $fileNameToStore; 
        
        $users->save();
        $user_role=Role::where('name', 'user')->first();
        $users->roles()->attach($user_role);
        return redirect()->route('users.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = new User;

        $data['data'] = $users->where(['id'=>$id])->first();
        if (Auth::user()->roles()->first()->id == '1') {
            return view('user.user_profile', $data);   
        } else if (Auth::user()->roles()->first()->id == '2') {
            return view('admin.user_profile', $data);  
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = new User;

        $data['data'] = $users->where(['id'=>$id])->first();
        if (Auth::user()->roles()->first()->name == 'user') {
            return view('user.edit', $data);   
        } else if (Auth::user()->roles()->first()->name == 'admin') {
            return view('admin.edit', $data);  
        }
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
        $user = new User;
        
        $name = $request -> input('name');
        $emails = $request -> input('email');
        
            $data = array(
                'name' =>$name, 
                'email' =>$emails, 

            );

        $user->where(['id'=>$id])->update($data);
        //dd($data);
        if (Auth::user()->roles()->first()->name == 'user') {
            return redirect()->route('users.show', $id);   
        } else if (Auth::user()->roles()->first()->name == 'admin') {
            return redirect()->route('users.index', $id);  
        }
        //return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = new User;

        $user ->where(['id'=>$id])->delete();

        
        return redirect()->route('users.index');
    }

    public function passwordSettings($id)
    {
        $users = new User;

        $data['data'] = $users->where(['id'=>$id])->first();
        if (Auth::user()->roles()->first()->name == 'user') {
            return view('user.password_settings', $data);   
        } else if (Auth::user()->roles()->first()->name == 'admin') {
            return view('admin.password_settings', $data);  
        }
    }

    public function changePassword(Request $request) 
    {
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }
 
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate(
            [
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{6,}+$/',
            ]
        );
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success", "Password changed successfully !");
 
    }

    public function changeProfile(Request $request, $id) 
    {
        $user = new User;

        if ($request->hasFile('profile')) {
            //get file name with the extension
            $fileNameWithExt = $request->file('profile')->getClientOriginalName();
            //get file name only
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get ext only
            $extension = $request->file('profile')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename."_".time().".".$extension;
            //upload
            $path = $request->file('profile')->storeAs('public/profile', $fileNameToStore);
        } else {
            $fileNameToStore = 'index.png';
        }
            $profile = $fileNameToStore;
            $data = array( 
                'profile' =>$profile
            );

        $user->where(['id'=>$id])->update($data);
        //dd($data);
        if (Auth::user()->roles()->first()->name == 'user') {
            return redirect()->route('users.show', $id);   
        } else if (Auth::user()->roles()->first()->name == 'admin') {
            return redirect()->route('users.edit', $id);  
        }
    }

    public function __construct()
    {
        $this->middleware('admin', ['except' => ['edit', 'show', 'update', 'passwordSettings','changePassword', 'changeProfile']]);
        // Alternativly
        $this->middleware('admin', ['only' => ['create', 'store', 'index', 'delete']]);
    }
}
