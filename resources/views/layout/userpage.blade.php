<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Style for Posts-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="<?php echo asset('css/userpage.css')?>" type="text/css">
<link rel="stylesheet" href="{{mix('css/app.css')}}">

        <title>Laravel</title>

          </head>
    <body>
            <div class="ui inverted menu">
                    <a class="item">
                            WePost
                          </a>
                    <a class="item">
                      About 
                    </a>
                    
                    <div class="right menu">
                        <div class="item">
                                    <div class="ui facebook button">Login</div>
                                <div class="item">
                                     <div class="ui youtube button">Sign Up</div>
                                </div>
                        </div> 
                    </div>
            </div>
            <diV>
   <center>
        @yield('content')
    </center>
        <div style="position:fixed; bottom:0;width: 100%;"class="ui inverted  vertical footer segment">
                <center><p>Created  By: Isla and Gaowther</p></center>
               
         </div>
    </body>
</html>
