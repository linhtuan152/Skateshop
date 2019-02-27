@extends('welcome')
@section('content')
        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                            <h1 class="page-title">Compare</h1>
                            <ul class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="current"><span>Compare</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->
<div class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--50 pt-md--40 pt-sm--20 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-12" id="main-content">
                            <div class="table-content table-responsive">
                                <div class="table-content table-responsive">
                                    <table class="table compare-table">
                                        <tbody>
                                            <tr>
                                                <th>Product Info</th>
                                                <td>
                                                    <div class="remove">
                                                        <a href="#">
                                                            <i class="flaticon flaticon-cross"></i>
                                                        </a>
                                                    </div>
                                                    <a href="product-details.html" class="d-block">
                                                        <div class="image-wrap">
                                                            <img src="public/assets/img/products/prod-10-70x88.jpg" alt="Product">
                                                        </div>
                                                        <h4 class="product-name">Warm Shaker Solid Wood End Table</h4>
                                                    </a>
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                                </td>
                                                <td>
                                                    <div class="remove">
                                                        <a href="#">
                                                            <i class="flaticon flaticon-cross"></i>
                                                        </a>
                                                    </div>
                                                    <a href="product-details.html" class="d-block">
                                                        <div class="image-wrap">
                                                            <img src="public/assets/img/products/prod-11-70x88.jpg" alt="Product">
                                                        </div>
                                                        <h4 class="product-name">Atlin Designs Mid Century Club Chair</h4>
                                                    </a>
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                                </td>
                                                <td>
                                                    <div class="remove">
                                                        <a href="#">
                                                            <i class="flaticon flaticon-cross"></i>
                                                        </a>
                                                    </div>
                                                    <a href="product-details.html" class="d-block">
                                                        <div class="image-wrap">
                                                            <img src="public/assets/img/products/prod-12-70x88.jpg" alt="Product">
                                                        </div>
                                                        <h4 class="product-name">Contemporary 5-Light Large Chandelier</h4>
                                                    </a>
                                                    <a href="{{route('cart')}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Price</th>
                                                <td>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$159.00</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$159.00</span>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="product-price-wrapper">
                                                        <span class="money">$159.00</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sku</th>
                                                <td>REF. LA-887</td>
                                                <td>REF. LA-887</td>
                                                <td>REF. LA-887</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td class="text-center">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas…    </td>
                                                <td class="text-center">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas…    </td>
                                                <td class="text-center">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas…    </td>
                                            </tr>
                                            <tr>
                                                <th>Availability</th>
                                                <td>In stock</td>
                                                <td>In stock</td>
                                                <td>In stock</td>
                                            </tr>
                                            <tr>
                                                <th>Weight</th>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <th>Dimensions</th>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop        