<html>
    <body>
        <h2>Sign Up</h2>
      
    <form method="post" action={{ url('/signup') }}>
            {{csrf_field()}}

            <input type="text" name="name" placeholder="Name" /><br>
            <input type="email" name="email" placeholder="Email" /><br>
            <input type="password" name="password" placeholder="Password" /><br>

            <input type="submit" name="signup" value="Sign Up" />
        </form>
    </body>
</html>
