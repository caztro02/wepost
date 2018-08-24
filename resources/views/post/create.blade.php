

<!--
<center>

 development-->
<div class="ui centered grid">
    <div class="container size">
        <form autocomplete="off" method="post" action={{ route('posts.store') }}>
                    {{csrf_field()}}
            <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
            <div class="ui divider">
                <div class="right container">
                    <button class="ui button"  type="submit" name="post">Posts</button>
                </div>
            </div>
         
            <img class="ui mini circular right spaced image" src="/images/twitter1.png">
            <div class="ui input">
                <input type="text" name="content"  placeholder="What's on your mind?"/>
        
            </div>
        
           
            
    </div>

</div>

<!--<form autocomplete="off" method="post" action={{ route('posts.store') }}>
    {{csrf_field()}}

    <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
    
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
<!--
    <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
    <input type="text" class="post_content" name="content" placeholder="What's on your mind?"/>
    <button type="submit" name="post">Post</button>
    
</form>-->


</center>
development-->
