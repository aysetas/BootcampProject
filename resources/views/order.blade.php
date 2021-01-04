@extends('layouts.master')
@section('title' , 'Orders')
@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="active"><a href="shop.html">Shop</a></li>
                <li><a href="javascript:void(0);">Checkout</a></li>
            </ul>
        </div>
    </div>
    <section class="section--checkout">
        <div class="container">
            <h2 class="page__title">Checkout</h2>
            <div class="checkout__content">
                <div class="checkout__header">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="checkout__header__box">
                                <p><i class="icon-user"></i>Returning customer? <a href="#">Click here to login</a></p><i class="icon-chevron-down"></i>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="checkout__header__box">
                                <p><i class="icon-tags"></i>Have a coupon? <a href="#">Click here to renter your code</a></p><i class="icon-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h3 class="checkout__title">Billing Details</h3>
                        <div class="checkout__form">
                            <form>
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>First name: <span>*</span></label>
                                        <input class="form-control" type="text" required="">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Last name<span>*</span></label>
                                        <input class="form-control is-invalid" type="text" required="">
                                        <div class="invalid-feedback">Please enter last name!</div>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Company name (optional)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Country: <span>*</span></label>
                                        <select class="single-select2" name="state">
                                            <option value="uk">United Kingdom</option>
                                            <option value="vn">Viet Nam</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Street address: <span>*</span></label>
                                        <input class="form-control" type="text" placeholder="House number and street name">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Postcode/ ZIP (optional)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Town/ City: <span>*</span></label>
                                        <input class="form-control" type="text" required="">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Phone: <span>*</span></label>
                                        <input class="form-control" type="text" required="">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Email address: <span>*</span></label>
                                        <input class="form-control" type="email" required="">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="label-checkbox">Create an account?</label>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="label-checkbox"><b>Ship to a different address?</b></label>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Order notes (optional)</label>
                                        <textarea class="form-control" placeholder="Note about your orders, e.g special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <h3 class="checkout__title">Your Order</h3>
                        <div class="checkout__products">
                            <div class="row">
                                <div class="col-8">
                                    <div class="checkout__label">PRODUCT</div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="checkout__label">TOTAL</div>
                                </div>
                            </div>
                            <div class="checkout__list">
                                <div class="checkout__product__item">
                                    <div class="checkout-product">
                                        <div class="product__name">Extreme Budweiser Light Can<span>(x1)</span></div>
                                        <div class="product__unit">500g</div>
                                    </div>
                                    <div class="checkout-price">$3.90</div>
                                </div>
                                <div class="checkout__product__item">
                                    <div class="checkout-product">
                                        <div class="product__name">Honest Organic Still Lemonade<span>(x1)</span></div>
                                        <div class="product__unit">100g</div>
                                    </div>
                                    <div class="checkout-price">$5.99</div>
                                </div>
                                <div class="checkout__product__item">
                                    <div class="checkout-product">
                                        <div class="product__name">Matures Own 100% Wheat<span>(x1)</span></div>
                                        <div class="product__unit">1.5L</div>
                                    </div>
                                    <div class="checkout-price">$12.90</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="checkout__label">Subtotal</div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="checkout__label">$22.79</div>
                                </div>
                            </div>
                            <hr>
                            <div class="checkout__label">Shipping</div>
                            <p>Free shipping</p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="checkout__total">Total</div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="checkout__money">$22.79</div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__payment">
                            <div class="checkout__label mb-3">SELECT PAYMENT</div>
                            <div class="form-group--block">
                                <input class="form-check-input" type="checkbox" id="checkboxBank" value="bank">
                                <label class="label-checkbox" for="checkboxBank"><b class="text-heading">Direct bank transfer</b></label>
                            </div>
                            <div class="form-group--block">
                                <input class="form-check-input" type="checkbox" value="cash" id="checkboxCash" checked="checked">
                                <label class="label-checkbox" for="checkboxCash"><b class="text-heading">Cash on delivery</b></label>
                            </div>
                            <div class="checkout__payment__detail">Pay with cash upon delivery
                                <div class="triangle-box">
                                    <div class="triangle"></div>
                                </div>
                            </div>
                            <div class="form-group--block">
                                <input class="form-check-input" type="checkbox" id="checkboxPaypal" value="paypal">
                                <label class="label-checkbox" for="checkboxPaypal"><b class="text-heading">PayPal </b><img src="img/promotion/payment_visa.jpg" alt=""><img src="img/promotion/payment_mastercart.jpg" alt=""><img src="img/promotion/payment_electron.jpg" alt=""><a>What is PayPal?</a></label>
                            </div>
                        </div>
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <span class="text-success">privacy policy.</span></p>
                        <div class="form-group--block">
                            <input class="form-check-input" type="checkbox" id="checkboxAgree" value="agree">
                            <label class="label-checkbox" for="checkboxAgree"><b class="text-heading">I have read and agree to the website
                  <u class="text-success">terms and conditions  </u><span>*</span></b></label>
                        </div><a class="checkout__order" href="order-tracking.html">Place an order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
