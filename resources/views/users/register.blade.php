@extends('layouts.master')
@section('title' ,'register')
@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="javascript:void(0);">My Account</a></li>
            </ul>
        </div>
    </div>
    <section class="section--login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="login__box">
                        <div class="login__header">
                            <h3 class="login__login">LOGIN</h3>
                            <h3 class="login__register">REGISTER</h3>
                        </div>
                        <div class="login__content">
                            <div class="login__label">Login to your account.</div>
                            <div class="input-group">
                                <input class="form-control" type="email" placeholder="Username/ Email">
                            </div>
                            <div class="input-group group-password">
                                <input class="form-control" type="password" placeholder="Password">
                                <div class="input-group-append">
                                    <button class="btn forgot-pass" type="button">Forgot?</button>
                                </div>
                            </div>
                            <div class="input-group form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <button class="btn btn-login" type="submit">Login</button>
                            <div class="login__conect">
                                <hr>
                                <p>Or login with</p>
                                <hr>
                            </div>
                            <button class="btn btn-social btn-facebook"> <i class="fa fa-facebook-f"></i>Login with Facebook</button>
                            <button class="btn btn-social btn-google"> <i class="fa fa-google-plus"></i>Login with Google</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="login__title">Advantages Of Becoming A Member</h3>
                    <p class="login__description"> <b>Famart Buyer Protection </b>has you covered from click to delivery.<br>Sign up or sign in and you will be able to: </p>
                    <div class="login__orther">
                        <p> <i class="icon-truck"></i>Easily Track Orders, Hassle free Returns</p>
                        <p> <i class="icon-alarm2"></i>Get Relevant Alerts and Recommendation</p>
                        <p><i class="icon-star"></i>Wishlist, Reviews, Ratings and more.</p>
                    </div>
                    <div class="login__vourcher">
                        <div class="vourcher-money"><span class="unit">$</span><span class="number">25</span></div>
                        <div class="vourcher-content">
                            <h4 class="vourcher-title">GIFT VOURCHER FOR FISRT PURCHASE</h4>
                            <p>We give $25 as a small gift for your first purchase.<br>Welcome to Farmart Market!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
