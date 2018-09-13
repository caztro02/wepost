<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">-->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <!--Style for Login-->
                    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">  
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
   

</head>

<body style="background-color:  rgba(199, 236, 238,1.0)">
                    
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
                                    @if(Auth::user()->roles()->first()->name == 'admin')
                                        <li>                                            
                                            <a href ="{{ route('users.index', Auth::user()->id) }}">Admin</a>
                                        </li>
                                    @endif
                                        <li>                                            
                                            <a href ="{{ route('posts.index', Auth::user()->id) }}">Timeline</a>
                                        </li>
                                        <li>                                            
                                            <a href ="{{ route('users.show', Auth::user()->id) }}">Profile</a>
                                        </li>
                                        <li style="cursor:pointer;" class="dropdown-submenu">                                            
                                            <a class="test" tabindex="-1">Settings</a>
                                            <ul class="left dropdown-menu">
                                                    <li><a href="{{ route('users.edit', Auth::user()->id) }}" tabindex="-1">General Settings</a></li>
                                                    <li><a href="{{ route('passwordSettings', Auth::user()->id) }}" tabindex="-1">Change Password</a></li>
                                            </ul>
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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<script>
        $(document).ready(function(){
          $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
          });
        });
        </script>
        