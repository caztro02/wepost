@extends('layout.userpage')

@section('content')
<center>
<h2>Add Users</h2>

<form method="post" action={{ route('admin.update', $data->email) }}>
    {{ method_field('PUT') }}
    {{csrf_field()}}

    <input type="text" name="name" placeholder="Name" value="{{ $data->name }}" /><br>
    <input type="email" name="email" placeholder="Email" value={{ "$data->email" }} /><br>
    
    <input type="password" name="password" placeholder="Password" value={{ "$data->password" }} /><br>
   
    <button type="submit" name="edit">Edit</button>
    
</form>

<a href ="{{ route('admin.index') }}"/><button>Cancel</button></a>
</center>
@endsection