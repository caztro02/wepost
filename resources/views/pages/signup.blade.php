<!doctype html>
<html>
    <head>
        <title>Signup @yield('title')</title>
        <link rel="stylesheet" href="<?php echo asset('css/signup.css')?>" type="text/css">
    </head>

    <body>
        <div class="signup-container">

            <h3><center>Signup</center></h3><br>
            
            <span>Username:</span>
            <input type="text" name="username" placeholder="Username"><br>

          <span>Password:</span>
            <input type="password" name="password" placeholder="Password">

          <form v-on:submit="sub" action="#" method="post">
       <input type="submit" value="Signup">
       </form>
        </div>
    </body>
</html>