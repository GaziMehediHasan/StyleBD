<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
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
            <div class="top-right links">
                <a href="{{ route('home') }}"></a>
                <!-- Header -->
                <header class="header shop">
                <!-- Topbar -->
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <!-- Top Right -->
                                <div class="right-content">
                                    <ul class="list-main">
                                       <li><i class="ti-notepad"></i> <a href="{{ route('contact') }}">Contact Us</a></li>
                                       <li><i class="ti-user"></i> <a href="{{ route('about') }}">About Us</b></a></li>
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
                                    <a href="{{ route('home') }}"><img src="{{ asset('public/images/logo.png')}}" alt="logo"></a>
                                </div>
                                <!--/ End Logo -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-inner">
                    <div class="container">
                        <div class="cat-nav-head">
                            <div class="row">
                                <div class="col-lg-9 col-12">
                                    <div class="menu-area">
                                        <!-- Main Menu -->
                                        <nav class="navbar navbar-expand-lg">
                                            <div class="navbar-collapse">   
                                                <div class="nav-inner"> 
                                                    <ul class="nav main-menu menu navbar-nav">
                                                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                        <!--/ End Main Menu --> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Header Inner -->
            </header>

            <!-- Shopping Cart -->
            <div class="shopping-cart section">
            	<div class="container">
            		<div class="row">
            			<div class="col-12">
            				@if(Cart::instance('wishlist')->count()>0)
            				<!-- Shopping Summery -->
            				<table class="table shopping-summery">
            					<thead>
            						<tr class="main-hading">
            							<th>PRODUCT</th>
            							<th>NAME</th>
            							<th class="text-center">PRICE</th>
            							<th class="text-center"><i class="ti-trash remove-icon"></i></th>
                                        <th class="text-center"><i class="ti-shopping-cart remove-icon"></i></th>
            						</tr>
            					</thead>
            					<tbody>
            						@foreach($wishlist as $row)
            						<tr>
            							<td class="image" data-title="No"><img src="{{ url($row->options->image) }}" alt="#"></td>
            							<td class="product-des" data-title="Description">
            								<p class="product-name"><a href="#">{{ $row->name }}</a></p>
            								<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
            							</td>
            							<td class="price" data-title="Price"><span>{{ $row->price }}</span></td>
            							<td class="action" data-title="Remove"><a href="{{ route('remove_wishlist',[$row->rowId]) }}">
                                        <i class="ti-trash remove-icon"></i></a></td>
                                        <td class="action" data-title="Add"><a href="{{ route('move_wishlisttocart',[$row->rowId]) }}">
                                        <i class="ti-shopping-cart remove-icon"></i></a></td>
            						</tr>
            						@endforeach
            					</tbody>
            				</table>
            				<!--/ End Shopping Summery -->
            				@else
            				    <h4>No item in wishlist</h4>
            				@endif
            			</div>
            		</div>
            	</div>
            </div>
            <!--/ End Shopping Cart -->
                
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
                                        <a href="{{ route('home') }}"><img src="{{ asset('public/images/logo2.png') }}" alt="#"></a>
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
        </div>   
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