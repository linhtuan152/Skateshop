@extends('welcome')
@section('content')
<!-- Breadcrumb area Start -->
<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title"></h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="current"><span>Success</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->
<div class="container message-box" style="background: none !important;">
    <p><i class="fa fa-exclamation-circle"></i> Mua hàng thành công !! <a href="{{route('shop')}}" style="color: red;">Quay lại mua hàng.</a> </p>
 </div>
@stop