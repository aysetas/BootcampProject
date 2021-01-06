@extends('layouts.master')

@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li><a href="javascript:void(0);">Arama Sonucu</a></li>
            </ul>
        </div>
    </div>
    <section class="section-shop">
        <div class="container">
            <div class="shop__content">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="result__content">
                            <div class="section-shop--listing">
                                @foreach ($products as $product)
                                    <div class="product-item">
                                        <div class="ps-product--list">
                                            <div class="ps-product__left">
                                                <div class="ps-product__extent"><a href="{{ route('product', $product->slug) }}"><img class="ps-product__thumbnail" src="img/products/03-Bakery/03_1a.jpg" alt="alt"></a>
                                                    <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                                    <div class="ps-product__footer">
                                                        <div class="def-number-input number-input safari_only">
                                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                            <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                        </div>
                                                        <div class="ps-product__total">Total:<span>{{ $product->price }}TL</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ps-product__content">
                                                    <a class="ps-product__name" href="{{ route('product',$product->slug) }}">{{$product->product_name}}</a>
                                                </div>
                                            </div>
                                            <div class="ps-product__right">
                                                <div class="ps-product__price">{{ $product->price }} TL</div>
                                                <button class="btn ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="ps-pagination blog--pagination">
                                {{ $products->appends(['aranan'=> old('aranan')])->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
