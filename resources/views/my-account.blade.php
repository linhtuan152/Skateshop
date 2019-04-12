@extends('welcome')
@section('content')
<!-- Breadcrumb area Start -->

<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/fancybox/jquery.fancybox.css">
<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="current"><span>My Account</span></li>
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
                    <div class="user-dashboard-tab flex-column flex-md-row">
                        <div class="user-dashboard-tab__head nav flex-md-column" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            <a class="nav-link" data-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="true">Orders</a>
                            <a class="nav-link" data-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Addresses</a>
                            <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</a>
                            <a class="nav-link" href="{{route('log-out')}}">Logout</a>
                        </div>
                        <div class="user-dashboard-tab__content tab-content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <p>Hello <strong>{{$user['fullname']}}</strong> (not <strong>{{$user['fullname']}}</strong> ? <a href="{{route('log-out')}}">Log out</a>)</p>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details</a>.</p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <div class="table-content table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($order))
                                            <?php $i = 0; ?>
                                            @foreach($order as $key => $value)
                                            <tr>
                                                <?php $i = $i + 1 ?>
                                                <td>{{$i}}</td>
                                                <td class="wide-column">{{$value->updated_at}}</td>
                                                <td>{{$value->status_ord == 1 ? 'Processing' : 'Delivered'}}</td>
                                                <td class="wide-column">{{$value->total_price}}</td>
                                                <form action="" method="POST" role="form">
                                                    @csrf
                                                    <input type="text" class="getinfo{{$value->id_ord}}" id="id" name="id" value="{{$value->id_ord}}" style="display: none;">
                                                    <td><button class="btn btn-small btn-bg-red btn-color-white btn-hover-2 type="submit"><a>View</a></button></td>
                                                </form>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    @if(isset($order_detail))
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <h2>Order detail</h2>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Img</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $x = 0; ?>
                                            @foreach($order_detail as $key => $value)
                                            <tr>
                                                <?php $x = $x + 1 ?>
                                                <td>{{$x}}</td>
                                                <td>{{$value->name_pro}}</td>
                                                <td>{{$value->price_pro}}</td>
                                                <td>{{$value->quantity}}</td>
                                                <td><img style="width: 60px; height: 60px;" src="{{$value->img}}"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="addresses">
                                <p class="mb--20">The following addresses will be used on the checkout page by default.</p>
                                <div class="row">
                                    <div class="col-md-6 mb-sm--20">
                                        <div class="text-block">
                                            <h4 class="mb--20">Billing address</h4>
                                            <a href="#">Edit</a>
                                            <p>{{$user['address']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="accountdetails">
                                <form action="#" class="form form--account">
                                    <div class="row mb--20">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <label class="form__label form__label--2" for="d_name">Display name <span class="required">*</span></label>
                                                <input type="text" name="d_name" id="d_name" class="form__input" value="{{$user['fullname']}}">
                                                <span class="suggestion"><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb--20">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <label class="form__label form__label--2" for="email">Email Address <span class="required">*</span></label>
                                                <input type="email" name="email" id="email" class="form__input" value="{{$user['email']}}">
                                            </div>
                                        </div>
                                    </div>
                                    <fieldset class="form__fieldset mb--20">
                                        <legend class="form__legend">Password change</legend>
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="cur_pass">Current password (leave blank to leave unchanged)</label>
                                                    <input type="password" name="cur_pass" id="cur_pass" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="new_pass">New password (leave blank to leave unchanged)</label>
                                                    <input type="password" name="new_pass" id="new_pass" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="conf_new_pass">Confirm new password</label>
                                                    <input type="password" name="conf_new_pass" id="conf_new_pass" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__group">
                                                <input type="submit" value="Save Changes" class="btn btn-style-1 btn-submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{url('/')}}/public/admin/js/jquery-3.3.1.min.js"></script>
<!-- <script src="{{url('/')}}/public/admin/fancybox/jquery.fancybox.pack.js"></script> -->
<script src="{{url('/')}}/public/admin/fancybox/jquery.fancybox.js"></script>



<!-- <script src="{{url('/')}}/public/admin/assets/js/script.js"></script> -->
@stop