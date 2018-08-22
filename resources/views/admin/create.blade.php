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

   <form method="post" action={{ route('admin.store') }}>
        {{csrf_field()}}
        <div class="ui form black">
                <div class="ui middle aligned center aligned grid">
                        <div class="column">
                          <h2 class="ui teal image header">
                              <img class="ui circular image" src="/images/user.png">
                            <div class="content">
                              <h3 style="color:black"><b>Add Users</b></h3>
                            </div>
                          </h2>
                         
                            <div class="ui stacked segment">
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
                                 <div class="ui huge fluid buttons">
                                    <button class="ui linkedin button" type="submit" name="edit">Add</button>
                                    <button class="ui teal button" href ="{{ route('admin.index') }}"/>Cancel</button></a>
                                  </div>
                      
                          </form>
                </div>     
   
   
   
   
   
    <!-- <div class="container white">
        <h2>Add Users</h2>
            <form method="post" action={{ route('admin.store') }}>
            {{csrf_field()}}

    <input type="text" name="name" placeholder="Name" /><br>
    <input type="email" name="email" placeholder="Email" /><br>
    <input type="password" name="password" placeholder="Password" /><br>
   
    <button type="submit" name="add">Add</button>
    
</form>

<a href ="{{ route('admin.index') }}"/><button>Cancel</button></a>
</div>
</center>-->

@endsection