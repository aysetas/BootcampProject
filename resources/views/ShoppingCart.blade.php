@extends('layouts.master')
@section('title' , 'Shopping Cart')
@section('content')
<main class="no-main">
    <div class="ps-breadcrumb" >
        <div class="container">
            <ul class="ps-breadcrumb__list" style="margin-bottom:10px;" >
                <li class="active"><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><a href="{{ route('shoppingCart') }}">Sepet</a></li>
            </ul>
        </div>

        <section class="section--shopping-cart" >
            <div class="container shopping-container" style="padding-bottom:100px;" >
                @if(count(Cart::content())>0)
                    <h2 class="page__title">SEPET</h2>
                    @include('layouts.error.alert')
                    <div class="shopping-cart__content"  >
                        <div class="row m-0">
                            <div class="col-12 col-lg-8">
                                <div class="shopping-cart__products">
                                    <div class="shopping-cart__table">
                                        <div class="shopping-cart-light">
                                            <div class="shopping-cart-row">
                                                <div class="cart-product">Ürün</div>
                                                <div class="cart-price">Fiyat</div>
                                                <div class="cart-quantity">Miktar</div>
                                                <div class="cart-total">Toplam Tutar</div>
                                                <div class="cart-action"> </div>
                                            </div>
                                        </div>
                                        <div class="shopping-cart-body">
                                            @foreach (Cart::content() as $ProductCartItem)

                                                <div class="shopping-cart-row">
                                                    <div class="cart-product">
                                                        <div class="ps-product--mini-cart">
                                                            <a href="{{route('product' ,$ProductCartItem->options->slug )}}">
                                                                <img class="ps-product__thumbnail" src="{{ asset('farmart/') }}/img/products/01-Fresh/01_18a.jpg" alt="alt">
                                                            </a>
                                                            <div class="ps-product__content">
                                                                <h5><a class="ps-product__name" href="{{route('product' ,$ProductCartItem->options->slug )}}">{{ $ProductCartItem->name }}</a></h5>
                                                                <p class="ps-product__meta">Fiyat: <span class="ps-product__price">{{ $ProductCartItem->price }} ₺</span></p>
                                                                <div class="def-number-input number-input safari_only">

                                                                    <a href="#" class="btn btn-xs btn-default qty-minus" data-id="{{$ProductCartItem->rowId}}" data-qty="{{$ProductCartItem->qty-1}}"><i class="icon-minus"></i></a>

                                                                    <input class="quantity" min="0" name="quantity" value="{{ $ProductCartItem->qty }}" type="number">

                                                                    <a href="#" class="btn btn-xs btn-default qty-plus" data-id="{{$ProductCartItem->rowId}}" data-qty="{{$ProductCartItem->qty+1}}"><i class="icon-plus"></i></a>

                                                                </div><span class="ps-product__total">Toplam Tutar: <span>{{ $ProductCartItem->subtotal }} </span></span>
                                                            </div>
                                                            <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-price"><span class="ps-product__price">{{ $ProductCartItem->price }} ₺</span>
                                                    </div>
                                                    <div class="cart-quantity">
                                                        <div class="def-number-input number-input safari_only">
                                                            <a href="#" class="btn btn-xs btn-default qty-minus" data-id="{{$ProductCartItem->rowId}}" data-qty="{{$ProductCartItem->qty-1}}"><i class="icon-minus"></i></a>
                                                            <input class="quantity" min="0" name="quantity" value="{{ $ProductCartItem->qty }}" type="number">
                                                            <a href="#" class="btn btn-xs btn-default qty-plus" data-id="{{$ProductCartItem->rowId}}" data-qty="{{$ProductCartItem->qty+1}}"><i class="icon-plus"></i></a>

                                                        </div>
                                                    </div>
                                                    <div class="cart-total"> <span class="ps-product__total">{{ $ProductCartItem->subtotal }} ₺</span>
                                                    </div>
                                                    <div class="cart-action">
                                                        <form action="{{ route('shoppingCart.delete' , $ProductCartItem->rowId) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button style="padding:3px; border:1px solid #fff; background:#fff"><i class="icon-trash2"></i></button>
                                                        </form>
                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="shopping-cart__step">
                                        <form action="{{route('shoppingCart.clear')}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button class="button right" type="submit" ><i class="icon-sync"></i>Sepeti Boşalt</button>
                                        </form>

                                        <a class="button left" href="{{route('homepage')}}"><i class="icon-arrow-left"></i>Alışverişe Devam</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="shopping-cart__right">
                                    <div class="shopping-cart__total">
                                        <p class="shopping-cart__subtotal"><span>Ara Tutar</span><span class="price">{{Cart::subtotal()}} ₺</span></p><hr>
                                        <p class="shopping-cart__subtotal"><span>KDV</span><span class="price">{{ $tax = substr(Cart::subTotal()*0.18, 0, 4)}}₺</span></p><hr>
                                        <p class="shopping-cart__subtotal"><span><b>TOPLAM TUTAR</b></span><span class="price-total">{{Cart::subTotal()+$tax}}₺</span></p>
                                    </div><a class="btn shopping-cart__checkout" href="{{ route('payment') }}">Ödeme Yap</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <img style="padding:50px;" src="{{asset('farmart/')}}/img/shoppingcart.png" width="250"  class="img-fluid" alt="Boş Sepet">
                        <p style="font-size:15px; color:black;"><strong>ÜZGÜNÜZ SEPETİNİZDE ÜRÜN BULUNMAMAKTADIR.</strong></p>
                    <button style="margin:10px; background-color:#ff7200; font-size:12px; color:#fff; border:1px solid #ff7200; padding:5px;"  type="submit"  value="ALIŞVERİŞE GİT"> <a href="{{ route('homepage') }}">ALIŞVERİŞE GİT</a></button>
                    </div>
                @endif
            </div>
        </section>

    </div>

</main>
@endsection


