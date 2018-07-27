<html>
    <body>
        <h2>Log In</h2>
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
    <form method="post" action={{ url('/success') }}>
            {{csrf_field()}}

            <input type="email" name="email" /><br>
            <input type="password" name="password" /><br>

            <input type="submit" name="login" value="login" />
        </form>
    </body>
</html>
