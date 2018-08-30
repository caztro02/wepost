@extends('layout.userpage')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">
<link rel="stylesheet" href="{{mix('css/app.css')}}">
@section('content')
<center>
 <body img class="ui fluid image" src="/images/pink.jpg">


    <div class="container size">
        <form class="ui form" method="post" action={{ route('posts.update', $data->id) }}>
            {{ method_field('PUT') }}
            {{csrf_field()}}
            <h1 class="ui floated blue header">Edit POST</h1>
            <div class="ui right floated buttons">
                    <button class="ui primary button" type="submit" name="post">Edit</button>
                    <div class="ui or"></div>
                    <a class="ui primary button" href ="{{ route('posts.index') }}"/>Cancel</a>
            </div>
            
                <div class="ui clearing divider"></div>

                    <section class="flexbox">
                        <div class="ui fluid massive input">
                            <input type="hidden" name="id" value="{{ $data->id }}"/>
                            <input type="text" class="post_content" name="content" value ="{{ $data->content }}"placeholder="Edit Your Post!!!"/>
                        </div>
            </section>        
        </form>
    </div>

</center>
</body>
@endsection