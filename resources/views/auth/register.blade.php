<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title Tag  -->
    <title>StyleBD</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('public/images/favicon.png') }}">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    
    <!-- StyleSheet -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstraps.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('public/css/jquery.fancybox.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('public/css/themify-icons.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/niceselect.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/flex-slider.min.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('public/css/owl-carousel.css') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('public/css/slicknav.min.css') }}">

    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('public/Slider/css/bootstrap.min.css') }}">
    
    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('public/css/resets.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">

    <!-- Styles -->
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/main.css') }}">
<!--===============================================================================================-->
</head>
    <body class="js">
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('home') }}"></a>
                    @else
                        <!-- Header -->
                        <header class="header shop">
                        <!-- Topbar -->
                        <div class="topbar">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-12 col-12">
                                        <!-- Top Right -->
                                        <div class="right-content">
                                            <ul class="list-main">
                                               <li><i class="ti-alarm-clock"></i> <a href="#Deal">Daily deal</a></li>
                                               <li><i class="ti-notepad"></i> <a href="{{ route('contact') }}">Contact Us</a></li>
                                               <li><i class="ti-user"></i> <a href="#">About</b></a></li>
                                               <li><i class="ti-power-off"></i><a href="{{ route('login') }}">Login</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Top Right -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Topbar -->

                        <!-- End Topbar -->
                        <div class="middle-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-12">
                                        <!-- Logo -->
                                        <div class="logo">
                                            <a href="{{ url('/') }}"><img src="{{ asset('public/images/logo.png')}}" alt="logo"></a>
                                        </div>
                                        <!--/ End Logo -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="limiter">
                            <div class="container-login100">        
                                <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <span class="login100-form-title p-b-55">
                                            Create Account
                                        </span>

                                            <div class="wrap-input100 validate-input m-b-16">
                                                <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="User Name" autofocus>
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <span class="lnr lnr-envelope"></span>
                                                </span>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                                                <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <span class="lnr lnr-envelope"></span>
                                                </span>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                                                <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <span class="lnr lnr-lock"></span>
                                                </span>

                                                 @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                                                <input id="password-confirm" class="input100" type="password" name="password_confirmation" required autocomplete="new-password"         placeholder="Confirm Password">
                                                <span class="focus-input100"></span>
                                                <span class="symbol-input100">
                                                    <span class="lnr lnr-lock"></span>
                                                </span>

                                                 @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                
                                            </div>

                                            <div class="container-login100-form-btn p-t-25">
                                                <button class="login100-form-btn">
                                                    Register
                                                </button>
                                            </div>

                                            <div class="text-center w-full p-t-42 p-b-22">
                                                <span class="txt1">
                                                    Or Sign Up with
                                                </span>
                                            </div>

                                            <a href="#" class="btn-face m-b-10">
                                                <i class="fa fa-facebook-official"></i>
                                                Facebook
                                            </a>

                                            <a href="#" class="btn-google m-b-10">
                                                <img src="{{ asset('public/images/icons/icon-google.png') }}" alt="GOOGLE">
                                                Google
                                            </a>

                                            <div class="text-center w-full p-t-115">
                                                <span class="txt1">
                                                    Already have an account?
                                                </span>

                                                <a class="txt1 bo1 hov1" href="{{ route('login') }}">
                                                    Login now                         
                                                </a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Start Footer Area -->
                        <footer class="footer">
                            <!-- Footer Top -->
                            <div class="footer-top section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-12">
                                            <!-- Single Widget -->
                                            <div class="single-footer about">
                                                <div class="logo">
                                                    <a href="{{ url('/')}}"><img src="{{ asset('public/images/logo2.png') }}" alt="#"></a>
                                                </div>
                                                <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                                                <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                                            </div>
                                            <!-- End Single Widget -->
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-12">
                                            <!-- Single Widget -->
                                            <div class="single-footer links">
                                                <h4>Information</h4>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                    <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                                                    <li><a href="{{ route('termscondition') }}">Terms & Conditions</a></li>
                                                    <li><a href="{{ route('returnrefund') }}">Return & Refunds</a></li>
                                                </ul>
                                            </div>
                                            <!-- End Single Widget -->
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <!-- Single Widget -->
                                            <div class="single-footer social">
                                                <h4>Get In Tuch</h4>
                                                <!-- Single Widget -->
                                                <div class="contact">
                                                    <ul>
                                                        <li>258/A, Dream Tower.</li>
                                                        <li>Dhaka-1200.</li>
                                                        <li>support@stylebd.com</li>
                                                        <li>+88029646852</li>
                                                    </ul>
                                                </div>
                                                <!-- End Single Widget -->
                                                <ul>
                                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                                    <li><a href="#"><i class="ti-flickr"></i></a></li>
                                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- End Single Widget -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Footer Top -->
                            <div class="copyright">
                                <div class="container">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div class="left">
                                                    <p>Copyright © 2020 StyleBD - All Rights Reserved.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="right">
                                                    <img src="{{ asset('public/images/payments.png') }}" alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>                        
                    @endauth
                </div>
            @endif   
        </div>
    
    <!-- /End Footer Area -->

    <!-- Slider -->
    <script src="{{ asset('public/Slider/js/jquery.js') }}"></script>
    <script src="{{ asset('public/Slider/js/bootstrap.min.js') }}"></script>
 
    <!-- Jquery -->
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('public/js/jquery-ui.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <!-- Color JS -->
    <script src="{{ asset('public/js/colors.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('public/js/slicknav.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('public/js/owl-carousel.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('public/js/magnific-popup.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('public/js/waypoints.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('public/js/finalcountdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('public/js/nicesellect.js') }}"></script>
    <!-- Flex Slider JS -->
    <script src="{{ asset('public/js/flex-slider.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('public/js/scrollup.js') }}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ asset('public/js/onepage-nav.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('public/js/easing.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('public/js/active.js') }}"></script>

    <script src="{{ asset('public/AdminFront/js/bootstrap.bundle.min.js') }}"></script>


    </body>
</html>

