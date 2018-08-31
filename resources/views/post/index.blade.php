
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
    <div class="ui clearing divider"></div>

      <div class="ui blue segment container">
            <div class="ui left corner label">
                    <i class=" red heart icon"></i>
                  </div>
          <div class="ui form">
             
        @if($value->user->trashed())
            <div style="float:left">
                <img class="ui avatar image" src="/storage/profile/square-image.png"><span>{{ $value->user->name }}</span>
            </div>
    
        @else
            <div style="margin-left:2em;" class="ui left floated image">
                <h2 class="ui header">
                    <div class="col-md--6 col-md-offset-3">
                        <div id="cropbox">
                            <img class="ui avatar image" src="/storage/profile/{{ $value->user->profile }}"/>
                         </div>
                    <a href="{{ route('admin.show', $value->id) }}">{{ $value->user->name }}</a>
                </h2>
            </div>
        </div>
        

        @endif   
              
        @if(Auth::user()->id==$value->user_id)
        
            <div style="float:right">
                <a href ="{{ route('posts.edit', $value->id) }}"/><i class="ui large grey edit icon"></i></a>&nbsp;
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
           <div class="ui clearing divider"></div>
            
                <div class="ui message">
                    <h4 style="float:left; color:black;">{{ $value->content }} </h4>
                          <p style="margin-top:20%; float:right">Date Created:{{ $value->created_at }} Date Editted:{{ $value->updated_at }}</p>   
            
                             
                    
                <!-- display the post content -->
                        
                            </div>
                </div>    

 <!-- display the post creation date--> 

    </div>       
     
   
    </div>
        @endforeach
    
        @endsection          
     
          

          