<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="YPUyJZwBLpUK-leNWnLCDS0ZGOsJJfZeagQTOymXiTM" />
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
    <link rel="icon" href="{{asset('storage/images/Favicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('storage/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" integrity="sha512-v8QQ0YQ3H4K6Ic3PJkym91KoeNT5S3PnDKvqnwqFD1oiqIl653crGZplPdU5KKtHjO0QKcQ2aUlQZYjHczkmGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <nav class="navbar navbar-expand-md">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('storage/images/logo.png')}}" alt="#" style="height:10vh;" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fa fa-bars"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end bg-white p-4" id="navbarSupportedContent" style="z-index:2;">
                            <ul class="navbar-nav me-auto mb-2">
                                <li style="font-weight:bold; text-transform:uppercase;" class="nav-item">
                                    <a class="nav-link {{request()->path()=='/'?'text-success':''}}" href="/">Home</a>
                                </li>
                                <li style="font-weight:bold; text-transform:uppercase;" class="nav-item">
                                    <a class="nav-link {{request()->path()=='about'?'text-success':''}}" href="/about">About</a>
                                </li>
                                <li style="font-weight:bold; text-transform:uppercase;" class="nav-item">
                                    <a class="nav-link {{request()->path()=='service'?'text-success':''}}" href="/service">Services</a>
                                </li>
                                <li style="font-weight:bold; text-transform:uppercase;" class="nav-item">
                                    <a class="nav-link {{request()->path()=='gallery'?'text-success':''}}" href="/gallery">Project Gallery</a>
                                </li>
                                <li style="font-weight:bold; text-transform:uppercase;" class="nav-item">
                                    <a class="nav-link {{request()->path()=='news'?'text-success':''}}" href="/news"> Tech News </a>
                                </li>
                                <li style="font-weight:bold; text-transform:uppercase;" class="nav-item">
                                    <a class="nav-link {{request()->path()=='contact'?'text-success':''}}" href="/contact">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-center">

                        <!-- <p class="variat pad_roght2"></p> -->
                        <form id="hkh" class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon d-flex justify-content-center">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-x-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class=" col-md-3 col-sm-6">
                        <h3>LET US HELP YOU </h3>
                        <p class="variat pad_roght2"></p>
                    </div> -->
                    <div class="col-sm-6 text-end">
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
                </div>
                <div class="mt-2 text-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <p>© {{date('Y')}} All Rights Reserved. Design by <a href="https://apektechinc.com" class="text-success"> APEK TECH INC</a></p>
                            </div>
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