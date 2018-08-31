@extends('layout.userpage')

@section('content')

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Laravel</title>
    
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
        <link rel="stylesheet" href="<?php echo asset('css/admin.css')?>" type="text/css">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    
    </head>

<center>
    <form method="post" action={{ route('users.store') }} enctype="multipart/form-data">
      {{csrf_field()}}
        <div class="ui form black">
          <div class="ui middle aligned center aligned grid">
                        <div class="column">
                          <h5 class="ui grey icon header">
                              <i class="ui user icon"></i>
                            <div class="content">
                              <h5 style="color:teal"><b>Add Users</b></h5>
                            </div>
                          </h2>
                         
                            <div class="ui stacked segment white">
                              <div class="field white">
                                <div class="ui massive left icon input">
                                  <i class=" user icon"></i>
                                  <input type="text" name="name" placeholder="Name">
                                </div>
                              </div>
                              <div class="field white">
                                <div class="ui massive left icon input">
                                  <i class="envelope outline icon"></i>
                                  <input type="email" name="email" placeholder="Email">
                                </div>
                              </div>
                                <div class="field white">
                                    <div class="ui massive left icon input">
                                      <i class="lock icon"></i>
                                      <input type="password" name="password" placeholder="Password">
                                    </div>
                                  </div>
                                  
                                  <input class="field white" type="file" name="profile" id="file">
                              
                                 <div class="ui huge fluid buttons">
                                    <button class="ui linkedin button" type="submit" name="edit">Add</button>
                                    <button class="ui teal button" href ="{{ route('users.index') }}"/>Cancel</button></a>
                                  </div>
                      
                          </form>
                </div>     
   
  
   
   
 <!-- 
<form method="post" action={{ route('users.store') }} enctype="multipart/form-data">
    {{csrf_field()}}
    
development


<a href ="{{ route('users.index') }}"><button>Cancel</button></a>
</center>
development-->
@endsection