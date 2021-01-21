@extends('layouts.master')
@section('title' , $product->product_name )
@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="{{ route('homepage') }}">Anasayfa</a></li>

                <li><a href="javascript:void(0);">{{ $product->product_name }}</a></li>
            </ul>
        </div>
    </div>
    <section class="section--product-type section-product--default">
        <div class="container">
            <div class="product__header">
                <h3 class="product__name">{{ $product->product_name}}</h3>
                <div class="row">
                    <div class="col-12 col-lg-7 product__code">
                        <select class="rating-stars">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected="selected">4</option>
                            <option value="5">5</option>
                        </select><span class="product__review">4 Customer Review</span><span class="product__id">SKU: <span>#VEG20938</span></span>
                    </div>
                </div>
            </div>
            <div class="product__detail">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="ps-product--detail">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product__variants">
                                        <div class="ps-product__gallery">
                                            <div class="ps-gallery__item active"><img src="{{asset('farmart/')}}/img/products/01-Fresh/01_35a.jpg" alt="alt"></div>
                                            <div class="ps-gallery__item"><img src="{{asset('farmart/')}}/img/products/01-Fresh/01_35b.jpg" alt="alt"></div>
                                            <div class="ps-gallery__item" data-video-url="https://sachinchoolur.github.io/lightGallery/static/videos/video4.mp4"><img src="{{asset('farmart/')}}/img/products/01-Fresh/01_35b.jpg" alt="alt">
                                                <ul class="ps-gallery--poster">
                                                    <li><span></span><i class="fa fa-play-circle"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ps-product__thumbnail">
                                            <div class="ps-product__zoom"><img id="ps-product-zoom" src="{{asset('farmart/')}}/img/products/01-Fresh/01_35b.jpg" alt="alt">
                                                <ul class="ps-gallery--poster" id="ps-lightgallery-videos" data-video-url="#">
                                                    <li data-html="#video-play"><span></span><i class="fa fa-play-circle"></i></li>
                                                </ul>
                                            </div>
                                            <div style="display:none;" id="video-play">
                                                <video class="lg-video-object lg-html5" controls="controls" preload="none">
                                                    <source src="#" type="video/mp4">Your browser does not support HTML5 video.
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label>Fiyatı:</label>
                                    <div class="ps-product__price">{{ $product->price }} TL</div>

                                    <div class="ps-product__shopping">
                                        <form action="{{ route('shoppingCart.add') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <button style="border:1px solid #ff7200" type="submit" class="ps-product__addcart ps-button" data-toggle="modal"  data-target="#popupAddToCart" ><i class="icon-cart"></i>SEPETE EKLE</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="product__content">
                                    <ul class="nav nav-pills" role="tablist" id="productTabDetail">
                                        <li class="nav-item"><a class="nav-link" id="description-tab" data-toggle="tab" href="#description-content" role="tab" aria-controls="description-content" aria-selected="true">Description</a></li>
                                        <li class="nav-item"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews-content" role="tab" aria-controls="reviews-content" aria-selected="false">Reviews(4)</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade" id="description-content" role="tabpanel" aria-labelledby="description-tab">
                                            <p class="block-content">{{ $product->content }}</p>
                                        </div>
                                         <div class="tab-pane fade" id="reviews-content" role="tabpanel" aria-labelledby="reviews-tab">
                                            <div class="ps-product--reviews">
                                                <div class="row">
                                                    <div class="col-12 col-lg-5">
                                                        <div class="review__box">
                                                            <div class="product__rate">4.5</div>
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                            <p>Avg. Star Rating: <b class="text-black">(4 reviews)</b></p>
                                                            <div class="review__progress">
                                                                <div class="progress-item"><span class="star">5 Stars</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div><span class="percent">80%</span>
                                                                </div>
                                                                <div class="progress-item"><span class="star">4 Stars</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div><span class="percent">20%</span>
                                                                </div>
                                                                <div class="progress-item"><span class="star">3 Stars</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div><span class="percent">0%</span>
                                                                </div>
                                                                <div class="progress-item"><span class="star">2 Stars</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div><span class="percent">0%</span>
                                                                </div>
                                                                <div class="progress-item"><span class="star">1 Stars</span>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div><span class="percent">0%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-7">
                                                        <div class="review__title">Add A Review</div>
                                                        <p class="mb-0">Your email will not be published. Required fields are marked <span class="text-danger">*</span></p>
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="col-12 form-group--block">
                                                                    <div class="input__rating">
                                                                        <label>Your rating: <span>*</span></label>
                                                                        <select class="rating-stars">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4" selected="selected">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 form-group--block">
                                                                    <label>Review: <span>*</span></label>
                                                                    <textarea class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-12 col-lg-6 form-group--block">
                                                                    <label>Name: <span>*</span></label>
                                                                    <input class="form-control" type="text" required="">
                                                                </div>
                                                                <div class="col-12 col-lg-6 form-group--block">
                                                                    <label>Email:</label>
                                                                    <input class="form-control" type="email">
                                                                </div>
                                                                <div class="col-12 form-group--block">
                                                                    <button class="btn ps-button ps-btn-submit">Submit Review</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="ps--comments">
                                                    <h5 class="comment__title">4 Comments</h5>
                                                    <ul class="comment__list">
                                                        <li class="comment__item">
                                                            <div class="item__avatar"><img src="img/blogs/comment_avatar1.png" alt="alt"></div>
                                                            <div class="item__content">
                                                                <div class="item__name">Elyn Y.</div>
                                                                <div class="item__date">- June 14, 2020</div>
                                                                <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                                                <div class="item__rate">
                                                                    <select class="rating-stars">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4" selected="selected">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                </div>
                                                                <p class="item__des">Farmart is great. Farmart is the most valuable business resource we have EVER purchased.</p>
                                                            </div>
                                                        </li>
                                                        <li class="comment__item">
                                                            <div class="item__avatar"><img src="img/blogs/comment_avatar2.png" alt="alt"></div>
                                                            <div class="item__content">
                                                                <div class="item__name">Rick E.</div>
                                                                <div class="item__date">- June 14, 2020</div>
                                                                <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                                                <div class="item__rate">
                                                                    <select class="rating-stars">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4" selected="selected">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                </div>
                                                                <p class="item__des">Farmart is great. Farmart is the most valuable business resource we have EVER purchased. .</p>
                                                            </div>
                                                        </li>
                                                        <li class="comment__item">
                                                            <div class="item__avatar"><img src="img/blogs/comment_no_avatar.png" alt="alt"></div>
                                                            <div class="item__content">
                                                                <div class="item__name">Timmi Y.</div>
                                                                <div class="item__date">- June 13, 2020</div>
                                                                <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                                                <div class="item__rate">
                                                                    <select class="rating-stars">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5" selected="selected">5</option>
                                                                    </select>
                                                                </div>
                                                                <p class="item__des">Farmart is great. Farmart is the most valuable business resource we have EVER purchased. e.</p>
                                                            </div>
                                                        </li>
                                                        <li class="comment__item">
                                                            <div class="item__avatar"><img src="img/blogs/comment_no_avatar.png" alt="alt"></div>
                                                            <div class="item__content">
                                                                <div class="item__name">Jack F.</div>
                                                                <div class="item__date">- June 05, 2020</div>
                                                                <div class="item__check"> <i class="icon-checkmark-circle"></i>Verified Purchase</div>
                                                                <div class="item__rate">
                                                                    <select class="rating-stars">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5" selected="selected">5</option>
                                                                    </select>
                                                                </div>
                                                                <p class="item__des">Farmart is great. Farmart is the most valuable business resource we have EVER purchased. I have gotten at least 50 times the value from Farmart. I just  it off to everyone.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="ps-product--extention">
                            <div class="extention__block">
                                <div class="extention__item">
                                    <div class="extention__icon"><i class="icon-truck"></i></div>
                                    <div class="extention__content"> <b class="text-black">Free Shipping </b>apply to all orders over <span class="text-success">$100</span></div>
                                </div>
                            </div>
                            <div class="extention__block">
                                <div class="extention__item">
                                    <div class="extention__icon"><i class="icon-leaf"></i></div>
                                    <div class="extention__content">Guranteed <b class="text-black">100% Organic </b>from natural farmas </div>
                                </div>
                            </div>
                            <div class="extention__block">
                                <div class="extention__item border-none">
                                    <div class="extention__icon"><i class="icon-repeat-one2"></i></div>
                                    <div class="extention__content"> <b class="text-black">1 Day Returns </b>if you change your mind</div>
                                </div>
                            </div>
                            <div class="extention__block extention__contact">
                                <p> <span class="text-black">Hotline Order: </span>Free 7:00-21:30</p>
                                <h4 class="extention__phone">970978-6290</h4>
                                <h4 class="extention__phone">970343-8888</h4>
                            </div>
                            <p class="extention__footer">Become a Vendor? <a href="register.html">Register now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
