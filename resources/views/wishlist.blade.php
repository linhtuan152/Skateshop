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
                                        @if(isset($wish))
                                        @foreach($wish as $key=>$value)
                                        <tr>
                                            <td class="product-remove text-left"><a href="{{route('del-wish',[$key])}}"><i class="flaticon flaticon-cross"></i></a></td>
                                            <td class="product-thumbnail text-left">
                                                <img src="{{$value['img']}}" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="{{route('product-detail',[$key])}}">{{$value['name_pro']}}</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock">
                                               {{$value['status_pro'] == 1 ? "In Stock" : "Out Of Stock"}} 
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">{{$value['price_pro']}} VND</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="{{route('add-cart',[$key])}}" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">Add to cart</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop        