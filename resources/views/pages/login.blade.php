
@extends('layout.app')


@section('content')


<head>
    <title>Login</title>
     
    
<!--
        <h2>Log In</h2>
        <p>
                {{ $errors->first('email') }}
        </p> 
        <p>
                {{ $errors->first('password') }}
        </p>
    <form method="post" action={{ url('/login') }}>
            {{csrf_field()}}
            <label for="email"><h3>E-mail:</h3></label>
            <input type="text" name="email" /><br>
            <label for="password"><h3>Password:</h3></label>
            <input type="password" name="password" /><br>
development-->

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
 