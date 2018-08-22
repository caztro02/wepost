@extends('layout.userpage')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">
<link rel="stylesheet" href="{{mix('css/app.css')}}">
@section('content')
<center>
 <body img class="ui fluid image" src="/images/pink.jpg">

    <div class="container white">
      <h2><b>Add Users</b></h2>
        <form class="ui massive form" method="post" action={{ route('posts.update', $data->id) }}>
            {{ method_field('PUT') }}
            {{csrf_field()}}
   <br>
   
            <input type="hidden" name="email" value="test@test.com"/>
                <div class="field">
                <input type="text" name="content" value ="{{ $data->content }}"placeholder="Username"/>
                </div>
            
                <div class="ui fluid huge buttons">
                    <button class="ui primary button" type="submit" name="post">Edit</button>
                <div class="ui or"></div>
                    <a class="ui primary button" href ="{{ route('posts.index') }}"/>Cancel</a>
        </form>
    </div>

</center>
</body>
@endsection