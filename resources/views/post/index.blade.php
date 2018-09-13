
@extends('layout.post')
<!--SCSS app.css-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Style for Posts-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">
<link rel="stylesheet" href="{{mix('css/app.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>


@section('content')
    <!--<center>
        <div class="post_form">
           
        </div>
    </center>-->

@include('post.create')
    @foreach($data as $value)
        <div class="ui blue segment container">
            <div class="ui left corner label">
                <i class=" blue heart icon"></i>
            </div>
            <div class="ui form">
                @if($value->user->trashed())    
                    <div style="float:left">
                        <img class="ui avatar image" src="/storage/profile/square-image.png"><span>{{ $value->user->name }}</span>
                    </div>
                @else
                <div style="margin-left:10px" class="ui left floated image">
                    <h2 class="ui header">
                        <img class="ui avatar image" style="width:50px; height:50px" src="/storage/profile/{{ $value->user->profile }}"/>
                        <a href="{{ route('users.show', $value->user->id) }}">{{ $value->user->name }}</a>
                    </h2>
                </div>
            </div>
            @endif   
              
            @if(Auth::user()->id==$value->user_id)
            <h4 class="ui right floated header">
            <i class="edit outline icon" id="EditBtn"></i>
            <i class="trash icon" id="DelBtn"></i>
        </h4>
                <!--<div style="float:right">
                    <a href ="{{ route('posts.edit', $value->id) }}"/><i class="ui large grey edit icon" id="EditBtn"></i></a>&nbsp;
                </div>
                <div style="float:right">
                    <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                        <i class="ui large trash icon" id="DelBtn" type="submit"></i>
                            {{ method_field('DELETE') }}
                            {{csrf_field()}}
                    </form>-->
                   
            @endif 
                
            <div class="ui clearing divider"></div>
            
            <div class="ui message"> <!-- display the post content -->
                <h4 style="float:left; color:black; font-size:1.40em">{{ $value->content }} </h4> <!-- display the post creation date--> 
                    <div class="metadata">
                        <div style="font-size:1em" class="dateline">Date Created:{{ $value->created_at->diffForHumans() }} Date Editted:{{ $value->updated_at->diffForHumans() }}</div>
                    </div>
            </div>
                
            <div class="ui clearing divider"></div>
                
            <div class="item">
                <i class="heart large red icon"></i>
                <i class="thumbs up outline large blue icon"></i>
                <i class="frown outline yellow large icon"></i>
                <i class="smile outline yellow large icon"></i>
                <i class="comment alternate icon" id="click">comment</i>
                    <div id="simpleModal" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="ui left aligned header">Commnent Here!
                                    <i class="close icon" id="closeBtn"></i>
                                </h3>
                            </div>
                            <div class="modal-body">
                                
                                            <div class="ui comments">
                                                    <div class="comment">
                                                        <div style="margin-left:2em" class="ui left floated image">
                                                            <h2 class="ui header">
                                                                <a class="avatar">
                                                                    <img class="ui avatar image" style="width:40px; height:40px" src="/storage/profile/{{ $value->user->profile }}"/>
                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div class="content">
                                                            <a class="author"><span>{{ $value->user->name }}</span></a>
                                                            <div class="metadata">
                                                              <div style="font-size:1em"class="date">1 day ago</div>
                                                            </div>
                                                            <div class="text">
                                                                <p>Kamusta </p>
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                              </div>
                                              </div>
                                            
                                    
                                          
                                                 
                     
                    </div>
                </div>
            </div>
            
                
                <div class="ui clearing divider"></div>
<div>
    @include('post.comment')
</div>
    
    </div> 

      
    <script src="{{ asset('js/modal.js') }}"></script>            
               
@endforeach
    
@endsection 
                