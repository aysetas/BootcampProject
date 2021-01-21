@extends('layouts.master')
@section('title' , 'Sipariş')
@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><a href="{{ route('orders') }}">Sipariş</a></li>
            </ul>
        </div>
    </div>
    <section class="section--checkout" style="padding-bottom:100px; ">
        <div class="container">
            <h2 class="page__title">Siparişler</h2>
            <div class="checkout__content">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="checkout__products " >
                            <div style="margin-left:100px" class="checkout__list col-12 col-lg-10 ">
                                @if (count($orders) == 0)
                                    <p>Henüz siparişiniz yok</p>
                                @else
                                <table class="table table-bordererd table-hover">
                                    <tr>
                                        <th><strong>SİPARİŞ KODUNUZ</strong></th>
                                        <th><strong>TUTAR</strong></th>
                                        <th><strong>TOPLAM ÜRÜN</strong></th>
                                        <th><strong>DURUM</strong></th>
                                        <th></th>
                                    </tr>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>SP-{{ $order->id }}</td>
                                        <td>{{ $order->order_amount * ((100+config('cart.tax'))/100) }}</td>
                                        <td>{{ $order->shoppingCart->cart_product_quantity() }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td><a href="{{ route('order', $order->id) }}" class="btn btn-sm " style="background-color:#ff7200; color:#fff">Detay</a></td>
                                    </tr>
                                    @endforeach
                          </table>
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ps-breadcrumb"></div>
</main>
@endsection
