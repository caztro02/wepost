

<center>


<form method="post" action={{ route('posts.store') }}>
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
    <input type="text" class="post_content" name="content" placeholder="What's on your mind?"/>
    <button type="submit" name="post">Post</button>
    
</form>


</center>
