@extends('layout.userpage')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">
<link rel="stylesheet" href="{{mix('css/app.css')}}">
@section('content')
<center>
 <body>
        <form class="ui form size" method="post" action={{ route('posts.update', $data->id) }}>
            {{ method_field('PUT') }}
            {{csrf_field()}}
            <div class="ui segment">
                <h1 class="ui floated blue header">Edit POST</h1>
                <div class="ui right floated buttons">
                    <button class="ui primary button" type="submit" name="post">Edit</button>
                    <div class="ui or"></div>
                    <a class="ui primary button" href ="{{ route('posts.index') }}"/>Cancel</a>
                </div>
                <div class="ui clearing divider"></div>
                    <input type="hidden" name="id" value="{{ $data->id }}"/>
                    <textarea name="content">
                         {{ $data->content}}
                    </textarea>
            </div>   
        </form>
  


</center>
</body>
@endsection