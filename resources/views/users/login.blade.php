@extends('layouts.master')
@section('title' ,'login')
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
                            <h3 class="login__login">GİRİŞ</h3>
                        </div>
                        @include('layouts.error.errors')
                        @include('layouts.error.alert')

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('users.login') }}">
                            {{ csrf_field() }}
                            <div class="login__content">
                                <div class="login__label">Hesabınıza giriş yapınız</div>
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Lütfen Email adresinizi giriniz.." value="{{ old('email') }}" required>
                                </div>
                                <div class="input-group group-password">
                                    <input id="password" class="form-control" type="password" name="password" placeholder="Lütfen Şifre giriniz..">
                                    <div class="input-group-append">
                                        <button class="btn forgot-pass" type="button">Şifremi Unuttum</button>
                                    </div>
                                </div>
                                <div class="input-group form-check">
                                    <input id="rememberme" class="form-check-input" name="rememberme" type="checkbox" checked >
                                      <label class="form-check-label">Beni Hatırla</label>

                                </div>
                                <button class="btn btn-login" type="submit">Giriş</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="login__title">Üye Olmanın Avantajları</h3>
                    <p class="login__description"> <b>MEMLEKETİMDEN İSTE, </b><br>Kayıt olup giriş yaptıktan sonra şunları yapabilirsiniz: </p>
                    <div class="login__orther">
                        <p> <i class="icon-truck"></i>Siparişleri Kolayca Takip Edin, Sorunsuz İadeler</p>
                        <p> <i class="icon-alarm2"></i>İlgili Uyarıları ve Önerileri Alın</p>
                        <p><i class="icon-star"></i>İstek Listesi, İncelemeler, Değerlendirmeler ve daha fazlası.</p>
                    </div>
                    <div class="login__vourcher">
                        <div class="vourcher-money"><span class="number">25</span><span class="unit">TL</span></div>
                        <div class="vourcher-content">
                            <h4 class="vourcher-title">İLK SATIN ALMA İÇİN HEDİYE ÇEKİ</h4>
                            <p>İlk alışverişinizde küçük bir hediye olarak 25 TL veriyoruz.<br>MEMLEKETİMDEN İSTE'YE HOŞGELDİNİZ!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
