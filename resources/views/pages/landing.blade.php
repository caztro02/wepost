
<head>
    <title>WePost</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
    <link rel="stylesheet" href="<?php echo asset('css/default.css')?>" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>  
<div class="ui grid"> 
<div img class="ui fluid image" src="/images/img3.jpg">
    
        <div class="ui secondary menu">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        WePOST
                    </a>
            
                <div class="right menu">
                    <div class="right item">
                        <a href="{{ route('login') }}" class="ui medium button">Login</a>
                    </div>
                </div>
        </div>  

    <div  class="ui centered grid">
          <center>
             <div class="column">
                <div class="content">
                 <i><h1 class="ui massive text">WeP<img class="ui mini circular spaced  image" src="/images/twitter1.png">ST</h1></i>
                     <p><h3 style="color:black">Conversations are happening whether you are there or not</h3></p>     
                </div>  
            </div>
                    </br>
                <a href="{{ route('register') }}" class="ui massive inverted violet button">
                    Register<i class="right arrow icon"></i>
                </a>
            </center>
    </div>
</div>
</div>

    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
             
            <div class="ui vertical list">
                <div class="item">
                    <h3 class="ui large header">       
                         <img class="ui mini circular spaced image" src="/images/van.jpeg">
                            <div class="content">
                                <div class="ui sub header">Vanesa Matienzo</div>
                                    Web Designer 
                            </div>
                    </h3>
                </div>
            
                <div class="item">
                    <h3 class="ui large header"> 
                        <img class="ui mini circular spaced image" src="/images/chan.jpeg">
                            <div class="content">
                                <div class="ui sub header"> Christian Castro</div>
                                Programmer
                            </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>           
</body>
 