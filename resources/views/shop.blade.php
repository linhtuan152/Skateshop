@extends('welcome')
@section('content')
<!-- Main Wrapper Start -->

<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Shop</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="current"><span>Shop</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div  class="main-content-wrapper">
    <div class="shop-page-wrapper ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 order-lg-1">
                    <aside class="shop-sidebar">
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Category</h3>
                            <ul class="widget-list category-list">
                                @foreach($category as $value)
                                <li>
                                    <a href='{{route("$value->name_cat")}}'>
                                        <span class="category-title">{{$value->name_cat}}</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Price</h3>
                            <ul class="widget-list price-list">
                                <li>
                                    <a href="shop.html">
                                        <span>Low - Medium</span>
                                        <strong class="font-weight-medium">$10.00 - $45.00</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span>Medium - High</span>
                                        <strong class="font-weight-medium">$45.00 - $60.00</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="shop.html">
                                        <span>High - Avobe</span>
                                        <strong class="font-weight-medium">$60.00 - $200</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget mb--40">
                            <h3 class="widget-title mb--25">Brand</h3>
                            <ul class="widget-list brand-list">
                                @foreach($brand as $value)
                                <li>
                                    <a href="shop.html">
                                        <span>{{$value}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-9 col-lg-8 order-lg-2 mb-md--50">
                    <div class="shop-toolbar mb--50">
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-sm--50 mb-xs--10">
                                <div class="shop-toolbar__left">
                                    <div class="product-ordering">
                                        <select class="product-ordering__select nice-select">
                                            <option value="0">Default Sorting</option>
                                            <option value="1">Relevance</option>
                                            <option value="2">Name, A to Z</option>
                                            <option value="3">Name, Z to A</option>
                                            <option value="4">Price, low to high</option>
                                            <option value="5">Price, high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-products">
                        <div class="row">
                            @if ($url == $urlS)
                            @foreach($product as $value)
                            <div class="col-xl-4 col-sm-6 mb--50">
                                <div class="zakas-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="{{route('product-detail')}}">
                                                <img src="{{$value->img}}" alt="Products">
                                            </a>
                                            <div class="zakas-product-action">
                                                <div class="product-action d-flex">
                                                    <a href="{{route('wishlist')}}" class="action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="product-badge">New</span>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--15">
                                                <a href="{{route('product-detail')}}">{{$value->name_pro}}</a>
                                            </h3>
                                            <div class="product-price-wrapper mb--30">
                                                <span class="money">{{$value->price_pro}} VND</span>

                                            </div>
                                            <a href="{{route('add-cart',[$value->id_pro])}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @else
                            @yield('content-shop')

                            @endif

                        </div>
                        <nav class="pagination-wrap">
                            <ul class="pagination">
                                <li><a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><span class="current page-number">1</span></li>
                                <li><a href="#" class="page-number">2</a></li>
                                <li><a href="#" class="page-number">3</a></li>
                                <li><a href="#" class="next page-number"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->

    <!-- Footer Start-->
<!-- Main Wrapper End -->

@stop