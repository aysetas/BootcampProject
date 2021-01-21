@extends('layouts.master')
@section('title' , 'Ödeme')
@section('content')
<main class="no-main">
    <div class="ps-breadcrumb" >
        <div class="container">
            <ul class="ps-breadcrumb__list" >
                <li class="active"><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><a href="{{ route('payment') }}">Ödeme</a></li>
            </ul>
        </div>
    </div>
        <section class="section--checkout">
            <div class="container" style="padding-bottom:100px;">
                <h2 class="page__title">ÖDEME</h2>
                <div class="checkout__content">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h3 class="checkout__title">ÖDEME BİLGİLERİ</h3>
                            <div class="checkout__form">
                                <form  action="{{ route('payment') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="col-12 form-group--block">
                                            <label for="kart_numarasi"><strong> Kredi Kartı Numarası:</strong><span>*</span></label>
                                            <input type="text" class="form-control kredikarti" id="kart_numarasi" name="kart_numarasi" style="font-size:20px;" required>
                                        </div>
                                        <div class="col-12 col-lg-6 form-group--block">
                                            <label><strong>Ay</strong><span>*</span></label>
                                            <select name="son_kullanma_tarihi_ay" id="son_kullanma_tarihi_ay" class="form-control" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-6 form-group--block">
                                            <label><strong>Yıl</strong><span>*</span></label>
                                            <select id="son_kullanma_tarihi_yil" name="son_kullanma_tarihi_yil" class="form-control" required>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                            </select>
                                        </div>

                                        <div class="col-12 form-group--block">
                                            <label for="cardcvv2"><strong>CVV (Güvenlik Numarası)</strong><span>*</span></label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control kredikarti_cvv" name="cardcvv2" id="cardcvv2" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group--block">
                                            <input class="form-check-input" type="checkbox" id="checkboxAgree" value="agree">
                                            <label class="label-checkbox" for="checkboxAgree"><b class="text-heading">Ön bilgilendirme formunu okudum ve kabul ediyorum.</b></label>
                                        </div>
                                        <div class="col-12 form-group--block">
                                            <input class="form-check-input" type="checkbox" checked>
                                            <label class="label-checkbox" for="checkboxAgree"><b class="text-heading">Mesafeli satış sözleşmesini okudum ve kabul ediyorum.</b></label>
                                        </div>
                                        <div class="col-12 form-group--block">
                                        <div class="col-md-4"><button style="border:1px solid  #ff7200" class="checkout__order" type="submit" >ÖDEME YAP</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6" >
                            <h3 class="checkout__title">Fatura Bilgileri</h3>

                            <div class="checkout__products" style="margin-top:10px">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="checkout__total">TOPLAM TUTAR</div>
                                    </div>
                                    <div class="col-4 text-right">
                                        <div class="checkout__money">{{Cart::total()}}₺</div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__form">
                                    <div class="form-row">
                                        <div class="col-12 form-group--block">
                                            <label><strong>Ad Soyad:</strong> <span>*</span></label>
                                            <input class="form-control" name="nameSurname" id="nameSurname" type="text" value="{{ auth()->user()->nameSurname }}" required>
                                        </div>
                                        <div class="col-12 form-group--block">
                                            <label><strong>Adres:</strong> <span>*</span></label>
                                            <input class="form-control" name="address" id="address" type="text" value="{{ $user_detail->address }}" >
                                        </div>
                                        <div class="col-12 form-group--block">
                                            <label><strong>Cep Telefonu:</strong> <span>*</span></label>
                                            <input class="form-control telefon" name="phone" id="phone" type="text" value="{{ $user_detail->phone }}" required>
                                        </div>
                                        <div class="col-12 form-group--block">
                                            <label><strong>2.Cep Telefonu:</strong> <span>*</span></label>
                                            <input class="form-control telefon" name="mobilephones" id="mobilephones" type="text" value="{{ $user_detail->mobilephones }}" >
                                        </div>
                                    </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

</main>
<div class="ps-breadcrumb" ></div>
@endsection

