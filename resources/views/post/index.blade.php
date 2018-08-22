@extends('layout.post')
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

    <center>
    <div class="post_form">
        
            
        @include('post.create') 
        
</div>
    </center>
    
    @foreach($data as $value)
    <hr>
    
<div style="height:200px; margin:0;" class="ui container">

        <div style="float:left">
             <i class="black large user icon">Stevie</i>
             </div>
        <div style="float:left;margin-left:50px;">
            <a href=""><h4>{{ $value->email }}</h4></a> <!-- display the name who post -->
             </div>
                         
                          <!--  <a class="ui image label">
                               <img src="/images/back3.png"> 
                          </a>-->
        <div style="float:right">
            <a href ="{{ route('posts.edit', $value->id) }}"><i class="ui edit icon"></i></a>
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
    
        <div class="ui message">      
                <center><h3 style="color:black">{{ $value->content }}</h3></center> <!-- display the post content -->  
                    <p style="float:right; margin-top:50px; color:black">{{ $value->created_at }}</p> <!-- display the post creation date -->  
            </div> 
    </div>
        

       
       @endforeach
    
@endsection