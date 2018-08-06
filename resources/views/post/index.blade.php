@extends('layout.post')


@section('content')

    <center><h1>Posts Controller</h1></center>

    <center>
    <div class="post_form">
    
        @include('post.create')
        
    </div>
    </center>
    
    <div>
        @foreach($data as $value)
        <div class="post">
            <h3>Posted by <a href="">{{ $value->email }}</a></h3>
            <h3>{{ $value->content }}</h3>
            <p>{{ $value->created_at }}</p>
       
            <a href ="{{ route('posts.edit', $value->id) }}"/><button>Edit</button></a>&nbsp;
       
            <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button type="submit"/>DELETE</button>
            </form>
          
        </div>
        @endforeach
    </div>

@endsection