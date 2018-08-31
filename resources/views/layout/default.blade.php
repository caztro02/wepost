
@extends('pages.landing')




@section('content')
<head>

<title>WePost</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
<link rel="stylesheet" href="<?php echo asset('css/default.css')?>" type="text/css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
<link rel="stylesheet" href="{{mix('css/app.css')}}">

</head>
<body>
        <div class="ui grid"> 
                <div img class="ui fluid image" src="/images/img3.jpg">

                    <div class="ui secondary menu">
                            <div class="left item">
                                    <a href="{{ url('/') }}" class="navbar-brand">WePOST</a>
                                </div>
                            
                                <div class="right menu">
                                    <div class="right item">
                
                                        <a href="{{ route('login') }}" class="navbar-brand">Login</a>
                                    </div>
                                </div>
                        </div>  
                
                    <div  class="ui centered grid">
                          <center>
                             <div class="column">
                                <div class="content">
                                 <h1 class="ui massive text">WeP<img class="ui mini circular spaced  image" src="/images/twitter1.png">ST</h1>
                                     <h2>"Conversations are happening whether you are there or not"</h2>    
                                </div>  
                            </div>
                                    </br>
                                <a href="{{ route('register') }}" class="ui massive primary button">
                                    Register<i class="right arrow icon"></i>
                                </a>
                            </center>
                    </div>
                </div>
            </div>

</body>