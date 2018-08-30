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
        <div class="ui secondary menu">
                <div class="left item">
                        <a href="{{ url('/') }}" class="navbar-brand">WePOST</a>
                    </div>
                
                    <div class="right menu">
                        <div class="right item">
                            <a href="{{ route('register') }}" class="navbar-brand" >Register</a>
                        </div>
                    </div>
            </div> 

<i><h3 class="ui center aligned header">WePOST</h3></i>

<div class="ui container width">
     <center><h3>Login</h3></center>
                    <form class="ui massive form" method="POST" action="{{ route('login') }}">
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
                        
        
                 <button class="fluid massive ui teal button" type="submit">Login</button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>      

            </form>
        </div>
  
</body>     
            @endsection
      

                       <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label style="color:black"for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label style="color:black" for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label style="color:black">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>-->