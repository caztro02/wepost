@extends('layouts.app')

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Style for Login-->
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}"> 

@section('content')

<body>  
        <div class="ui menu">
                <a class="navbar-brand" href="{{ url('/') }}">
                    WePOST
                </a>
               
                <div class="right menu">
                    <a class="navbar-brand" href="{{ route('register') }}">Register</a>
                </div>
            </div>

<div class="ui form">
<h1 class="ui center aligned header">Login</h5>
<div class="ui segment container width">
   
   
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
        @endif
            <form class="ui form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="inline field">
                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label style="color:teal" for="email">E-Mail Address</label>
                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="@example.com">
                 
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
            

                <div class="inline field">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label style="color:teal" for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
            
                            <div class="checkbox">
                                <label style="color:teal">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        
        
                 <button class="fluid ui teal button" type="submit">Login</button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>      

            </form>
        </div>
    </div>
</div>
</body>     
@endsection