@extends('layouts.master')
@section('title' , $categories->categoryName)
@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="{{ route('homepage') }}">Anasayfa</a></li>
                <li class="active">{{ $categories->categoryName }}</a></li>
            </ul>
        </div>
    </div>
    <section class="section-shop shop-categories--default">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="ps-shop--sidebar">
                        <div class="sidebar__category">
                            <div class="sidebar__title">BÜTÜN KATEGORİLER</div>
                            <div class="ps-widget--category">
                                <h4>{{ $categories->categoryName }}</h4>
                                <ul>
                                    @foreach ($lower_categories as $lower_category)
                                    <li> <a href="{{ route('category', $lower_category->slug) }}">{{ $lower_category->categoryName }}</a>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="category__top">
                        <div class="category__header">
                            <h3 class="category__name">Fresh</h3>
                        </div>
                    </div>
                    <div class="result__header mobile">
                        <h4 class="title">35<span>Product Found</span></h4>
                    </div>
                    <div class="result__content mt-4">
                        <div class="section-shop--grid">
                            <div class="row m-0">

                                @foreach ($products as $product)
                                <div class="col-6 col-md-4 col-lg-3 p-0">
                                    <div class="ps-product--standard">
                                        <a href="{{ route('product' , $product->slug) }}">
                                            <img class="ps-product__thumbnail" src="img/products/01-Fresh/01_17a.jpg" alt="alt">
                                        </a>
                                        <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview">
                                            <i class="icon-expand"></i>
                                        </a>
                                        <span class="ps-badge ps-product__offbadge">32% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Farmart</p>

                                            <h5><a class="ps-product__name" href="{{ route('product' , $product->slug) }}">{{ $product->product_name }}</a></h5>

                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(14)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">{{ $product->price }} TL</span><span class="ps-product__price">$12.00</span>
                                            </p>
                                        </div>

                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>{{ $product->price }} TL</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                            <div class="ps-product__box"><a class="ps-product__wishlist" href="wishlist.html">Wishlist</a><a class="ps-product__compare" href="wishlist.html">Compare</a></div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach


                            </div>
                            <div class="ps-pagination blog--pagination">
                                {{ $products->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
