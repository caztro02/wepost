<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <title>Laravel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Style for Posts-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
<link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>


    <body style="background-color: rgba(52, 73, 94,1.0)">
            <div class="ui secondary menu">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        WePOST
                    </a>
            
              <!--
                        <a href="{{ route('login') }}" class="navbar-brand">Login</a>-->
                <div class="right menu"> 
                <ul class="nav navbar-nav">
                <li class="dropdown">
                        <a href="" class="navbar-brand" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" v-pre>
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
                </ul>
        </div> 
    </div>


   <center>
        @yield('content')
    </center>
        <div style="position:fixed; bottom:0;width: 100%; color:black" class="ui footer">
                <center><p>Created  By: Isla and Gaowther</p></center>
               
         </div>

        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
                $(document).ready(function(){
                  $('.dropdown-submenu a.test').on("click", function(e){
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                  });
                });
        </script>
    </body>
</html>
