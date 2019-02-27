@extends('welcome')
@section('content')
  <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                            <h1 class="page-title">Wishlist</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="current"><span>Wishlist</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->
<div class="main-content-wrapper">
            <div class="page-content-inner ptb--80">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-content table-responsive">
                                <table class="table table-style-2 wishlist-table text-center">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th class="text-left">Product</th>
                                            <th>Stock Status</th>
                                            <th>Price</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-remove text-left"><a href="#"><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="public/assets/img/products/prod-10-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">Pinstripe slim-fit suit blazer</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                In Stock
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove text-left"><a href="#"><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="public/assets/img/products/prod-11-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">Warm Shaker Solid Wood End Table</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                In Stock
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove text-left"><a href="#"><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="public/assets/img/products/prod-12-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">Atlin Designs Mid Century Club Chair</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                In Stock
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-remove text-left"><a href="#"><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="public/assets/img/products/prod-13-70x88.jpg" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="product-details.html">Contemporary 5-Light Large Chandelier</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                                In Stock
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="{{route('cart')}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop        