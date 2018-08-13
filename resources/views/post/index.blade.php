@extends('layouts.app')


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
            @if($value->user->trashed())
            <img style="width:50px;height:50px;" src="/storage/profile/index.png"/>
            <h3>Posted by {{ $value->user->name }}</h3>

            @else
            <img style="width:50px;height:50px;" src="/storage/profile/{{ $value->user->profile }}"/>
            <h3>Posted by <a href="{{ route('admin.show', $value->id) }}">{{ $value->user->name }}</a></h3>  
            @endif

            <h3>{{ $value->content }}</h3>
            <p>Date Created:{{ $value->created_at }} Date Editted:{{ $value->updated_at }}</p>
            @if(Auth::user()->id==$value->user_id)
            <a href ="{{ route('posts.edit', $value->id) }}"/><button>Edit</button></a>&nbsp;
        
            <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                {{ method_field('DELETE') }}
                {{csrf_field()}}
                <button type="submit"/>DELETE</button>
            </form>
            
            @endif

        </div>
        @endforeach
    </div>

@endsection