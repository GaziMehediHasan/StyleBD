@extends('master')

@section('content')
<!-- Header Inner -->
<div class="header-inner">
    <div class="container">
        <div class="cat-nav-head">
            <div class="row">
                <div class="col-lg-3">
                    <div class="all-category">
                        <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                        <ul class="main-category">
                            <li><a href="{{ route('Man_Products') }}">Man <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="sub-category">
                                    <li><a href="{{ route('Man_Shirt') }}">Shirt</a></li>
                                    <li><a href="{{ route('Man_Pant') }}">Pant</a></li>
                                    <li><a href="{{ route('Man_TShirt') }}">T-Shirt</a></li>
                                    <li><a href="{{ route('Man_PoloShirt') }}">Polo Shirt</a></li>
                                    <li><a href="{{ route('Man_Kurta') }}">Kurta</a></li>
                                    <li><a href="{{ route('Man_Shoes') }}">Shoe</a></li>
                                    <li><a href="{{ route('Man_Sunglass') }}">Sunglass</a></li>
                                    <li><a href="{{ route('Man_Bag') }}">Bag</a></li>
                                    <li><a href="{{ route('Man_Watch') }}">Watch</a></li>
                                    <li><a href="{{ route('Man_Undergarment') }}">UnderGarment</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('Women_Products') }}">Women <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="sub-category">
                                    <li><a href="{{ route('Women_Saree') }}">Saree</a></li>
                                    <li><a href="{{ route('Women_SalwarKameez') }}">Salwar Kameez</a></li>                                   
                                    <li><a href="{{ route('Women_Kurti') }}">Kurti</a></li>
                                    <li><a href="{{ route('Women_Top') }}">Top</a></li>
                                    <li><a href="{{ route('Women_Lehenga') }}">Lehenga</a></li>
                                    <li><a href="{{ route('Women_Jeans') }}">Jeans</a></li>
                                    <li><a href="{{ route('Women_TShirt') }}">T-Shirt</a></li>
                                    <li><a href="{{ route('Women_Shoes') }}">Shoe</a></li>
                                    <li><a href="{{ route('Women_Sunglass') }}">Sunglass</a></li>
                                    <li><a href="{{ route('Women_Bag') }}">Bag</a></li>
                                    <li><a href="{{ route('Women_Watch') }}">Watch</a></li>
                                    <li><a href="{{ route('Women_Jewellery') }}">Jewellery</a></li>
                                    <li><a href="{{ route('Women_Undergarment') }}">UnderGarment</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('Kid_Products') }}">Kids <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="sub-category">
                                    <li><a href="{{ route('Kid_Shirt') }}">Shirt</a></li>
                                    <li><a href="{{ route('Kid_Pant') }}">Pant</a></li>
                                    <li><a href="{{ route('Kid_TShirt') }}">T-Shirt</a></li>
                                    <li><a href="{{ route('Kid_PoloShirt') }}">Polo Shirt</a></li>
                                    <li><a href="{{ route('Kid_Kurta') }}">Kurta</a></li>
                                    <li><a href="{{ route('Kid_SalwarKameez') }}">Salwar Kameez</a></li>                                   
                                    <li><a href="{{ route('Kid_Kurti') }}">Kurti</a></li>
                                    <li><a href="{{ route('Kid_Top') }}">Top</a></li>
                                    <li><a href="{{ route('Kid_Lehenga') }}">Lehenga</a></li>
                                    <li><a href="{{ route('Kid_Jeans') }}">Jeans</a></li>
                                    <li><a href="{{ route('Kid_Shoes') }}">Shoe</a></li>
                                    <li><a href="{{ route('Kid_Sunglass') }}">Sunglass</a></li>
                                    <li><a href="{{ route('Kid_Bag') }}">Bag</a></li>
                                    <li><a href="{{ route('Kid_Watch') }}">Watch</a></li>
                                    <li><a href="{{ route('Kid_Undergarment') }}">UnderGarment</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="menu-area">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">   
                                <div class="nav-inner"> 
                                    <ul class="nav main-menu menu navbar-nav">
                                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ route('Products') }}">Product</a></li>                                                
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
<!--/ End Header -->

<!-- Slider Area -->
<div class="containers" style="width: 100%; padding: 0">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!--dots-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('public/images/1.jpeg') }}" alt="0" style="width: 1900px; height: 650px;">
                <div class="carousel-caption slideShow-caption" style="margin-bottom: 60px;">
                    <h2><u><i>StyleBD</i></u></h2>
                    <hr>
                    <p>Your Desire, Our Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/images/2.jpeg') }}" alt="1" style="width: 1900px; height: 650px;">
                <div class="carousel-caption slideShow-caption" style="margin-bottom: 60px">
                    <h2><u><i>StyleBD</i></u></h2>
                    <hr>
                    <p>Your Desire, Our Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/images/3.jpeg') }}" alt="2" style="width: 1900px; height: 650px;">
                <div class="carousel-caption slideShow-caption" style="margin-bottom: 60px">
                    <h2><u><i>StyleBD</i></u></h2>
                    <hr>
                    <p>Your Desire, Our Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/images/4.jpeg') }}" alt="3" style="width: 1900px; height: 650px;">
                <div class="carousel-caption slideShow-caption" style="margin-bottom: 60px;">
                    <h2><u><i>StyleBD</i></u></h2>
                    <hr>
                    <p>Your Desire, Our Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/images/5.jpeg') }}" alt="4" style="width: 1900px; height: 650px;">
                <div class="carousel-caption slideShow-caption" style="margin-bottom: 60px">
                    <h2><u><i>StyleBD</i></u></h2>
                    <hr>
                    <p>Your Desire, Our Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/images/6.jpeg') }}" alt="5" style="width: 1900px; height: 650px;">
                <div class="carousel-caption slideShow-caption" style="margin-bottom: 60px">
                    <h2><u><i>StyleBD</i></u></h2>
                    <hr>
                    <p>Your Desire, Our Collection</p>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('public/images/7.jpeg') }}" alt="6" style="width: 1900px; height: 650px;">
                <div class="carousel-caption slideShow-caption" style="margin-bottom: 60px;">
                    <h2><u><i>StyleBD</i></u></h2>
                    <hr>
                    <p>Your Desire, Our Collection</p>
                </div>
            </div>
        </div>
        <!--prev & nex-->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
    </div>
</div>
<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                    <img src="{{ asset('public/images/mens_col.jpg') }}" alt="#">
                    <div class="content">
                        <p>Man's Collectons</p>
                        <h3>Your Desired <br> Collections Here</h3>
                        <a href="{{ route('Man_Products') }}">Discover Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                    <img src="{{ asset('public/images/womens_col.jpg') }}" alt="#">
                    <div class="content">
                        <p>Women's Collectons</p>
                        <h3>Your Desired <br> Collections Here</h3>
                        <a href="{{ route('Women_Products') }}">Discover Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            <!-- Single Banner  -->
            <div class="col-lg-4 col-12">
                <div class="single-banner tab-height">
                    <img src="{{ asset('public/images/kids_col.jpg') }}" alt="#">
                    <div class="content">
                        <p>Kid's Collectons</p>
                        <h3>Your Desired <br> Collections Here</h3>
                        <a href="{{ route('Kid_Products') }}">Discover Now</a>
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
        </div>
    </div>
</section>
<!-- End Small Banner -->

<!-- Start Product Area -->
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav navs-tabs" id="myTab" role="tablist">
                            <li class="navs-item"><a class="navs-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
                            <li class="navs-item"><a class="navs-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
                            <li class="navs-item"><a class="navs-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>                  
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                @foreach($men as $row)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                  <img class="default-img" src="{{ url($row->Photo) }}" alt="#">
                                                  <img class="hover-img" src="{{ url($row->Photo) }}" alt="#">
                                                  @if ($row->Discount > 0)
                                                    <span class="price-dec">{{ $row->Discount }}% Off</span>
                                                  @endif
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal{{$row->id}}" title="Quick View">
                                                        <i class=" ti-eye"></i><span>Quick View</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="{{ route('login') }}">Add to cart</a>
                                                    </div>                                                   
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">{{ $row->Name }}</a></h3>
                                                <div class="product-price">
                                                    @if ($row->Discount > 0)
                                                       <span class="old">{{ $row->Price }}</span>
                                                    @endif
                                                    <span><?= $row->Price-$row->Price*$row->Discount/100 ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog">
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
                                                                    <div class="quickview-slider">
                                                                        <div class="single-slider">
                                                                            <img src="{{ url($row->Photo) }}" alt="#" style="height: 510px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!-- End Product slider -->
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="quickview-content">
                                                                <h2>{{ $row->Name }}</h2>
                                                                <div class="quickview-ratting-review">
                                                                    <div class="quickview-stock">
                                                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                                                    </div>
                                                                </div>
                                                                <h3><?= $row->Price-$row->Price*$row->Discount/100 ?></h3>
                                                                
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
                                                                </div>                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->

                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="women" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                @foreach($women as $row)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                  <img class="default-img" src="{{ url($row->Photo) }}" alt="#">
                                                  <img class="hover-img" src="{{ url($row->Photo) }}" alt="#">
                                                  @if ($row->Discount > 0)
                                                    <span class="price-dec">{{ $row->Discount }}% Off</span>
                                                  @endif
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal{{ $row->id }}" title="Quick View">
                                                        <i class=" ti-eye"></i><span>Quick View</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="{{ route('login') }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">{{ $row->Name }}</a></h3>
                                                <div class="product-price">
                                                    @if ($row->Discount > 0)
                                                       <span class="old">{{ $row->Price }}</span>
                                                    @endif
                                                    <span><?= $row->Price-$row->Price*$row->Discount/100 ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog">
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
                                                                    <div class="quickview-slider">
                                                                        <div class="single-slider">
                                                                            <img src="{{ url($row->Photo) }}" alt="#" style="height: 510px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!-- End Product slider -->
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="quickview-content">
                                                                <h2>{{ $row->Name }}</h2>
                                                                <div class="quickview-ratting-review">
                                                                    <div class="quickview-stock">
                                                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                                                    </div>
                                                                </div>
                                                                <h3><?= $row->Price-$row->Price*$row->Discount/100 ?></h3>
                                                                
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
                                                                </div>                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->

                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="kids" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                @foreach($kids as $row)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                  <img class="default-img" src="{{ url($row->Photo) }}" alt="#">
                                                  <img class="hover-img" src="{{ url($row->Photo) }}" alt="#">
                                                  @if ($row->Discount > 0)
                                                    <span class="price-dec">{{ $row->Discount }}% Off</span>
                                                  @endif
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal{{ $row->id }}" title="Quick View" >
                                                        <i class=" ti-eye"></i><span>Quick View</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="{{ route('login') }}">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">{{ $row->Name }}</a></h3>
                                                <div class="product-price">
                                                    @if ($row->Discount > 0)
                                                       <span class="old">{{ $row->Price }}</span>
                                                    @endif
                                                    <span><?= $row->Price-$row->Price*$row->Discount/100 ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog">
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
                                                                    <div class="quickview-slider">
                                                                        <div class="single-slider">
                                                                            <img src="{{ url($row->Photo) }}" alt="#" style="height: 510px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!-- End Product slider -->
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="quickview-content">
                                                                <h2>{{ $row->Name }}</h2>
                                                                <div class="quickview-ratting-review">
                                                                    <div class="quickview-stock">
                                                                        <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                                                    </div>
                                                                </div>
                                                                <h3><?= $row->Price-$row->Price*$row->Discount/100 ?></h3>
                                                                
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
                                                                </div>                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal end -->
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Hot Item</h2>
                </div>
            </div>
        </div>
        <div id="table_data">
            @include('pagination_data')
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

<!-- Start Cowndown Area -->
<section id="Deal" class="cown-down">
    <div class="section-title">
        <h2>Daily Deal</h2>
    </div>
    <div class="section-inner ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 padding-right">
                    <div class="image">
                        <img src="{{ url($deal->Photo) }}" alt="#">
                    </div>  
                </div>  
                <div class="col-lg-6 col-12 padding-left">
                    <div class="content">
                        <div class="heading-block">
                            <p class="small-title">Deal of the day</p>
                            <h2 class="price-dec">{{ $deal->Discount }}% Off</h2>
                            <h3 class="title">{{ $deal->Name }}</h3>
                            <h1 class="price"><?= $deal->Price-$deal->Price*$deal->Discount/100 ?><s>{{ $deal->Price }}</s></h1>
                            <div class="coming-time">
                                <div class="clearfix" data-countdown=" {!! $EndDate !!} "></div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Cowndown Area -->
<!-- Start Shop Services Area -->
<div style="padding: 50px 15px 0 15px;">
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Shop Services Area -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->
@endsection

<!-- script -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script >
    $(document).ready(function() {

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url:  "{{route('pagination')}}" + "?page=" + page,
                success: function(item) {
                    $('#table_data').html(item);
                }
            });
        }
    });
</script>
<!-- end script -->
