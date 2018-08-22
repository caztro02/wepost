
@extends('layout.app')


@section('content')

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Style for Login-->
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">  
    

</head>
<body img class="ui fluid image">
        
        <center>
            <h1><i>WePost</i></h1>
        </center>
        <br>
        <br>
        <div class="ui two column centered grid">
    <div class="container">
    
        <h2>Log In</h2>  

            <form class="ui massive form" method="post" action={{ url('/login') }}>
                {{csrf_field()}}
            
                    <div class="field">
                        <label style="color:black; float:left">E-mail</label>
                            <input name="email" required placeholder="@email.com" type="email">
                    </div>
                    
                    <div class="field">
                        <label style="color:black; float:left">Password:</label>
                            <input type="password" name="password" required placeholder="Password">
                    </div>
                
                        <div class="fluid ui huge buttons">  
                            <button class="ui facebook button" type="submit" name="login" value="login">Login</button>
                              <div class="ui or"></div>
                                <a class="ui google plus button" href="/signup">Sign Up</a>
                        </div>
                     </form>
                    </div> 
                </div>
                    
                    
                     @if($message = Session::get('error'))
                       {{ $message }}
                        @endif
                         @if(count($errors)>0)   
                           <ul>
                               @foreach($errors->all() as  $error)
                                <li>{{ $error }}</li>
                                 @endforeach
                                </ul>
                                @endif
</body>
@endsection
 