@extends('welcome')
@section('content')
<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Shop</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="current"><span>Product Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->
@foreach($product as $key=>$value)
<div class="main-content-wrapper">
    <div class="page-content-inner ptb--80">
        <div class="container">
            <div class="row no-gutters mb--80">
                <div class="col-lg-7 product-main-image">
                    <div class="product-image">
                        <div class="product-gallery vertical-slide-nav">
                            <div class="product-gallery__large-image mb-md--30">
                                <div class="product-gallery__wrapper">
                                    <figure class="product-gallery__image zoom">
                                        <img src="{{$value->img}}" alt="Product">
                                        <div class="product-gallery__actions">
                                            <button class="action-btn btn-zoom-popup"><i class="fa fa-eye"></i></button>
                                        </div>
                                    </figure>

                                </div>
                            </div>
                            <div class="product-gallery__nav-image">
                                <figure class="product-gallery__nav-image--single">
                                    <img src="{{$value->img}}" alt="Products">
                                </figure>   
                            </div>
                        </div>
                        <span class="product-badge sale">New</span>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                    <div class="product-summary pl-lg--30 pl-md--0">
                        <h3 class="product-title mb--20">{{$value->name_pro}}</h3>
                        <p class="product-short-description mb--20">{{$value->description}}</p>
                        <div class="product-price-wrapper mb--25">
                            <!-- <span class="money">$200.00</span> -->
                            <!-- <span class="price-separator">-</span> -->
                            <span class="money">{{$value->price_pro}} VND</span>
                        </div>
                        <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                            <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                <label class="quantity-label" for="qty">Quantity:</label>
                                <!-- <div class="quantity"> -->
                                    <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                    <!-- </div> -->
                                </div>
                                <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='{{route('add-cart',[$value->id_pro])}}'">
                                    Add To Cart
                                </button>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb--80">
                    <div class="col-12">
                        <div class="product-data-tab tab-style-3">
                            <div class="nav nav-tabs product-data-tab__head mb--35 mb-sm--25" id="product-tab" role="tablist">
                                <a class="product-data-tab__link nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true"> 
                                    <span>Description</span>
                                </a>
                                <a class="product-data-tab__link nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-selected="true">
                                    <span>Additional Information</span>
                                </a>
                            </div>
                            <div class="tab-content product-data-tab__content" id="product-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consec do eiusmod tincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. iatis unde omnis iste natus error sit voluptatem accusantium </p>

                                        <p>Lorem ipsum dolor sit amet, consec do eiusmod tincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

                                        <h5 class="product-description__heading">Characteristics :</h5>
                                        <ul>
                                            <li><i class="ti-arrow-right"></i><span>Rsit amet, consectetur adipisicing elit, sed do eiusmod tempor inc.</span></li>
                                            <li><i class="ti-arrow-right"></i><span>sunt in culpa qui officia deserunt mollit anim id est laborum. </span></li>
                                            <li><i class="ti-arrow-right"></i><span>Lorem ipsum dolor sit amet, consec do eiusmod tincididu. </span></li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                    <div class="table-content table-responsive">
                                        <table class="table shop_attributes">
                                            <tbody>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td>57 kg</td>
                                                </tr>
                                                <tr>
                                                    <th>Dimensions</th>
                                                    <td>160 × 152 × 110 cm</td>
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
</div>
</div>
</div>
</div>
</div>
@endforeach
@stop        