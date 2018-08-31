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
        <div class="ui secondary menu">
           
                        <a href="{{ url('/') }}" class="navbar-brand">WePOST</a>
                   
                
            </div> 


<h2 class="ui center aligned header">WePOST</h2>
<div class="ui container width">
    <center>
        <h3><b>Register</b></h3>
    </center>
    
    <form class="ui large form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

    <div class="inline field">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Name">
                
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                 @endif
            </div>
        </div>
        
        <div class="inline field">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="E-Mail">
                
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
 
                </div>
        </div>

        <div class="inline field">
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label  for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                <p style="color:black" id="passwordHelpBlock" class="help-block">
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
            <label for="password-confirm">Confirm Password</label>
                 <input id="password-confirm" type="password"  name="password_confirmation" required placeholder="Confirm Password">
                </div>
                 <button class="ui fluid large teal button" type="submit">Register</button> 
                            
    </form>
</div>


<div style="position:fixed; bottom:0;width: 100%; color:black " class="ui centered footer">
        <center><p>Created  By: Isla and Gaowther</p></center>
      
</div>
</body>
@endsection
        
         <!--  <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">-->
        <!--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <p id="passwordHelpBlock" class="help-block">
                                    Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase and 1 Numeric.
                                </p>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</div>

