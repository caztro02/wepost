@extends('layout.userpage')

@section('content')


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WePOST</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="/semantic/semantic/dist/semantic.min.css">  
    <link rel="stylesheet" href="<?php echo asset('css/admin.css')?>" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

</head>

<div class="ui form white">
        <div class="ui middle aligned center aligned grid">
            <div class="column">
              <h2 class="ui image header">
                <img src="/images/twitter1.png" class="ui circular image">
                <div class="content">
                    Edit User
                </div>
              </h2>

        <form method="post" action={{ route('users.update', $data->id) }} enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{csrf_field()}}
            <div class="ui segment white">
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
                  <button class="ui teal button" href ="{{ route('posts.index') }}"/>Cancel</button></a>
                </div>
        </form>

      </div>

      <form method="post" action={{ route('changeProfile', $data->id) }} enctype="multipart/form-data">
          {{ method_field('PUT') }}
          {{csrf_field()}}
          <div class="ui segment white">
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
    
@endsection