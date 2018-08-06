@extends('layout.app')

@section('content')
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
    <form method="post" action={{ url('/login') }}>
            {{csrf_field()}}
            <label for="email"><h3>E-mail:</h3></label>
            <input type="email" name="email" /><br>
            <label for="password"><h3>Password:</h3></label>
            <input type="password" name="password" /><br>

            <input type="submit" name="login" value="login" />
        </form>

        <a href="/signup">Sign Up</a>
@endsection
