@extends('layout.userpage')

@section('content')


<div style="width:50%;margin-left:25%;">

<form action="" method="post">
    <input type="hidden" name="id" value=""/>
    <label for="name"><h3>Name:</h3></label>
    <input type="text" name="name" value=""/>
    <label for="email"><h3>Email:</h3></label>
<input type="email" name="email" value="{{ $email }}"/>
    <label for="password"><h3>Password:</h3></label>
    <input type="password" name="password" value=""/>
    <br />
    <input type="submit" name="edit" value="Edit"/> 
</form>
</div>
@endsection