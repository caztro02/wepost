
@extends('layout.post')
<!--SCSS app.css-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Style for Posts-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">
<link rel="stylesheet" href="{{mix('css/app.css')}}">
<style>
.btndelete {
    background:transparent;
    border:none;
}

</style>
@section('content')


    <center>
<div class="post_form">
             
    @include('post.create') 
</div>
    </center>

    <!-- display the post content -->
@if(count($data) > 0)
    @foreach($data as $value)
<!--<div class="ui clearing divider"></div>divider for each post-->
    <div class="ui blue segment container">
        <div class="ui left corner label">
            <i class=" red heart icon"></i>
        </div>
    <div class="ui form">
<!--if user data is deleted-->     
        @if($value->user->trashed())
            <div style="float:left">
                <img class="ui avatar image" style="width:50px; height:50px;" src="/storage/profile/square-image.png"><span>{{ $value->user->name }}</span>
            </div>
<!--if user data is present-->  
        @else
            <div style="margin-left:2em;" class="ui left floated image">
                <h2 class="ui header">
                    <img class="ui avatar image" style="width:50px; height:50px;" src="/storage/profile/{{ $value->user->profile }}"/>
                    <a href="{{ route('users.show', $value->user->id) }}">{{ $value->user->name }}</a>
                </h2>
            </div>
        @endif   
<!--if user post is posted by current user-->           
        @if(Auth::user()->id==$value->user_id)
        
            <div style="float:right">
                <a href ="{{ route('posts.edit', $value->id) }}"><i class="ui large grey edit icon"></i></a>&nbsp;
            </div>
            
            <div style="float:right">
                <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{csrf_field()}}
                    <button type="submit"  class="btndelete">
                        <i class="large trash icon"></i>
                    </button>
                </form>
            </div> 
            @endif 
<!--no edit or delete if not posted by current user-->  
           <div class="ui clearing divider"></div><!--divider line-->
                <div class="ui message">
                    <h4 style="float:left; color:black;">{{ $value->content }} </h4>
                    <p style="margin-top:20%; float:right">Date Created:{{ $value->created_at->diffForHumans() }} Date Editted:{{ $value->updated_at->diffForHumans() }}</p>   
                </div>
                
    </div>   
    <div class="ui blue segment container">
        </div> 
    </div>       
</div>

    @endforeach

        {{$data->links()}}
@else
<center><h1>No Post Available</h1></center>
@endif
        @endsection          
     
          

          