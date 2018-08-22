@extends('layout.userpage')

@section('content')
    <center>
        <h1>View Profile</h1>
        <label for="name">Name</label><br>
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" readonly/><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} readonly/><br>
        
        
        <a href ="{{ route('posts.index') }}"/><button>Back</button></a>
    </center>
@endsection