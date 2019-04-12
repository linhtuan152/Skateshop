@extends('shop')
@section('content-shop')

@foreach($truck as $value)
<div class="col-xl-4 col-sm-6 mb--50">
    <div class="zakas-product">
        <div class="product-inner">
            <figure class="product-image">
                <a href="{{route('product-detail',[$value->id_pro])}}">
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
                    <a href="{{route('product-detail',[$value->id_pro])}}">{{$value->name_pro}}</a>
                </h3>
                <div class="product-price-wrapper mb--30">
                    <span class="money">{{$value->price_pro}} VND</span>
                    <!-- <span class="money-separator"></span>
                    <span class="money">$200</span> -->
                </div>
                <a href="{{route('add-cart',[$value->id_pro])}}" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
            </div>
        </div>
    </div>
</div>
@endforeach
  <nav class="pagination-wrap container">
        <ul class="pagination">
            {{$truck->links('vendor.pagination.default')}}
     </ul>
 </nav>
@stop