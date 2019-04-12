@extends('welcome')
@section('content')
<div class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--50 pt-md--40 pt-sm--20">
                        <div class="col-12">
                            <!-- User Action Start -->
                            <div class="user-actions user-actions__coupon">
                            
                            </div>
                            <!-- User Action End -->
                        </div>
                    </div> 
                    <div class="row pb--80 pb-md--60 pb-sm--40">
                        <!-- Checkout Area Start -->  
                        <div class="col-lg-6">
                            <div class="checkout-title mt--10">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="checkout-form">
                                <form method="POST" action="{{action('HomeController@checkout')}}" class="form form--checkout">
                                    @csrf
                                    <div class="form-row mb--20">
                                        <div class="form__group col-md-12">
                                            <label for="billing_lname" class="form__label form__label--2">Name  <span class="required">*</span></label>
                                            <input type="text" name="fullname" id="fullname" class="form__input form__input--2" value="{{$user['fullname']}}">
                                        </div>
                                    </div>
                                    <div class="form-row mb--20">
                                        <div class="form__group col-12">
                                            <label for="billing_state" class="form__label form__label--2">Address <span class="required">*</span></label>
                                            <input type="text" name="address" id="address" class="form__input form__input--2" value="{{$user['address']}}">
                                        </div>
                                    </div>
                                    <div class="form-row mb--20">
                                        <div class="form__group col-12">
                                            <label for="billing_phone" class="form__label form__label--2">Phone <span class="required">*</span></label>
                                            <input type="text" name="phone" id="phone" class="form__input form__input--2" value="{{$user['phone']}}">
                                        </div>
                                    </div>
                                    <div class="form-row mb--20">
                                        <div class="form__group col-12">
                                            <label for="billing_email" class="form__label form__label--2">Email Address  <span class="required">*</span></label>
                                            <input type="email" name="email" id="email" class="form__input form__input--2" value="{{$user['email']}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form__group col-12">
                                            <label for="orderNotes" class="form__label form__label--2">Order Notes</label>
                                            <input type="text" class="form__input form__input--2 form__input--textarea" id="delivery" name="delivery" placeholder="Notes about your order, e.g. special notes for delivery.">
                                        </div>
                                    </div>
                                    <div class="form-row mb--20"></div>
                                    
                          
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                            <div class="order-details">
                                <div class="checkout-title mt--10">
                                    <h2>Your Order</h2>
                                </div>
                                <div class="table-content table-responsive mb--30">
                                    <table class="table order-table order-table-2">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($cart))
                                            @foreach($cart as $key=>$value)
                                            <tr>
                                                <th>{{$value['name_pro']}} 
                                                    <strong><span>&#10005;</span>{{$value['quantity']}}</strong>
                                                </th>
                                                <td class="text-right">{{$value['price_pro']}}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td class="text-right">{{$total}}</td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td class="text-right">
                                                    <span>30000</span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td class="text-right"><span class="order-total-ammount">{{$total + 30000}} VND</span></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="checkout-payment">
                                 
                                        <div class="payment-group mb--10">
                                            <div class="payment-radio">
                                                <input type="radio" value="bank" name="payment" id="bank" checked>
                                                <label class="payment-label" for="cheque">Direct Bank Transfer</label>
                                            </div>
                                            <div class="payment-info" data-method="bank">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                        <div class="payment-group mb--10">
                                            <div class="payment-radio">
                                                <input type="radio" value="cheque" name="payment" id="cheque">
                                                <label class="payment-label" for="cheque">
                                                    cheque payments
                                                </label>
                                            </div>
                                            <div class="payment-info cheque hide-in-default" data-method="cheque">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                        <div class="payment-group mb--10">
                                            <div class="payment-radio">
                                                <input type="radio" value="cash" name="payment" id="cash">
                                                <label class="payment-label" for="cash">
                                                    CASH ON DELIVERY
                                                </label>
                                            </div>
                                            <div class="payment-info cash hide-in-default" data-method="cash">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </div>
                                        <div class="payment-group mt--20">
                                            <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                         <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Place Order</button>
                                        </div>
                           
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Area End -->
                              </form>
                    </div>
                </div>
            </div>
        </div>
@stop        