<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SOLAR GROVE | {{$title}}</title>
    <meta name="keywords" content="Biodigesters,Water Supplies,Energy Storage,Water Pump Inverters,Solar Inverters,Solar Panels">
    <meta name="description" content="">
    <meta name="author" content="Edimon Ombati(APEK TECH INC.)">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('storage/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('storage/images/logo.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('storage/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('storage/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-2 ">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="/">
                                        <img src="{{asset('storage/images/logo.png')}}" alt="#" style="height:10vh;"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item {{request()->path()=='/'?'active':''}}">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item {{request()->path()=='about'?'active':''}}">
                                        <a class="nav-link" href="/about">About</a>
                                    </li>
                                    <li class="nav-item {{request()->path()=='service'?'active':''}}">
                                        <a class="nav-link" href="/service">Services</a>
                                    </li>
                                    <li class="nav-item {{request()->path()=='gallery'?'active':''}}">
                                        <a class="nav-link" href="/gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item {{request()->path()=='news'?'active':''}}">
                                        <a class="nav-link" href="/news"> Tech News </a>
                                    </li>
                                    <li class="nav-item {{request()->path()=='contact'?'active':''}}">
                                        <a class="nav-link" href="/contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    @yield('content')
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-3 col-sm-6">
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        <p class="variat pad_roght2"></p>
                    </div>
                    <div class=" col-md-3 col-sm-6">
                        <h3>LET US HELP YOU </h3>
                        <p class="variat pad_roght2"></p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h3>INFORMATION</h3>
                        <ul class="link_menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about"> About</a></li>
                            <li><a href="/service">Services</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <!-- <li><a href="/testimonial">Testimonial</a></li> -->
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h3>OUR Design</h3>
                        <p class="variat"></p>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <form id="hkh" class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>© {{date('Y')}} All Rights Reserved. Design by <a href="https://apektechinc.com"> APEK TECH INC</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{asset('storage/js/jquery.min.js')}}"></script>
    <script src="{{asset('storage/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('storage/js/jquery-3.0.0.min.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('storage/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('storage/js/custom.js')}}"></script>
</body>

</html>
<!-- @auth
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
@endauth -->