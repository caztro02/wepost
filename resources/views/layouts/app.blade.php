<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    
</head>

<body img class="ui fluid image" src="/images/img3.jpg">
    <!--<div id="app">-->
            <div class="ui secondary menu">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        WePOST
                    </a>
            
                <div class="right menu">
                       
                                <a href="{{ route('login') }}" class="navbar-brand">Login</a>
                        <a class="navbar-brand" href="{{ route('register') }}">Register</a>
                </div>
         

                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                   

                
                
                    <!--Style for Login-->
                    
                    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
                    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
                    <link rel="stylesheet" href="{{mix('css/app.css')}}">  

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav" style="float:right">
                        <!-- Authentication Links -->
                        @guest
                           <!-- <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                        <li>
                                            <a href=""
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    Profile
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            
            </div>

           <div>
        @yield('content')
    </div>
    
        <div style="position:fixed; bottom:0;width: 100%; color:black " class="ui centered footer">
             <center><p>Created  By: Isla and Gaowther</p></center>
           
     </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
