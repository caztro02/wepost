@extends('layouts.app')

@section('content')
    <center>
        <h1>View Profile</h1>
        <img style="width:200px;height:200px;" src="/storage/profile/{{ $data->profile }}"/><br>
        <label for="name">Name</label><br>
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" readonly/><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} readonly/><br>
    @if(Auth::user()->id == $data->id)
        <a href ="{{ route('users.edit', $data->id) }}"/><button>Edit</button></a>
    @endif
        <a href ="{{ route('posts.index') }}"/><button>Back</button></a>
    </center>
@endsection