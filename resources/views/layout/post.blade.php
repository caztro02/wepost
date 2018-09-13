<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WePOST</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/semantic/semantic/dist/semantic.min.css">  
        <link rel="stylesheet" href="<?php echo asset('css/posts.css')?>" type="text/css">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

<body style="background-color:rgba(199, 236, 238,1.0)">
<div class="ui menu">
    <a class="navbar-brand" href="{{ url('/') }}">
        WePOST
    </a>
    <div class="right menu">
        <div class="ui massive compact menu">
            <div class="ui center aligned simple dropdown item">
                <div class="text">
                    <i class="eye icon"></i>
                    {{ Auth::user()->name }}
                </div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    @if(Auth::user()->roles()->first()->name == 'admin')
                        <div class="item">
                            <i class="left key blue icon"></i>
                            <a class="link" href ="{{ route('users.index', Auth::user()->id) }}">Admin</a>
                        </div>
                    @endif
                    <div class="item">
                        <i class="left newspaper outline blue icon"></i>
                        <a class="link" href ="{{ route('posts.index', Auth::user()->id) }}">Timeline</a>     
                    </div>
                    <div class="item">
                        <i class="left user circle outline blue icon"></i>
                        <a class="link" href ="{{ route('users.show', Auth::user()->id) }}">Profile</a>
                    </div>
                    <div class="ui left pointing dropdown link item">
                        <i class="left cog blue icon"></i>  
                        <span class="text">Settings</span>
                        <ul class="left menu">
                            <div class="item">
                                <a class="link" href="{{ route('users.edit', Auth::user()->id) }}">General Settings</a>
                            </div>
                            <div class="item">
                                <a class="link" href="{{ route('passwordSettings', Auth::user()->id) }}">Change Password</a>
                            </div>
                        </ul>
                    </div>
                    <div class="item">
                        <i class="left logout icon"></i>
                        <a class="link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui grid">
    <div style="background-color:rgba(87, 101, 116,1.0)"class="ui sidebarleft vertical menu">
    <div>
        @include('post.friends')
    </div>
    </div>
    <div class="ui segment status">
            @yield('content')
        </div>
</div>

    </body>