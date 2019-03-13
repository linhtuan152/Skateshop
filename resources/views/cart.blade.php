@extends('welcome')
@section('content')
<div class="main-content-wrapper">
    <div class="page-content-inner ptb--80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-md--50">
                    <form class="cart-form" method="POST" action="{{action('CartController@updateCart')}}">
                        @csrf
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>&nbsp;</th>
                                                <th class="text-left">Product</th>
                                                <th>price</th>
                                                <th>quantity</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($cart))
                                            @foreach($cart as $key=>$value)
                                            <tr>

                                                <td class="product-remove text-left"><a href="{{route('del-cart',[$key])}}"><i class="flaticon flaticon-cross"></i></a></td>
                                                <td class="product-thumbnail text-left">
                                                    <img src="{{$value['img']}}" alt="Product Thumnail">
                                                </td>
                                                
                                                <td class="product-name text-left wide-column">
                                                    <h3>
                                                        <a href="product-details.html">{{$value['name_pro']}}</a>
                                                    </h3>
                                                </td>
                                                <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">{{$value['price_pro']}}</span>
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    <!-- <div class="quantity"> -->
                                                        <input type="number" class="quantity-input" name="{{$key}}" id="qty" value="{{$value['quantity']}}" min="1" >
                                                        <!-- onchange="updateCart({{$key}})" -->
                                                    <!-- </div> -->
                                                </td>
                                                <td class="product-total-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money">{{$value['price_pro']*$value['quantity']}}</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>  
                            </div>
                        </div>
                        <div class="row no-gutters border-top pt--20 mt--20">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6 text-sm-right">
                                <button type="submit" class="cart-form__btn">Clear Cart</button>
                                <button type="submit" class="cart-form__btn">Update Cart</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="cart-collaterals">
                        <div class="cart-totals">
                            <h5 class="font-size-14 font-bold mb--15">Cart totals</h5>
                            <div class="cart-calculator">
                                <div class="cart-calculator__item">
                                    <div class="cart-calculator__item--head">
                                        <span>Subtotal</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span>{{$total}} VND</span>
                                    </div>
                                </div>
                                <div class="cart-calculator__item">
                                    <div class="cart-calculator__item--head">
                                        <span>Shipping</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span>30000 VND</span>
                                    </div>
                                </div>
                                <div class="cart-calculator__item order-total">
                                    <div class="cart-calculator__item--head">
                                        <span>Total</span>
                                    </div>
                                    <div class="cart-calculator__item--value">
                                        <span class="product-price-wrapper">
                                            <span class="money">{{$total+30000}} VND</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('checkout')}}" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">
                            Proceed To Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function updateCart(id){
        number = $("#quantity_"+id).val();
        $.post('CartController@updateCart', {'id':id,'number':number}, function(data) {
            $("#cart").text(data);
            $("#listCat").load("index.php?view=cart #tablecart"); 
        });
    }
</script>
@stop   