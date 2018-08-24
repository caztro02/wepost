<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Role;
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

        $data['data'] = $users -> orderBy('name', 'ASC')->get();

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
        
        //$name = $request -> input('name');
        //$email = $request -> input('email');    
        //$password = $request -> input('password');
        //$data = array('name'=>$name, 'email'=>$email, 'password'=>$password);
        //$users->insert($data);
        //return view('admin.index');
        //dd($request);

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
        return view('admin.user_profile', $data);
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

        if (count('data[0]') >0 ) {

            return view('admin.edit', $data);
            
        } else {

            return view('admin.index');
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
        }

        $user = new User;
        
        $name = $request -> input('name');
        $password = $request -> input('password');
        $emails = $request -> input('email');
        if ($request->hasFile('profile')) {
            $profile = $fileNameToStore;
        }
        if ($request->hasFile('profile')) {
            $data = array(
                'name' =>$name, 
                'email' =>$emails, 
                'password' =>$password,
                'profile' =>$profile
            );
        } else {
            $data = array(
                'name' =>$name, 
                'email' =>$emails, 
                'password' =>$password,
            );
        }
        

        $user->where(['id'=>$id])->update($data);
        //dd($data);  
        return redirect()->route('users.index');
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
}
