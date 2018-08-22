



<form autocomplete="off" method="post" action={{ route('posts.store') }}>
    {{csrf_field()}}
    <input type="hidden" name="email" value="test@test.com"/>
    
    <div style="width:50%;" class="container">
            <h4 style="float:left">Status</h4>
            <div style="float:right">
                <i class="user icon"></i>
                <i class="power off icon"></i>
            </div>
        <div class="ui input">
                
             <input type="text" name="content"  placeholder="What's on your mind?"/>
         <div>
                <div>
                    <button class="ui inverted red button" type="submit" name="post">Post</button>
                </div>
    </div>
</form>