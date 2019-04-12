@extends('welcome')
@section('content')
<!-- Breadcrumb area Start -->

<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Register</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="current"><span>Register</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area End -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--75 pb--80">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="register-box">
                        <h4 class="heading__tertiary mb--30">Register</h4>
                        <small class="form-text text-muted">
                            @if($errors->has('errorlogin'))
                            {{$errors->first('errorlogin')}}
                            @endif
                        </small>
                        <form method="POST" class="form form--login">
                            @csrf
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="email">Email address <span class="required">*</span></label>
                                <input type="email" class="form__input form__input--2" id="email" name="email">
                                <small class="form-text text-muted">
                                    @if($errors->count() > 0)
                                    {{$errors->first('email')}}
                                    @endif
                                </small>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="">Full Name <span class="required">*</span></label>
                                <input type="" class="form__input form__input--2" id="fullname" name="fullname">
                                <small class="form-text text-muted">
                                    @if($errors->count() > 0)
                                    {{$errors->first('fullname')}}
                                    @endif
                                </small>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="">Phone <span class="required">*</span></label>
                                <input type="" class="form__input form__input--2" id="phone" name="phone">
                                <small class="form-text text-muted">
                                    @if($errors->count() > 0)
                                    {{$errors->first('phone')}}
                                    @endif
                                </small>
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="">Address </label>
                                <input type="" class="form__input form__input--2" id="address" name="address">
                            </div>
                            <div class="form__group mb--20">
                             <label class="form__label form__label--2" for="register_password">Password <span class="required">*</span></label>
                             <input type="password" class="form__input form__input--2" id="password" name="password">
                             <small class="form-text text-muted">
                                @if($errors->count() > 0)
                                {{$errors->first('password')}}
                                @endif
                            </small>
                        </div>
                        <p class="privacy-text mb--20">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                        <div class="form__group">
                            <input type="submit" class="btn btn-submit btn-style-1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop