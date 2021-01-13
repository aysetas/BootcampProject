@extends('layouts.master')
@section('title','Anasayfa')
@section('content')
<main class="no-main">
        <div class="section-slide--default">
            @include('layouts.error.alert')

            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                @foreach ($product_slider as $index=>$product)
                    <div class="ps-banner"><img class="mobile-only" src="{{asset('farmart/')}}/img/slider/home-1/slide_03_mobile.png" alt="alt"><img class="desktop-only" src="{{asset('farmart/')}}/img/slider/home-1/slide_03.png" alt="alt">
                        <div class="ps-content {{ $index==0 ? 'active':'' }}">
                            <div class="container">
                                <div class="ps-content-box">
                                    <div class="ps-node"><span class='text-danger'>SALE UP TO 30%</span></div>
                                    <div class="ps-title">{{ $product->product_name}}</div>
                                    <div class="ps-subtitle">Only from <br><span class='price'>{{ $product->price }} TL</span></div>
                                    <div class="ps-shopnow"> <a href="shop-view-grid.html">Shop Now<i class="icon-chevron-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <section class="section-featured--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title">Öne Çıkanlar</h3>
                </div>
                <div class="featured--content">
                    <div class="featured__first">
                        <div class="ps-product--vertical"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_16a.jpg" alt="alt"></a>
                            <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">{{ $featured->product_name }}</a>
                                <p class="ps-product-price-block"><span class="ps-product__price-default">{{ $featured->price }}TL</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured__group">
                        <div class="row m-0">
                        @foreach ($product_featured as $product)

                            <div class="col-3 p-0">
                                <div class="ps-product--vertical"><a href="{{ route('product', $product->slug) }}"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_19a.jpg" alt="alt"></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="{{ route('product', $product->slug) }}">{{ $product->product_name }}</a>
                                        <p class="ps-product-price-block"><span class="ps-product__price-default">{{ $product->price }} TL</span>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                        </div>
                    </div>
                </div>
                <div class="featured--content-mobile">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                        @foreach ($product_featured as $product)
                        <div class="product-slide">
                            @foreach ($product_featured as $product)
                                <div class="ps-product--vertical"><a href="{{ route('product', $product->slug) }}"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_19a.jpg" alt="alt"></a>
                                    <div class="ps-product__content"><a class="ps-product__name" href="{{ route('product', $product->slug) }}">{{ $product->product_name }}</a>
                                        <p class="ps-product-price-block"><span class="ps-product__price-default">{{ $product->price }} TL</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="section-flashdeal--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title"><i class="icon-power"></i>Fırsat Yemekleri <span class="ps-countdown"><span class="ps-countdown"><b class="hours">00</b> hours : <b class="minutes">12</b> mins : <b class="seconds">45</b> secs</span><span class="ps-countdown mobile"><b class="hours">00</b> h : <b class="minutes">12</b> m : <b class="seconds">45</b> s</span></span></h3><a class="ps-block__view" href="flash-sale.html">View all<i class="icon-chevron-right"></i></a>
                </div>
                <div class="flashdeal--content">
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="6" data-owl-duration="1000" data-owl-mousedrag="on">

                        @foreach ($product_opportunity_day as $product)

                        <div class="ps-product--standard"><a href="{{ route('product', $product->slug) }}"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_16a.jpg" alt="alt"></a>
                            <div class="ps-product__content">
                                <p class="ps-product-price-block"><span class="ps-product__price-default">{{ $product->price }} TL</span>
                                <a href="{{ route('product', $product->slug) }}">
                                    <h5 class="ps-product__name">{{ $product->product_name }}</h5>
                                </a>

                                <div class="ps-product__rating">
                                    <select class="rating-stars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select><span>(0) </span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="ps-product__sold">Sold: 0/40</p>
                            </div>
                            <div class="ps-product__footer">
                                <div class="def-number-input number-input safari_only">
                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                </div>
                                <div class="ps-product__total">Total: <span>$2.90</span>
                                </div>
                                <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>



        <section class="section-recommendations--default ps-home--block">
            <div class="container">
                <div class="ps-block__header mobile">
                    <h3 class="ps-block__title">İndirimli Ürünler</h3>
                </div>
                <div class="recommendations__content">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">
                       @foreach ($product_discounted as $product)
                            <div class="recommendation-carousel">
                                @foreach ($product_discounted as $product)
                                    <div class="ps-product--vertical"><a href="{{ route('product',$product->slug) }}"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_31a.jpg" alt="alt"></a>
                                        <div class="ps-product__content">
                                            <h5><a class="ps-product__name" href="{{ route('product',$product->slug) }}">{{ $product->product_name }}</a></h5>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">{{ $product->price }}TL</span>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section-recent--default ps-home--block">
            <div class="container">
                <div class="ps-block__header">
                    <h3 class="ps-block__title">En Çok Satılanlar</h3><a class="ps-block__view" href="shop-categories.html">Hepsini Gör<i class="icon-chevron-right"></i></a>
                </div>
                <div class="recent__content">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-item-xl="8" data-owl-duration="1000" data-owl-mousedrag="on">
                        @foreach ($product_bestseller as $product)
                          <a class="recent-item" href="{{ route('product',$product->slug) }}"><img src="{{asset('farmart/')}}/img/products/01-Fresh/01_1a.jpg" alt="alt"></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>



    </div>
</main>

@endsection
