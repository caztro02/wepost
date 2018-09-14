
       
    <div class="container size">
            <div class="ui left corner label">
                    <i class=" large red heart icon"></i>
                  </div> 
        <form autocomplete="off" method="post" action={{ route('posts.store') }}>
            {{csrf_field()}}
       
             
                <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
                <section class="flexbox">
                    <i class="ui left floated blue header">Share Your Thoughts!</i>
                        <button class="ui right floated facebook button"  type="submit" name="post">Posts</button>
                        <div class="ui clearing divider"></div>
                        @if ($errors->has('content'))
                        <span class="help-block">
                        <strong>{{ $errors->first('content') }}</strong>
                        </span>
                        @endif
                            <div class="ui fluid massive input">
                                <input type="text" name="content" placeholder="What's on your mind?"/>
                            </div>
                        
                </section>
            </form>
            </div>
     



            
        
           
            
                            
        
<!--<img class="ui mini circular right spaced image" src="/images/twitter1.png">-->
<!--<form autocomplete="off" method="post" action={{ route('posts.store') }}>
    {{csrf_field()}}

    <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
    
    <div style="width:50%;" class="container">
            <h4 style="float:left">Status</h4>
            <div style="float:right">
                <i class="user icon"></i>
                <i class="power off icon"></i>
            </div>
        <div class="ui massive input">     
             <input type="text" name="content"  placeholder="What's on your mind?"/>
        </div>
                <div>
                    <button class="ui inverted red button" type="submit" name="post">Post</button>
                </div>
            </div>
</form>-->


<!--
    <input type="hidden" name="id" value="{{ Auth::user()->id }}"/>
    <input type="text" class="post_content" name="content" placeholder="What's on your mind?"/>
    <button type="submit" name="post">Post</button>
    
</form>-->