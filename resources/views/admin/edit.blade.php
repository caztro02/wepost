@extends('layouts.app')

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
<!--
<center>
<h2>Edit User</h2>
<div style="width:200px;height:200px;">
<img style="width:200px;height:200px;" src="/storage/profile/{{ $data->profile }}"/>
</div>
 development-->

<!--<<<<<<< HEAD
<form method="post" action={{ route('changeProfile', $data->id) }} enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{csrf_field()}}
        <label for="profile" >Change Profile Picture</label><br>
        <input type="file" name="profile" id="file">
        <button type="submit" name="edit">Upload</button>
    </form>
    <form method="post" action={{ route('users.update', $data->id) }} enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{csrf_field()}}
        
        <label for="name" >Name</label><br>
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" /><br>
        <label for="email" >Email</label><br>
        <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} /><br>
        
        <button type="submit" name="edit">Update</button>
        
    </form>

<a href ="{{ route('users.index') }}"/><button>Cancel</button></a>
</center>
=======-->



<div class="ui form white">
<div class="ui middle aligned center aligned grid">
      <div class="column">
        <h2 class="ui teal image header">
            <img class="ui circular image" src="/images/twitter1.png">
          <div class="content">
            <h1 class="ui black header">Edit User</h3>
          </div>
        </h2>
        <form method="post" action={{ route('changeProfile', $data->id) }} enctype="multipart/form-data">
          {{ method_field('PUT') }}
          {{csrf_field()}}
          <div class="ui stacked segment white">
            <div class="field white">
              <div class="ui massive left icon input">
                <i class=" image icon"></i>
                <input type="file" name="profile" id="file">
              </div>
            </div>  
               <div class="ui huge fluid buttons">
                  <button class="ui linkedin button" type="submit" name="edit">Upload</button>

                </div>
    
        </form>
<p>----------------------------------------</p>
<form method="post" action={{ route('users.update', $data->id) }} enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{csrf_field()}}
         
            <div class="ui stacked segment white">
              <div class="field white">
                <div class="ui massive left icon input">
                  <i class=" user icon"></i>
                  <input type="text" name="name" placeholder="Name" value="{{ $data->name }}"/>
                </div>
              </div>
              <div class="field white">
                <div class="ui massive left icon input">
                  <i class="envelope outline icon"></i>
                  <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} />
                </div>
              </div>   
                 <div class="ui huge fluid buttons">
                    <button class="ui linkedin button" type="submit" name="edit">Save</button>
                    <button class="ui teal button" href ="{{ route('admin.index') }}"/>Cancel</button></a>
                  </div>
      
          </form>
</div>     


@endsection