<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>@yield('title' ,'Memleketimden İste')</title>

    <link href="/../../css.css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/../../gh/Dogfalo/materialize@master/extras/noUiSlider/nouislider.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="{{ asset('farmart/') }}/css/style.css">
</head>
<body>
    <header class="header">
        <div class="ps-top-bar">
            <div class="container">
                <div class="top-bar">
                    <div class="top-bar__left">
                        <ul class="nav-top">
                            <li class="nav-top-item"><a class="nav-top-link" href="tel:970978-6290"> <i class="icon-telephone"></i><span>Hotline:</span><span class="text-success font-bold">970 978-6290</span></a></li>
                        </ul>
                    </div>
                    <div class="top-bar__right">
                        <ul class="nav-top">
                            <li class="nav-top-item languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                                <div class="select--dropdown">
                                    <ul class="select-languages">
                                        <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                                        <li class="language-item" data-value="Brunei"><a href="javascript:void(0);">Brunei</a></li>
                                        <li class="language-item" data-value="Armenia"><a href="javascript:void(0);">Armenia</a></li>
                                    </ul>
                                </div>
                            </li>
                            @guest
                                <li class="nav-top-item currency"><a class="nav-top-link" href="{{ route('users.login') }}"> <span class="current-currency">Oturum Aç</span></a></li>
                                <li class="nav-top-item"><a class="nav-top-link" href="{{ route('users.register') }}">Kaydol</a></li>
                            @endguest

                            @auth
                                <li class="nav-top-item account"><a class="nav-top-link" href="javascript:void(0);"> <i class="icon-user"></i>Hoşgeldin! <span class="font-bold">profil</span></a>
                                    <div class="account--dropdown">
                                        <div class="account-anchor">
                                            <div class="triangle"></div>
                                        </div>
                                        <div class="account__content">
                                            <ul class="account-list">
                                                <li class="title-item"> <a href="javascript:void(0);">Hesabım</a>
                                                </li>
                                                <li> <a href="#">Dasdboard</a>
                                                </li>
                                                <li> <a href="#">Account Setting</a>
                                                </li>
                                                <li> <a href="shopping-cart.html">Orders</a>
                                                </li>
                                                <li> <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li> <a href="#">Shipping Address</a>
                                                </li>
                                            </ul>
                                            <hr>
                                            <ul class="account-list">
                                                <li class="title-item"> <a href="javascript:void(0);">Vendor Settings</a>
                                                </li>
                                                <li> <a href="#">Dasdboard</a>
                                                </li>
                                                <li> <a href="#">Products</a>
                                                </li>
                                                <li> <a href="shopping-cart.html">Orders</a>
                                                </li>
                                                <li> <a href="#">Settings</a>
                                                </li>
                                                <li> <a href="vendor-store.html">View Store</a>
                                                </li>
                                            </ul>
                                            <hr><a class="account-logout" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                                <i class="icon-exit-left"></i>Çıkış</a>
                                            <form id="logout-form" action="{{ route('users.logout') }}" method="POST" style="display:none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </li>
                        @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-header--center header--mobile">
            <div class="container">
                <div class="header-inner">
                    <div class="header-inner__left">
                        <button class="navbar-toggler"><i class="icon-menu"></i></button>
                    </div>
                    <div class="header-inner__center"><a class="logo open" href="index.html">Yöresel<span class="text-black">Sof.</span></a></div>
                    <div class="header-inner__right">
                        <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <section class="ps-header--center header-desktop">
            <div class="container">
                <div class="header-inner">
                    <div class="header-inner__left"><a class="logo" href="index.html">Yöresel<span class="text-black">Sof.</span></a>

                        <ul class="menu">

                            <li class="menu-item-has-children has-mega-menu">
                                <button class="category-toggler"><i class="icon-menu"></i></button>

                                <div class="mega-menu mega-menu-category">

                                    <ul class="menu--mobile menu--horizontal">


                                    @foreach (\App\Models\Categories::whereRaw("top_id is null")->take(81)->get() as $category)

                                        <li class="has-mega-menu category-item"><a href="{{ route('category' ,$category->slug )}}">{{$category->categoryName}}</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>

                                        </li>
                                    @endforeach

                                    </ul>

                                </div>

                            </li>

                        </ul>

                    </div>

                    <div class="header-inner__center">
                        <form  class="navbar-form navbar-left" action="{{ route('product_search') }}" method="POST">
                            {{ csrf_field() }} <!--bunu eklemezsek laravel post işlenmini engeller ve güvenlik amacıylada faydalıdır-->
                            <div class="input-group">
                                <input class="form-control input-search" name="aranan" placeholder="Memleketinden Lezzetli Yemekleri Ara..." value="{{ old('aranan') }}">

                                <div class="input-group-append">
                                    <button class="btn">ARA</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="header-inner__right">
                        <div class="button-icon btn-cart-header"><i class="icon-cart icon-shop5"></i><span class="badge bg-warning">{{ Cart::count() }}</span>
                            <div class="mini-cart">
                                <div class="mini-cart--content">
                                    <div class="mini-cart--overlay"></div>
                                    <div class="mini-cart--slidebar cart--box">
                                        @if(count(Cart::content())>0)
                                        <div class="mini-cart__header">
                                            <div class="cart-header-title">
                                                <h5>SEPET{{ Cart::count() }}</h5><a class="close-cart" href="{{ route('shoppingCart') }}"><i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="mini-cart__products">
                                            <div class="out-box-cart">
                                                <div class="triangle-box">
                                                    <div class="triangle"></div>
                                                </div>
                                            </div>
                                            <ul class="list-cart">
                                                @foreach (Cart::content() as $ProductCartItem)

                                                <li class="cart-item">
                                                    <div class="ps-product--mini-cart">
                                                        <a href="{{route('product' ,$ProductCartItem->options->slug )}}">
                                                            <img class="ps-product__thumbnail" src="{{asset('farmart/')}}/img/products/01-Fresh/01_18a.jpg" alt="alt">
                                                        </a>
                                                        <div class="ps-product__content"><a class="ps-product__name" href="{{route('product' ,$ProductCartItem->options->slug )}}">{{ $ProductCartItem->name }}</a>
                                                            <p class="ps-product__meta"> <span class="ps-product__price">{{ $ProductCartItem->price }} ₺</span><span class="ps-product__quantity">X{{ $ProductCartItem->qty }}</span>
                                                            </p>
                                                        </div>
                                                        <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                    </div>
                                                </li>

                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="mini-cart__footer row">
                                            <p class="col-6 title">ARA TUTAR</p>
                                            <div class="col-6 text-right total">{{ cart::subtotal() }}</div>

                                            <div class="col-12 d-flex"><a class="view-cart" href="{{ route('shoppingCart') }}">Sepeti Görüntüle</a><a class="{{ route('payment') }}" href="">Ödeme Yap</a></div>
                                        </div>
                                        @else
                                        <div class="text-center">
                                            <img style="padding:50px;" src="{{asset('farmart/')}}/img/shoppingcart.png" width="250"  class="img-fluid" alt="Boş Sepet">
                                            <p style="font-size:15px; color:black;"><strong>ÜZGÜNÜZ SEPETİNİZDE ÜRÜN BULUNMAMAKTADIR.</strong></p>
                                        <button style=" background-color:#ff7200; font-size:12px; color:#fff; border:1px solid #ff7200; padding:5px;"  type="submit"  value="ALIŞVERİŞE GİT"> <a href="{{ route('homepage') }}">ALIŞVERİŞE GİT</a></button>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="navigation">
            <div class="container">
                <ul class="menu">
                    <li class="menu-item-has-children has-mega-menu "><a class="nav-link " href="{{ route('homepage')}}">ANASAYFA</a>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">YEMEKLER</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu mega-shop">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Shop Pages<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li> <a href="shop-view-grid.html">Shop Default View Grid</a>
                                    </li>
                                    <li> <a href="shop-view-listing.html">Shop Default View Listing</a>
                                    </li>
                                    <li> <a href="shop-view-extended.html">Shop Default View Products</a>
                                    </li>
                                    <li> <a href="shop-categories.html">Shop Categories</a>
                                    </li>
                                    <li> <a href="shop-with-banner.html">Shop With Banner</a>
                                    </li>
                                    <li> <a href="shop-all-brands.html">Shop All Brands</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">SATICI</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Page all<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li> <a href="vendor-registration.html">Vendor Register</a>
                                    </li>
                                    <li> <a href="become-a-vendor.html">Become a Vendor</a>
                                    </li>
                                    <li> <a href="store-list.html">Dokan Store List</a>
                                    </li>
                                    <li> <a href="vendor-store.html">Dokan Vendor Store</a>
                                    </li>
                                    <li> <a href="flash-sale.html">Flash Sale</a>
                                    </li>
                                    <li> <a href="about-us.html">About Us</a>
                                    </li>
                                    <li> <a href="contact.html">Contact</a>
                                    </li>
                                    <li> <a href="faq.html">FAQs</a>
                                    </li>
                                    <li> <a href="404-not-found.html">404 Not Found</a>
                                    </li>
                                    <li> <a href="coming-soon.html">Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">BLOG</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Blog Type<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li> <a href="blog-default.html">01 Blog-Default</a>
                                    </li>
                                    <li> <a href="blog-thumbnail.html">Blog Small Thumbnail</a>
                                    </li>
                                    <li> <a href="blog-gird.html">Blog Gird</a>
                                    </li>
                                    <li> <a href="blog-list.html">Blog Listing</a>
                                    </li>
                                    <li> <a href="single-post.html">Single Post without Sidebar</a>
                                    </li>
                                    <li> <a href="single-post-sidebar.html">Single Post with Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">SİPARİŞLER</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                        <div class="mega-menu">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Blog Type<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li> <a href="blog-default.html">01 Blog-Default</a>
                                    </li>
                                    <li> <a href="blog-thumbnail.html">Blog Small Thumbnail</a>
                                    </li>
                                    <li> <a href="blog-gird.html">Blog Gird</a>
                                    </li>
                                    <li> <a href="blog-list.html">Blog Listing</a>
                                    </li>
                                    <li> <a href="single-post.html">Single Post without Sidebar</a>
                                    </li>
                                    <li> <a href="single-post-sidebar.html">Single Post with Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="navigation-text">
                    <ul class="menu">
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">En Son Görüntüledikleriniz</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <div class="mega-menu recent-view">
                                <div class="mega-anchor"></div>
                                <div class="container">
                                    <div class="slick-many-item"><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_1a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_2a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_30a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_10a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_18a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_28b.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_16a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_31a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_15a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_5a.jpg" alt="alt"></a><a class="recent-item" href="shop-categories.html">
                                        <img src="{{ asset('farmart/') }}/img/products/01-Fresh/01_32a.jpg" alt="alt"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mobile-search--slidebar">
            <div class="mobile-search--content">
                <div class="mobile-search__header">
                    <div class="mobile-search-box">
                        <div class="input-group">
                            <input class="form-control" placeholder="I'm shopping for..." id="inputSearchMobile">
                            <div class="input-group-append">
                                <button class="btn"> <i class="icon-magnifier"></i></button>
                            </div>
                        </div>
                        <button class="cancel-search"><i class="icon-cross"></i></button>
                    </div>
                </div>
                <div class="mobile-search__trendding">
                    <h5> <i class="icon-power"></i>Trending search</h5>
                    <div class="trending-content">
                        <ul class="mobile-list-trending">
                            <li class="title"> <a>Trending search: </a>
                            </li>
                            <li class="trending-item"> <a href="#">meat</a>
                            </li>
                            <li class="trending-item"> <a href="#">fruit</a>
                            </li>
                            <li class="trending-item"> <a href="#">vegetables</a>
                            </li>
                            <li class="trending-item"> <a href="#">salad</a>
                            </li>
                            <li class="trending-item"> <a href="#">yoghurts</a>
                            </li>
                            <li class="trending-item"> <a href="#">apple</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-search__history">
                    <h5> <i class="icon-history2"></i>History<a href="javascript:void(0);">Clear all</a></h5>
                    <div class="history-content">
                        <ul class="history-list">
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>apple</span><i class="icon-cross2"></i></a></li>
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>organic fruit</span><i class="icon-cross2"></i></a></li>
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>meat beef</span><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-search__result">
                    <h5> <span class="number-result">5</span>search result</h5>
                    <ul class="list-result">
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_18a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html"><u>Organic</u> Large Green Bell Pepper</a>
                                    <p class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected="selected">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><span>(5)</span>
                                    </p>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$6.90</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_16a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Avocado <u>Organic</u> Hass Large</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_32a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Tailgater Ham <u>Organic</u> Sandwich</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_6a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Extreme <u>Organic</u> Light Can</a>
                                    <p class="ps-product__rating">
                                        <select class="rating-stars">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select><span>(16)</span>
                                    </p>
                                    <p class="ps-product__meta"> <span class="ps-product__price-sale">$4.99</span><span class="ps-product__is-sale">$8.99</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="product-default.html"><img class="ps-product__thumbnail" src="img/products/01-Fresh/01_22a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="product-default.html">Extreme <u>Organic</u> Light Can</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$12.99</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

