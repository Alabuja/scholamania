<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Scholamania Readers and Writers Club</title>
 
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/edua-icons.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="/css/settings.css">
    <link rel="stylesheet" type="text/css" href="/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="icon" href="favicon.png">

    <style type="text/css">
        footer {
            /*position:fixed;*/
            bottom:0;
            /*left:0;*/
        }
    </style>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @yield('css')
</head>
<body>
    <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--Loader-->
    <div class="loader">
      <div class="bouncybox">
          <div class="bouncy"></div>
        </div>
    </div>

    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">
                        <span class="info"><a href="#."> Have any question?</a></span>
                        <span class="info"><i class="icon-phone2"></i>(234) 815 9599 845</span>
                        <span class="info"><i class="icon-mail"></i>info@scholamania.org.ng</span>
                    </div>
                    <ul class="social_top pull-right">
                      <li><a href="https://web.facebook.com/scholamania/?fref=ts"><i class="fa fa-facebook"></i></a></li>
                      {{-- <li><a href="#."><i class="icon-twitter4"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Header-->
    <header>
      <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container"> 
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/')}}">
            <img src="{{url('dist/img/logo2.png') }}" class="logo logo-scrolled" alt="">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                @if (Auth::guest())
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('login') }}">Login</a></li>
                <li><a href="{{ url('newregister') }}">Register</a></li>
                            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu </a>

                        <ul class="dropdown-menu">
                            <li class="{{ Request::is('home') ? 'active' : '' }}">
                                <a href="{{ url('home') }}">Home</a>
                            </li>
                            {{-- <li class="{{ Request::is('forums') ? 'active' : '' }}">
                                <a href="{{ url('forums') }}">Forum</a>
                            </li> --}}
                            <li class="{{ Request::is('resources') ? 'active' : '' }}">
                                <a href="{{ url('resources') }}">Resources</a>
                            </li>
                            {{-- <li class="{{ Request::is('coach') ? 'active' : '' }}">
                                <a href="{{ url('coach') }}">Add Coaches</a>
                            </li> --}}
                            <li class="{{ Request::is('assignment') ? 'active' : '' }}">
                                <a href="{{ url('assignment') }}">Club Activities</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }}</a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('profile') }}"><i class="fa fa-btn fa-user"></i>Update Profile</a>
                            </li>
                            <li>
                                <a href="{{ url('update')}}">Change password</a>
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
                @endif
            </ul>
          </div>
        </div>   
      </nav>
    </header>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/jquery-2.2.3.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootsnav.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/jquery-countTo.js"></script>
    <script src="/js/jquery.parallax-1.1.3.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/jquery.themepunch.tools.min.js"></script>
    <script src="/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/revolution.extension.layeranimation.min.js"></script>
    <script src="/js/revolution.extension.navigation.min.js"></script>
    <script src="/js/revolution.extension.parallax.min.js"></script>
    <script src="/js/revolution.extension.slideanims.min.js"></script>
    <script src="/js/revolution.extension.video.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/functions.js"></script>
    @yield('js')
</body>
</html>
