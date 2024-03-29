@extends('welcome')
@section('content')
<!-- Breadcrumb area Start -->

<div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <h1 class="page-title">Login</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="current"><span>Login</span></li>
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
                <div class="col-md-6 mb-sm--50">
                    <div class="login-box">
                        <h3 class="heading__tertiary mb--30">Login</h3>
                        <small class="form-text text-muted">
                            @if($errors->has('errorlogin'))
                            {{$errors->first('errorlogin')}}
                            @endif
                        </small>
                        <form class="form form--login" method="POST" role='form'>
                            @csrf
                            <div class="form__group mb--20">
                                <label class="form__label form__label--2" for="username_email">Username or email address <span class="required">*</span></label>
                                <input type="text" class="form__input form__input--2" id="email" name="email">
                                <small class="form-text text-muted">
                                    @if($errors->count() > 0)
                                    {{$errors->first('email')}}
                                    @endif
                                </small>
                            </div>
                            <div class="form__group mb--20">
                             <label class="form__label form__label--2" for="login_password">Password <span class="required">*</span></label>
                             <input type="password" class="form__input form__input--2" id="password" name="password">
                             <small class="form-text text-muted">
                                @if($errors->count() > 0)
                                {{$errors->first('password')}}
                                @endif
                            </small>
                        </div>
                        <div class="d-flex align-items-center mb--20">
                            <div class="form__group mr--30">
                                <input type="submit" value="Log in" class="btn-submit">
                            </div>
                            <div class="form__group">
                                <label class="form__label checkbox-label" for="store_session">
                                    <!-- <input type="checkbox" name="store_session" id="store_session"> -->
                                    <a href="{{route('register')}}"><span>Not have an account ?</span></a>
                            </div>
                        </div>
                        <a class="forgot-pass" href="#">Lost your password?</a>
                    </form>
                </div>
            </div>
                        <!-- <div class="col-md-6">
                            <div class="register-box">
                                <h4 class="heading__tertiary mb--30">Register</h4>
                                <form class="form form--login">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Email address <span class="required">*</span></label>
                                        <input type="email" class="form__input form__input--2" id="email" name="email">
                                    </div>
                                    <div class="form__group mb--20">
                                       <label class="form__label form__label--2" for="register_password">Password <span class="required">*</span></label>
                                        <input type="password" class="form__input form__input--2" id="register_password" name="register_password">
                                    </div>
                                    <p class="privacy-text mb--20">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                                    <div class="form__group">
                                        <input type="submit" value="Register" class="btn btn-submit btn-style-1">
                                    </div>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        @stop