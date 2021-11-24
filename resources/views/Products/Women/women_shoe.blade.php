@extends('Products.products_master')

@section('content')
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
                                        @if(Auth::user())
                                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                        @else
                                            <li class="active"><a href="{{ url('/') }}">Home</a></li>   
                                        @endif
                                        <li class="active"><a href="{{ route('Women_Products') }}">Women</a></li>
                                        <li><a>Shoe</a></li>                                 
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
<!-- Start Product Area -->
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Women Shoes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">                 
                    <div class="row">
                        @foreach($shoe as $row)
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
                                            <a title="Wishlist" href="{{ route('add_wishlist',[$row->id]) }}">
                                            <i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="{{ route('add_cart',[$row->id]) }}">Add to cart</a>
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
                                                        <a href="{{ route('add_cart',[$row->id]) }}" class="btn">Add to cart</a>
                                                        <a href="{{ route('add_wishlist',[$row->id]) }}" class="btn min">
                                                        <i class="ti-heart"></i></a>                                
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
        </div>
    </div>
</div>
<!-- End Product Area -->
@endsection