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
                                <div class="col-md-7">
                                    <div class="shop-toolbar__right d-flex justify-content-md-end justify-content-start flex-sm-row flex-column">
                                        <p class="product-pages">Showing Result  08 Among  72</p>
                                        <div class="product-view-mode ml--50 ml-xs--0">
                                            <a class="active" href="#" data-target="grid">
                                                <img src="public/assets/img/icons/grid.png" alt="Grid">
                                            </a>
                                            <a href="#" data-target="list">
                                                <img src="public/assets/img/icons/list.png" alt="Grid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-products">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-13.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
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
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-13.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-14.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('wishlist')}}" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-14.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-15.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
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
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-15.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-2.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
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
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-3.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-3.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('wishlist')}}" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-17.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-25.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('wishlist')}}" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">-15%</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="old-price">
                                                        <span class="money">$300</span>
                                                    </span>
                                                    <span class="money-separator">-</span>
                                                    <span class="new-price">
                                                        <span class="money">$150</span>
                                                    </span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-25.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-26.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('wishlist')}}" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-26.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-27.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('wishlist')}}" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-27.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-28.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
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
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-28.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-29.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="{{route('wishlist')}}" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-29.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-30.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
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
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-30.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-19.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
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
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="zakas-product-list">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="{{route('product-detail')}}">
                                                    <img src="public/assets/img/products/prod-19.jpg" alt="Products">
                                                </a>
                                                <div class="product-thumbnail-action">
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="flaticon flaticon-eye"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--25">
                                                    <a href="{{route('product-detail')}}">Long Cartigen</a>
                                                </h3>
                                                <div class="zakas-product-action-list mb--20">
                                                    <div class="product-size mb--25">
                                                        <div class="product-size-swatch">
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                XL
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                L
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                M
                                                            </span>
                                                            <span class="product-size-swatch-btn variation-btn">
                                                                S
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-color">
                                                        <div class="product-color-swatch">
                                                            <span class="product-color-swatch-btn variation-btn abbey">
                                                                Abbey
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn blue">
                                                                Blue
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn copper">
                                                                Copper
                                                            </span>
                                                            <span class="product-color-swatch-btn variation-btn old-rose">
                                                                Old Rose
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price-wrapper mb--15 mb-sm--10">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <p class="product-short-description mb--20">
                                                    Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra
                                                </p>  
                                                <div class="zakas-product-action-list d-flex">
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                                    <a href="{{route('wishlist')}}" class="ml--20 action-btn">
                                                        <i class="flaticon flaticon-like"></i>
                                                    </a>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="col-xl-3 col-lg-4 order-lg-1">
                        <aside class="shop-sidebar">
                            <div class="shop-widget mb--40">
                                <h3 class="widget-title mb--25">Category</h3>
                                <ul class="widget-list category-list">
                                    <li>
                                        <a href="shop.html">
                                            <span class="category-title">Winter Collection</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span class="category-title">Women’s Clothes</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span class="category-title">Men’s Clothes</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span class="category-title">Kid’s Clothes</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span class="category-title">Uncategorized</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span class="category-title">Accessories</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span class="category-title">New Arrival</span>
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-widget mb--40">
                                <h3 class="widget-title mb--30">Color</h3>
                                <div class="widget-color">
                                    <a href="shop.html" class="red">Red</a>
                                    <a href="shop.html" class="pink">Pink</a>
                                    <a href="shop.html" class="black">black</a>
                                    <a href="shop.html" class="brown">brown</a>
                                    <a href="shop.html" class="blue">blue</a>
                                    <a href="shop.html" class="cholate">cholate</a>
                                    <a href="shop.html" class="copper">copper</a>
                                    <a href="shop.html" class="gray">grey</a>
                                </div>
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
                                    <li>
                                        <a href="shop.html">
                                            <span>Walmart</span>
                                            <strong class="color--red font-weight-medium">10</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span>Yellow</span>
                                            <strong class="color--red font-weight-medium">50</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span>H &amp; M</span>
                                            <strong class="color--red font-weight-medium">46</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            <span>Black &amp; White</span>
                                            <strong class="color--red font-weight-medium">46</strong>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-widget">
                                <h3 class="widget-title mb--25">Tag</h3>
                                <div class="tagcloud">
                                    <a href="shop.html">Cloth</a>
                                    <a href="shop.html">Blazer</a>
                                    <a href="shop.html">Jacket</a>
                                    <a href="shop.html">Polo Shirt</a>
                                    <a href="shop.html">T-Shirt</a>
                                    <a href="shop.html">Shoes</a>
                                    <a href="shop.html">Pant</a>
                                    <a href="shop.html">Party Dress</a>
                                    <a href="shop.html">Coktail Dress</a>
                                    <a href="shop.html">Sweater</a>
                                    <a href="shop.html">Jeans</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->

    <!-- Footer Start-->
    <footer class="footer">
        <div class="footer-top bg-color ptb--50" data-bg-color="#f6f6f6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 text-center">
                        <div class="footer-widget mb--50">
                            <div class="textwidget">
                                <img src="public/assets/img/logo/logo.png" alt="Logo">
                            </div>
                        </div>
                        <div class="footer-widget mb--50 pb--1">
                            <ul class="footer-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                            <!-- Social Icons Start Here -->
                            <ul class="social">
                                <li class="social__item">
                                    <a href="https://plus.google.com/" class="social__link google-plus">
                                        <span>Google Plus</span>
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://facebook.com/" class="social__link facebook">
                                        <span>facebook</span>
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://pinterest.com/" class="social__link pinterest">
                                        <span>pinterest</span>
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="youtube.com" class="social__link twitter">
                                        <span>twitter</span>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-color ptb--25" data-bg-color="#e7e7e7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6 text-sm-left text-center mb-xs--10">
                        <p class="copyright-text"><a href="index.html">Zakas</a> &copy; 2019 all rights reserved</p>
                    </div>
                    <div class="col-sm-6 text-sm-right text-center">
                        <figure>
                            <img src="public/assets/img/others/payment.png" alt="payment">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End-->

    <!-- Searchform Popup Start -->
    <div class="searchform__popup" id="searchForm">
        <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
        <div class="searchform__body">
            <p>Start typing and press Enter to search</p>
            <form class="searchform">
                <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
                <button type="submit" class="searchform__submit"><i class="flaticon flaticon-magnifying-glass-icon"></i></button>
            </form>
        </div>
    </div>
    <!-- Searchform Popup End -->

    <!-- Mini Cart Start -->
    <aside class="mini-cart" id="miniCart">
        <div class="mini-cart-wrapper">
            <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
            <div class="mini-cart-inner">
                <h3 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h3>
                <div class="mini-cart__content">
                    <ul class="mini-cart__list">
                        <li class="mini-cart__product">
                            <a href="#" class="remove-from-cart remove">
                                <i class="flaticon flaticon-cross"></i>
                            </a>
                            <div class="mini-cart__product__image">
                                <img src="public/assets/img/products/prod-1-100x100.jpg" alt="products">
                            </div>
                            <div class="mini-cart__product__content">
                                <a class="mini-cart__product__title" href="{{route('product-detail')}}">Chain print bermuda shorts  </a>
                                <span class="mini-cart__product__quantity">1 x $49.00</span>
                            </div>
                        </li>
                        <li class="mini-cart__product">
                            <a href="#" class="remove-from-cart remove">
                                <i class="flaticon flaticon-cross"></i>
                            </a>
                            <div class="mini-cart__product__image">
                                <img src="public/assets/img/products/prod-2-100x100.jpg" alt="products">
                            </div>
                            <div class="mini-cart__product__content">
                                <a class="mini-cart__product__title" href="{{route('product-detail')}}">Waxed-effect pleated skirt</a>
                                <span class="mini-cart__product__quantity">1 x $49.00</span>
                            </div>
                        </li>
                        <li class="mini-cart__product">
                            <a href="#" class="remove-from-cart remove">
                                <i class="flaticon flaticon-cross"></i>
                            </a>
                            <div class="mini-cart__product__image">
                                <img src="public/assets/img/products/prod-5-100x100.jpg" alt="products">
                            </div>
                            <div class="mini-cart__product__content">
                                <a class="mini-cart__product__title" href="{{route('product-detail')}}">Waxed-effect pleated skirt</a>
                                <span class="mini-cart__product__quantity">1 x $49.00</span>
                            </div>
                        </li>
                    </ul>
                    <div class="mini-cart__total">
                        <span>Subtotal</span>
                        <span class="ammount">$98.00</span>
                    </div>
                    <div class="mini-cart__buttons">
                        <a href="{{route('cart')}}" class="btn btn-fullwidth btn-bg-sand mb--20">View Cart</a>
                        <a href="checkout.html" class="btn btn-fullwidth btn-bg-sand">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Mini Cart End -->

    <!-- Global Overlay Start -->
    <div class="zakas-global-overlay"></div>
    <!-- Global Overlay End -->

    <!-- Qicuk View Modal Start -->
    <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="flaticon flaticon-cross"></i></span>
          </button>
          <div class="row">
            <div class="col-lg-6">
                <div class="zakas-element-carousel nav-vertical-center"
                data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "arrows": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
            }'
            >
            <div class="product-image">
                <div class="product-image--holder">
                    <a href="{{route('product-detail')}}">
                        <img src="public/assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                    </a>
                </div>
                <span class="product-badge sale">sale</span>
            </div>
            <div class="product-image">
                <div class="product-image--holder">
                    <a href="{{route('product-detail')}}">
                        <img src="public/assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                    </a>
                </div>
                <span class="product-badge sale">sale</span>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="modal-box product-summary">
            <div class="product-navigation text-right mb--20">
                <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
            </div>
            <div class="product-rating d-flex mb--20">
                <div class="star-rating star-three">
                    <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                </div>
            </div>
            <h3 class="product-title mb--20">Black Blazer</h3>
            <p class="product-short-description mb--25">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
            <div class="product-price-wrapper mb--25">
                <span class="money">$200.00</span>
                <span class="price-separator">-</span>
                <span class="money">$400.00</span>
            </div>
            <form action="#" class="variation-form mb--30">
                <div class="product-color-variations d-flex align-items-center mb--20">
                    <p class="variation-label">Color:</p>
                    <div class="product-color-variation variation-wrapper">
                        <div class="variation">
                            <a class="product-color-variation-btn red selected" data-toggle="tooltip" data-placement="top" title="Red">
                                <span class="product-color-variation-label">Red</span>
                            </a>
                        </div>
                        <div class="variation">
                            <a class="product-color-variation-btn black" data-toggle="tooltip" data-placement="top" title="Black">
                                <span class="product-color-variation-label">Black</span>
                            </a>
                        </div>
                        <div class="variation">
                            <a class="product-color-variation-btn pink" data-toggle="tooltip" data-placement="top" title="Pink">
                                <span class="product-color-variation-label">Pink</span>
                            </a>
                        </div>
                        <div class="variation">
                            <a class="product-color-variation-btn blue" data-toggle="tooltip" data-placement="top" title="Blue">
                                <span class="product-color-variation-label">Blue</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-size-variations d-flex align-items-center mb--15">
                    <p class="variation-label">Size:</p>   
                    <div class="product-size-variation variation-wrapper">
                        <div class="variation">
                            <a class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                                <span class="product-size-variation-label">S</span>
                            </a>
                        </div>
                        <div class="variation">
                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                                <span class="product-size-variation-label">M</span>
                            </a>
                        </div>
                        <div class="variation">
                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                                <span class="product-size-variation-label">L</span>
                            </a>
                        </div>
                        <div class="variation">
                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                                <span class="product-size-variation-label">XL</span>
                            </a>
                        </div>
                    </div>                                 
                </div>
                <a href="#" class="reset_variations">Clear</a>
            </form>
            <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                    <label class="quantity-label" for="quick-qty">Quantity:</label>
                    <div class="quantity">
                        <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                    </div>
                </div>
                <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='{{route('cart')}}'">
                    Add To Cart
                </button>
            </div>  
            <div class="product-footer-meta">
                <p><span>Category:</span>
                    <a href="shop.html">Full Sweater</a>,
                    <a href="shop.html">SweatShirt</a>,
                    <a href="shop.html">Jacket</a>,
                    <a href="shop.html">Blazer</a>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- Qicuk View Modal End -->
</div>
<!-- Main Wrapper End -->

@stop