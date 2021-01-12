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


        <section class="section-categories--default">
            <div class="container">
                <div class="categories--floating">
                <a class="floating-item" href="#freshFoodBlock"><i class="icon-apple"></i></a>
                <a class="floating-item" href="#readyMealBlock"><i class="icon-platter"></i></a>
                <a class="floating-item" href="#drinkTeaBlock"><i class="icon-glass2"></i></a>
                <a class="floating-item" href="#foodCupboardBlock"><i class="icon-ice-cream2"></i></a>
                <a class="floating-item" href="#kitchenBlock"><i class="icon-dinner"></i></a>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="freshFoodBlock">ÇORBALAR</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/kitchen_01.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/kitchen_02.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/kitchen_03.jpg" alt="alt"></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><b>Best Seller</b></a></div>
                                    <div class="categories__list-item"><a href="#">Meat & Poultry</a></div>
                                    <div class="categories__list-item"><a href="#">Fruit</a></div>
                                    <div class="categories__list-item"><a href="#">Vegetables</a></div>
                                    <div class="categories__list-item"><a href="#">Milk, Butter & Eggs</a></div>
                                    <div class="categories__list-item"><a href="#">Fish</a></div>
                                    <div class="categories__list-item"><a href="#">Frozen</a></div>
                                    <div class="categories__list-item"><a href="#">Cheese</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Desserts</a></div>
                                    <div class="categories__list-item"><a href="#">Pasta & Sauce</a></div>
                                    <div class="categories__list-item"><a href="#">Ham, Deli & Dips</a></div>
                                    <div class="categories__list-item"><a href="#">Pizza</a></div>
                                    <div class="categories__list-item"><a href="#">Soups</a></div>
                                    <div class="categories__list-item"><a href="#">Accompaniments</a></div>
                                    <div class="categories__list-item"><a href="#">Vegetarian Foods</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_1a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Corn, Yellow Sweet</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span></p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_2a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Oranges, Valencia</a></h5>
                                            <p class="ps-product__unit">5 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">15% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_13a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Celery</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_4a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Watermelon, Seedless</a></h5>
                                            <p class="ps-product__unit">450g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_16a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.90</span><span class="ps-product__price">$9.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_17a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Tomato Nature Sweet Glor</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_18a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Oniins, Green</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_31a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Pork Steak Jumbo Pack</a></h5>
                                            <p class="ps-product__unit">1kg</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="foodCupboardBlock">ANA YEMEKLER</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/food_cupboard_01.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/food_cupboard_02.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/food_cupboard_02.jpg" alt="alt"></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Crisps, Snacks & Nuts</a></div>
                                    <div class="categories__list-item"><a href="#">Breakfast</a></div>
                                    <div class="categories__list-item"><a href="#">Tins & Cans</a></div>
                                    <div class="categories__list-item"><a href="#">Chocolate & Sweets</a></div>
                                    <div class="categories__list-item"><a href="#">Biscuits</a></div>
                                    <div class="categories__list-item"><a href="#">Rice</a></div>
                                    <div class="categories__list-item"><a href="#">Pasta & Pulses</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Cooking Sauces</a></div>
                                    <div class="categories__list-item"><a href="#">Cooking Ingredients</a></div>
                                    <div class="categories__list-item"><a href="#">Honey & Spreads</a></div>
                                    <div class="categories__list-item"><a href="#">Savoury Snacks</a></div>
                                    <div class="categories__list-item"><a href="#">Crackers</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_1a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Assorted Donuts Each</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_2a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">15% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Bunny Round White</a></h5>
                                            <p class="ps-product__unit">150g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_3a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">French Bread</a></h5>
                                            <p class="ps-product__unit">150g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_14a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Bunny Hmburger Buns</a></h5>
                                            <p class="ps-product__unit">300ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_5a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Dozen Donut Holes</a></h5>
                                            <p class="ps-product__unit">180g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_11a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Natures Own 100% Wheat</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_12a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">$ Ct Pills Twirls</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(34)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/02-FoodCupboard/02_19a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">50% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Ball Park Hot Dog Buns</a></h5>
                                            <p class="ps-product__unit">90lbs</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="readyMealBlock">İÇECEKLER</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/ready_meal_01.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/ready_meal_02.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/ready_meal_02.jpg" alt="alt"></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><span class='text-danger'>On Sales</span></a></div>
                                    <div class="categories__list-item"><a href="#">Meals for 1</a></div>
                                    <div class="categories__list-item"><a href="#">Meals for 2</a></div>
                                    <div class="categories__list-item"><a href="#">Traditional British</a></div>
                                    <div class="categories__list-item"><a href="#">Indian</a></div>
                                    <div class="categories__list-item"><a href="#">Italian</a></div>
                                    <div class="categories__list-item"><a href="#">Chinese</a></div>
                                    <div class="categories__list-item"><a href="#">Thai & Oriental</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Moroccan</a></div>
                                    <div class="categories__list-item"><a href="#">Mexican</a></div>
                                    <div class="categories__list-item"><a href="#">Lighter Meals</a></div>
                                    <div class="categories__list-item"><a href="#">Lunch & Veg Pots</a></div>
                                    <div class="categories__list-item"><a href="#">Kids' Meals</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_1a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Fried Chicken Tenders</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_2a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Hot Mashed Potatoes</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off"></span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_3a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">90% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Mac & Cheese</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_4a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Fried piece Chicken</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_5a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Resers Cole Slaw</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_6a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Tailgater Ham Sandwich Pack</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_8a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Rsr Potato Salad</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/05-ReadyMeals/05_9a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kret Ham Off The Bone</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="drinkTeaBlock">TATLILAR</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/drink_tea_01.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/drink_tea_02.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/drink_tea_03.jpg" alt="alt"></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Tea & Coffee</a></div>
                                    <div class="categories__list-item"><a href="#">Hot Drinks</a></div>
                                    <div class="categories__list-item"><a href="#">Fizzy Drinks</a></div>
                                    <div class="categories__list-item"><a href="#">Water</a></div>
                                    <div class="categories__list-item"><a href="#">Squash</a></div>
                                    <div class="categories__list-item"><a href="#">Juices</a></div>
                                    <div class="categories__list-item"><a href="#">Mixers</a></div>
                                    <div class="categories__list-item"><a href="#">Still & Sparkling</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">No Added Sugar</a></div>
                                    <div class="categories__list-item"><a href="#">Still & Sparkling</a></div>
                                    <div class="categories__list-item"><a href="#">Cordials</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/06-SoftDrinks-TeaCoffee/06_1a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Apple Rasp Juice</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kevita Kom Ginger</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.90</span><span class="ps-product__price">$3.99</span><span class="ps-product__off">15% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/06-SoftDrinks-TeaCoffee/06_5a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Hs Grape Juice</a></h5>
                                            <p class="ps-product__unit">550ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$4.99</span><span class="ps-product__price">$8.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/06-SoftDrinks-TeaCoffee/06_12a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Mn Lemonade</a></h5>
                                            <p class="ps-product__unit">1.5L</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/06-SoftDrinks-TeaCoffee/06_11a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">1 box</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$9.99</span><span class="ps-product__price">$5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$9.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}//products/06-SoftDrinks-TeaCoffee/06_2a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Always Save Frozen Lemonade</a></h5>
                                            <p class="ps-product__unit">200g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$12.00</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$12.00</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/06-SoftDrinks-TeaCoffee/06_9a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Onions, Green</a></h5>
                                            <p class="ps-product__unit">1.5L</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/06-SoftDrinks-TeaCoffee/06_8a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Kevita Pineapple Peach</a></h5>
                                            <p class="ps-product__unit">330ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories--block">
                    <h3><a class="categories__title" id="kitchenBlock">ARA SICAKLAR</a></h3>
                    <div class="categories__content">
                        <div class="categories__promotion">
                            <div class="slick-single-item">
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/kitchen_01.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/kitchen_02.jpg" alt="alt"></a></div>
                                <div class="categories-carousel"><a href="#"><img class="carousel__thumbnail" src="{{asset('farmart/')}}/img/promotion/kitchen_03.jpg" alt="alt"></a></div>
                            </div>
                            <div class="row categories__list">
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#"><b>Most Popular</b></a></div>
                                    <div class="categories__list-item"><a href="#">Dining</a></div>
                                    <div class="categories__list-item"><a href="#">Outdoor Dining</a></div>
                                    <div class="categories__list-item"><a href="#">Party Tableware</a></div>
                                    <div class="categories__list-item"><a href="#">Food Storage</a></div>
                                    <div class="categories__list-item"><a href="#">Utensils</a></div>
                                    <div class="categories__list-item"><a href="#">Food Preparation</a></div>
                                    <div class="categories__list-item"><a href="#">Water Filters</a></div>
                                </div>
                                <div class="col-6">
                                    <div class="categories__list-item"><a href="#">Pots, Pans & Prep</a></div>
                                    <div class="categories__list-item"><a href="#">Baking & Preserving</a></div>
                                    <div class="categories__list-item"><a href="#">Glassware</a></div>
                                </div>
                            </div>
                            <div class="categories__footer"><a href="shop-categories.html">
                                    <u>View all</u><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="categories__products">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_1a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Cornboat Holders</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_2a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Saute Pan Silver</a></h5>
                                            <p class="ps-product__unit">2 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span><span class="ps-product__off">15% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_3a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Crock Pot Slow Cooker</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$4.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_4a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">49% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Emoticon Cookie</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$5.99</span><span class="ps-product__price">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$5.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_5a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_10a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__offbadge">30% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Arla Organic Free Range Milk</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$3.99</span><span class="ps-product__price">$4.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_11a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Dinamond Pan</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">$6.90</span><span class="ps-product__price">$9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/09-KitchenDining/09_13a.jpg" alt="alt"></a><a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>
                                            <h5><a class="ps-product__name" href="product-default.html">Pork Steak Jumbo Pack</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">$6.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>$6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid quickview-body">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_1a.jpg" alt="alt"></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_2a.jpg" alt="alt"></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_4a.jpg" alt="alt"></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail" src="img/products/01-Fresh/01_9a.jpg" alt="alt"></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview__product">
                                        <div class="product__header">
                                            <div class="product__title">Hovis Farmhouse Soft White Bread</div>
                                            <div class="product__meta">
                                                <div class="product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>4 customer reviews</span>
                                                </div>
                                                <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__price"><span class="sale">$5.49</span><span class="price">$6.90</span><span class="off">25% Off</span></div>
                                            <p class="product__unit">300g</p>
                                            <div class="alert__success">Availability: <span>34 in stock</span></div>
                                            <ul>
                                                <li>Type: Organic</li>
                                                <li>MFG: Jun 4, 2020</li>
                                                <li>LIFE: 30 days</li>
                                            </ul>
                                        </div>
                                        <div class="product__action">
                                            <label>Quantity: </label>
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <button class="btn product__addcart"> <i class="icon-cart"></i>Add to cart</button>
                                            <button class="btn button-icon icon-md"><i class="icon-repeat"></i></button>
                                            <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                        </div>
                                        <div class="product__footer">
                                            <div class="ps-social--share"><a class="ps-social__icon facebook" href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="alert__success"><i class="icon-checkmark-circle"></i> "Morrisons The Best Beef Topside" successfully added to you cart. <a href="shopping-cart.html">View cart(3)</a></div>
                            <hr>
                            <h3 class="cart__title">CUSTOMERS WHO BOUGHT THIS ALSO BOUGHT:</h3>
                            <div class="cart__content">
                                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_35a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="product-default.html">
                                                    <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
                                                </a>
                                                <p class="ps-product__unit">500g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(4)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$8.90</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">15% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_16a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p><a href="product-default.html">
                                                    <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
                                                </a>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(14)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$1.99</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_12a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>John Farm</p><a href="product-default.html">
                                                    <h5 class="ps-product__name">Natures Own 100% Wheat</h5>
                                                </a>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_15a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="product-default.html">
                                                    <h5 class="ps-product__name">Avocado, Hass Large</h5>
                                                </a>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected="selected">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$6.99</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">25% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-item">
                                        <div class="ps-product--standard"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/06-SoftDrinks-TeaCoffee/06_3a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="product-default.html">
                                                    <h5 class="ps-product__name">Kevita Kom Ginger</h5>
                                                </a>
                                                <p class="ps-product__unit">200g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$4.90</span><span class="ps-product__price">$3.99</span><span class="ps-product__off">15% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
