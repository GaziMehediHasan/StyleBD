<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

</head>
    <body class="js">
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
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
                                               <li><i class="ti-user"></i> <a href="{{ route('about') }}">About Us</b></a></li>
                                               <li class="nav-item dropdown"></i>
                                                   <a id="navbarDropdown" class="nav-link nav-link-profile" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                       {{ Auth::user()->name }}
                                                   </a>

                                                   <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                                       <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                           {{ __('Logout') }}
                                                       </a>

                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                           @csrf
                                                       </form>
                                                   </ul>
                                               </li>
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
                                        <div class="mobile-nav"></div>
                                    </div>
                                    <form action="{{ route('search') }}" method="get">
                                        <div class="col-lg-8 col-md-7 col-12">
                                            <div class="search-bar-top">
                                                <div class="search-bar">
                                                    <select name="Category">
                                                        <option selected="selected">All Category</option>
                                                        <option value="Shirt">Shirt</option>
                                                        <option value="Pant">Pant</option>
                                                        <option value="T-Shirt">T-Shirt</option>
                                                        <option value="Polo Shirt">Polo Shirt</option>
                                                        <option value="Kurta">Kurta</option>
                                                        <option value="Saree">Saree</option>
                                                        <option value="Salwar Kameez">Salwar Kameez</option>
                                                        <option value="Kurti">Kurti</option>
                                                        <option value="Top">Top</option>
                                                        <option value="Lehenga">Lehenga</option>
                                                        <option value="Jeans">Jeans</option>
                                                        <option value="Shoe">Shoe</option>
                                                        <option value="Sunglass">Sunglass</option>
                                                        <option value="Bag">Bag</option>
                                                        <option value="Watch">Watch</option>
                                                        <option value="Jewellary">Jewellary</option>
                                                        <option value="UnderGarment">UnderGarment</option>
                                                    </select>
                                                    <input name="search" value="{{ request()->input('query') }}" placeholder="Search Products Here....." type="search">
                                                    <button class="btnn"><i class="ti-search"></i></button>
                                                </div>
                                                @error('search')
                                                  <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-lg-2 col-md-3 col-12">
                                        <div class="right-bar">
                                            <!-- Search Form -->
                                            <div class="sinlge-bar shopping">
                                                <a href="{{ route('wishlist') }}" class="single-icon">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <span class="total-count">
                                                    @if(Cart::instance('wishlist')->count()>0)
                                                       <span>{{ Cart::instance('wishlist')->count() }}</span>
                                                    @endif
                                                </span></a>
                                                <!-- Shopping Item -->
                                                <div class="shopping-item">
                                                    <div class="dropdown-cart-header">
                                                        <span>{{ Cart::instance('wishlist')->count() }} Items</span>
                                                        <a href="{{ route('wishlist') }}">View Wishlist</a>
                                                    </div>
                                                    <ul class="shopping-list">
                                                        @foreach(Cart::instance('wishlist')->content() as $row)
                                                            <li>
                                                                <a href="{{ route('remove_wishlist',[$row->rowId]) }}" class="remove" 
                                                                title="Remove this item"><i class="ti-trash"></i></a>
                                                                <a href="{{ route('move_wishlisttocart',[$row->rowId]) }}" class="add" 
                                                                title="Move to cart"><i class="ti-shopping-cart"></i></a>
                                                                <a class="cart-img" href="#"><img src="{{ url($row->options->image) }}" alt="#">
                                                                </a>
                                                                <h4><a href="#">{{ $row->name }}</a></h4>
                                                                <p class="quantity"><span class="amount">{{ $row->price }}</span></p>
                                                            </li>                                                            
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <!--/ End Shopping Item -->
                                            </div>                                            
                                            <div class="sinlge-bar shopping">
                                                <a href="{{ route('cart') }}" class="single-icon"><i class="ti-bag"></i> 
                                                <span class="total-count">
                                                    @if(Cart::instance('cart')->count()>0)
                                                       <span>{{ Cart::instance('cart')->count() }}</span>
                                                    @endif
                                                </span></a>
                                                <!-- Shopping Item -->
                                                <div class="shopping-item">
                                                    <div class="dropdown-cart-header">
                                                        <span>{{ Cart::instance('cart')->count() }} Items</span>
                                                        <a href="{{ route('cart') }}">View Cart</a>
                                                    </div>
                                                    <ul class="shopping-list">
                                                        @foreach(Cart::instance('cart')->content() as $row)
                                                            <li>
                                                                <a href="{{ route('remove_cart',[$row->rowId]) }}" class="remove" title="Remove this item"><i class="ti-trash"></i></a>
                                                                <a class="cart-img" href="#"><img src="{{ url($row->options->image) }}" alt="#"></a>
                                                                <h4><a href="#">{{ $row->name }}</a></h4>
                                                                <p class="quantity"><span class="amount">{{ $row->price }}</span></p>
                                                            </li>                                                            
                                                        @endforeach
                                                    </ul>
                                                    <div class="bottom">
                                                        <div class="total">
                                                            <span>Total</span>
                                                            <span class="total-amount">{{ Cart::instance('cart')->total() }}</span>
                                                        </div>
                                                        <a href="{{ url('checkout') }}" class="btn animate">Checkout</a>
                                                    </div>
                                                </div>
                                                <!--/ End Shopping Item -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <main class="py-4">
                            @yield('content')
                        </main>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <!-- Product Slider -->
                                                        <div class="product-gallery">
                                                            <div class="quickview-slider-active">
                                                                <div class="single-slider">
                                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                                </div>
                                                                <div class="single-slider">
                                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                                </div>
                                                                <div class="single-slider">
                                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                                </div>
                                                                <div class="single-slider">
                                                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- End Product slider -->
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="quickview-content">
                                                        <h2>Flared Shift Dress</h2>
                                                        <div class="quickview-ratting-review">
                                                            <div class="quickview-ratting-wrap">
                                                                <div class="quickview-ratting">
                                                                    <i class="yellow fa fa-star"></i>
                                                                    <i class="yellow fa fa-star"></i>
                                                                    <i class="yellow fa fa-star"></i>
                                                                    <i class="yellow fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <a href="#"> (1 customer review)</a>
                                                            </div>
                                                            <div class="quickview-stock">
                                                                <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                                            </div>
                                                        </div>
                                                        <h3>$29.00</h3>
                                                        <div class="quickview-peragraph">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                                        </div>
                                                        <div class="size">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">Size</h5>
                                                                    <select>
                                                                        <option selected="selected">s</option>
                                                                        <option>m</option>
                                                                        <option>l</option>
                                                                        <option>xl</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <h5 class="title">Color</h5>
                                                                    <select>
                                                                        <option selected="selected">orange</option>
                                                                        <option>purple</option>
                                                                        <option>black</option>
                                                                        <option>pink</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="quantity">
                                                            <!-- Input Order -->
                                                            <div class="input-group">
                                                                <div class="button minus">
                                                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                                        <i class="ti-minus"></i>
                                                                    </button>
                                                                </div>
                                                                <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                                <div class="button plus">
                                                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                                        <i class="ti-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--/ End Input Order -->
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" class="btn">Add to cart</a>
                                                            <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                                            <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                                        </div>
                                                        <div class="default-social">
                                                            <h4 class="share-now">Share:</h4>
                                                            <ul>
                                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                                <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- Modal end -->
                        
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
                                                    <a href="{{ url('home') }}"><img src="{{ asset('public/images/logo2.png') }}" alt="#"></a>
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
                                                    <img src="images/payments.png" alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>                        
                    @endguest
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