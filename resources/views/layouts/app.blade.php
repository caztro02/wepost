<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    @guest
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                    @else
                        @if(Auth::user()->roles()->first()->name == 'user')
                            <a class="navbar-brand" href="{{ route('posts.index') }}">
                                {{ config('app.name') }}
                            </a>
                        @elseif(Auth::user()->roles()->first()->name == 'admin')
                        <a class="navbar-brand" href="{{ route('users.index') }}">
                            {{ config('app.name') }}
                        </a>
                        @endif
                    @endguest
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
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
        </nav>

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
        