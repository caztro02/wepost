@extends('layout.userpage')

@section('content')
<center>
<h2>Add Users</h2>

<form method="post" action={{ route('posts.update', $data->id) }}>
    {{ method_field('PUT') }}
    {{csrf_field()}}

    <input type="hidden" name="id" value="{{ $data->id }}"/>
    <input type="text" class="post_content" name="content" value ="{{ $data->content }}"placeholder="What's on your mind?"/>
    <button type="submit" name="post">Edit</button>
    
</form>

<a href ="{{ route('posts.index') }}"/><button>Cancel</button></a>
</center>
@endsection