<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Post;
use App\Comment;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $post = Post::all();

        $post = new Post;

        $data['data'] = $post->orderBy('created_at', 'DESC')->get();

        if (count('data[0]') >0 ) {
            return view('post.index', $data);
        } else {
            //return view('post.index');
            return "wala";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        //$content = $request ->input('content');
        //$email = $request ->input('email');         
        //$data = array('content'=>$content, 'email'=>$email);
        //return view('admin.index');

        $post-> content = $request-> content;
        $post-> user_id = $request-> id;

        $post->save();
        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = new Post;

        $data['data'] = $post->where(['id'=>$id])->first();
        if (count('data[0]') >0 ) {
        
            return view('post.edit', $data);

        } else {

            return view('post.index');

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
        $post = new Post;
        
        $content = $request -> input('content');
        $data = array(
            'content' =>$content
        );
        $post->where(['id'=>$id])->update($data);
        
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = new Post;

        $post ->where(['id'=>$id])->delete();
        return redirect()->route('posts.index');
    }
}
