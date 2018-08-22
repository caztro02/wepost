@extends('layout.userpage')

@section('content')
<center>
<h2>Edit User</h2>
<div style="width:200px;height:200px;">
<img style="width:200px;height:200px;" src="/storage/profile/{{ $data->profile }}"/>
</div>

<form method="post" action={{ route('users.update', $data->id) }} enctype="multipart/form-data">
    {{ method_field('PUT') }}
    {{csrf_field()}}
    
    <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" /><br>
    <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} /><br>
    
    <input type="password" name="password" placeholder="Password" value={{ "$data->password" }} /><br>
    <input type="file" name="profile" id="file"><br />
    <button type="submit" name="edit">Edit</button>
    
</form>

<a href ="{{ route('users.index') }}"/><button>Cancel</button></a>
</center>
@endsection