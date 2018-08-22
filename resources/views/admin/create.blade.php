@extends('layout.userpage')

@section('content')
<center>
<h2>Add Users</h2>

<form method="post" action={{ route('users.store') }} enctype="multipart/form-data">
    {{csrf_field()}}

    <input type="text" name="name" placeholder="Name" /><br>
    <input type="email" name="email" placeholder="Email" /><br>
    <input type="password" name="password" placeholder="Password" /><br>
    <input type="file" name="profile" id="file"><br />
   
    <button type="submit" name="add">Add</button>
    
</form>

<a href ="{{ route('users.index') }}"/><button>Cancel</button></a>
</center>
@endsection