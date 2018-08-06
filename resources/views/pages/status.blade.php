<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>WePostStatus @yield('title')</title>
        <link rel="stylesheet" href="<?php echo asset('css/status.css')?>" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    
    <body>
        <div class="status-con">

<span>Status</span>

  <span><i class="fa fa-user" style="font-size:24px; margin-left:800px; margin-top:0px; align:justify; cursor:pointer"></i></span>
  <span><i class="fa fa-power-off" style="font-size:24px;cursor:pointer"></i></span>
            
            <textarea rows="4" cols="50" name="comment" form="usrform"></textarea>

            <form v-on:submit="sub" action="#" method="post">
                <input type="submit" value="Post">
            </form>
        </div>
    
        <div class="statuslist">   
        
        <span><i class="fa fa-trash-o" style="font-size:24px; margin-left:800px; margin-top:10px; align:justify; cursor:pointer"></i></span>
        <span><i   class="fa fa-edit" style="font-size:24px; cursor:pointer"></i></span>

    <div class="feeds">
  
        </div>
</div>
</body>
</html>
