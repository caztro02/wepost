<!doctype html>
<html>
    <head>
        <title>Signup @yield('title')</title>
        <link rel="stylesheet" href="<?php echo asset('css/signup.css')?>" type="text/css">
    </head>

    <body>
        <div class="signup-container">

            <h3><center>Signup</center></h3><br>
            
        <p>
         <label for="username">Username:</label>
            <input type="username" name="username" id="username" v-model="username">
            </p>
           
    <p>
         <label for="password">Password:</label>
    <input type="password" name="password" id="password" v-model="password"></label>
         </p>

          <form v-on:submit="sub" action="#" method="post">
       <input type="submit" value="Signup">
       </form>
        </div>
</body>
</html>