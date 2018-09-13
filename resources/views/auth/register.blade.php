@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Style for Login-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
    <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}"> 
</head>

    @section('content')
<body>
    <div class="ui menu">
        <a class="navbar-brand" href="{{ url('/') }}">
            WePOST
        </a>
        <div class="right menu">
            <a class="navbar-brand" href="{{ route('login') }}" class="navbar-brand">Login</a>
        </div>
    </div>
<div class="ui form">
    <h1 class="ui center aligned header">Register</h5>
    <div class="ui segment container width">
        
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="inline field">
                <div {{ $errors->has('name') ? ' has-error' : '' }}>
                    <label style="color:teal" for="name">Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Name">
                
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        
            <div class="inline field">
                <div {{ $errors->has('email') ? ' has-error' : '' }}>
                    <label style="color:teal" for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail">
                
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="inline field">
                <div {{ $errors->has('password') ? ' has-error' : '' }}>
                    <label style="color:teal" for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                    <p style="color:black; font-size:0.75em" id="passwordHelpBlock" class="help-block">
                    Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
                    </p>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="inline field">
                <label style="color:teal" for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password"  name="password_confirmation" required placeholder="Confirm Password">
            </div>
                 <button class="ui fluid teal button" type="submit">Register</button> 
                            
        </form>
    </div>
</div>
</div>


<!--<div style="position:fixed; bottom:0;width: 100%; color:black " class="ui centered footer">
        <center><p>Created  By: Isla and Gaowther</p></center>-->
      
</div>
</body>

@endsection