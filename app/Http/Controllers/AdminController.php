<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('admin.index', compact('admin'));

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
        $users = new User;
        
        //$name = $request -> input('name');
        //$email = $request -> input('email');    
        //$password = $request -> input('password');
        //$data = array('name'=>$name, 'email'=>$email, 'password'=>$password);
        //$users->insert($data);
        //return view('admin.index');
        //dd($request);

        $users-> email = $request-> email;
        $users-> name = $request-> name;
        $users-> password = $request-> password;

        $users->save();
        return redirect()->route('admin.index');
       
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
        //dd("yow");
        //$users= User::all();
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
        $user = new User;
        
        $name = $request -> input('name');
        $password = $request -> input('password');
        $emails = $request -> input('email');
        $data = array(
            'name' =>$name, 
            'email' =>$emails, 
            'password' =>$password
        );
        $user->where(['id'=>$id])->update($data);
        
        return redirect()->route('admin.index');
        
   
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

        
        return redirect()->route('admin.index');
    }
}
