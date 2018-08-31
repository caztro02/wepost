
<form method="post" action={{ route('comments.store') }}>
    {{csrf_field()}}
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
    <input type="hidden" name="post_id" value="{{ $value->id }}"/>
    <input type="text" class="post_content" name="content" placeholder="Your comment here"/>
    <button type="submit" name="post">Post</button>
    
</form>


