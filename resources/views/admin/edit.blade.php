@extends('layouts.app')

@section('content')
<center>
<h2>Edit User</h2>
<div style="width:200px;height:200px;">
<img style="width:200px;height:200px;" src="/storage/profile/{{ $data->profile }}"/>
</div>

<form method="post" action={{ route('changeProfile', $data->id) }} enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{csrf_field()}}
        <label for="profile" >Change Profile Picture</label><br>
        <input type="file" name="profile" id="file">
        <button type="submit" name="edit">Upload</button>
    </form>
    <form method="post" action={{ route('users.update', $data->id) }} enctype="multipart/form-data">
        {{ method_field('PUT') }}
        {{csrf_field()}}
        
        <label for="name" >Name</label><br>
        <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" /><br>
        <label for="email" >Email</label><br>
        <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} /><br>
        
        <button type="submit" name="edit">Update</button>
        
    </form>

<a href ="{{ route('users.index') }}"/><button>Cancel</button></a>
</center>
@endsection