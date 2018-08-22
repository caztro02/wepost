
<!doctype html>

    <head>
        <title>Signup @yield('title')</title>
       
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
        <link rel="stylesheet" href="<?php echo asset('css/signup.css')?>" type="text/css">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">  
    </head>

    @extends('layout.app')

@section('content')

   <div class="container">
    <h2>Sign Up</h2>
    
        <form class="ui massive form"  method="post" action={{ url('/signup') }}>
            {{csrf_field()}}
           <div class="field">
                 <label>Name:</label>
                    <input type="text" name="name" required placeholder="Name" />
            </div>

            <div class="field">
                <label>Email:</label>
                    <input type="email" name="email" required placeholder="@email.com" />
            
            </div>
            
            <div class="field">
                <label>Password:</label>
                     <input type="password" name="password" required placeholder="Password" />
            </div>

            <div>
                <input class="ui fluid massive google plus button" type="submit" name="signup" value="Sign Up" />
           </div>
        </div>
        </form>
   
@endsection