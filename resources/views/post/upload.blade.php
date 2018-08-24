@extends('layout.userpage')

@section('content')
<center>
<h2>Upload</h2>

<form method="post" action={{ route('posts.update', $data->id) }} enctype="multipart/form-data">
    {{csrf_field()}}

    <input type="hidden" name="email" value="test@test.com"/>
    <input type="file" name="file" id="file">

    <button type="submit" name="upload">Upload</button>
    
</form>

<a href ="{{ route('posts.index') }}"/><button>Cancel</button></a>
</center>
@endsection