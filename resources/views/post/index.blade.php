
@extends('layouts.app')
<!--SCSS app.css-->




<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Style for Posts-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">

<link rel="stylesheet" href="{{mix('css/app.css')}}">

@section('content')


<div>
<!--
    <center><h1>Share Your Thoughts!</h1></center>
>>>>>>> development-->

    <center>
    <div class="post_form">
        
            
        @include('post.create') 
        
</div>
    </center>
                       
                          <!--  <a class="ui image label">
                               <img src="/images/back3.png"> 
                          </a>-->
       


        @foreach($data as $value)
<div style="height:200px; margin:0;" class="ui container">
        
            
            @if($value->user->trashed())
        <div style="float:left" class="post">
            <img style="width:50px;height:50px;" src="/storage/profile/index.png"/>
        </div>
        <div style="float:left;margin-left:50px;">
            <h3>{{ $value->user->name }}</h3>
        </div>

            @else
        <div style="float:left" class="post">
            <img style="width:50px;height:50px;" src="/storage/profile/{{ $value->user->profile }}"/>
        </div>
        <div style="float:left;margin-left:50px;">
            <h3><a href="{{ route('admin.show', $value->id) }}">{{ $value->user->name }}</a></h3>  
        </div>
            @endif
        
            
            
        <div style="float:right">
            @if(Auth::user()->id==$value->user_id)
            <a href ="{{ route('posts.edit', $value->id) }}"/><i class="ui edit icon"></i></a>&nbsp;
        </div>
        <div style="float:right">
            <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button type="submit"  class="ui icon button">
                        <i class="trash icon"></i>
                </button>
            </form>
        </div>   
            @endif
            <div class="ui message">      
                    <center><h3 style="color:black">{{ $value->content }}</h3></center> <!-- display the post content -->  
                    <p style="float:right; margin-top:50px; color:black">Date Created:{{ $value->created_at }} Date Editted:{{ $value->updated_at }}</p>
                    <!-- display the post creation date -->  
            </div> 

   
    </div>
        

       
       @endforeach
    
@endsection