@extends('layouts.ltr.main')
@section('content')


    <div class="page-title-img">
        <img class="img-full" alt="page title img" src="assets/images/headers/contact.png">
        <div class="page-title">
            <div class="container">
                <h1>Contact</h1>
                <p>Lorem ipsum dolor sit amet</p>
            </div><!-- .container -->
        </div>
    </div><!-- .page-title-img -->

    <section>
        <div class="container">
            <h3 class="text-center text-uppercase">Find our store near you</h3>
            <div class="map-container">
                <div id="map-canvas">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-uppercase">Say Hello!</h3>
                    <form id="form-contact" class="form-big" action="assets/php/send_email.php" method="post" data-email-not-set-msg="Email is required" data-message-not-set-msg="Message is required" data-name-not-set-msg="Name is required" data-ajax-fail-msg="Request could not be sent, try later" data-success-msg="Email successfully sent.">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" placeholder="Message"></textarea>
                        <div class="return-msg"></div>
                        <div class="text-right">
                            <input class="button-yellow button-text-low button-long button-low" type="submit" value="Submit">
                        </div>
                    </form>
                    <div class="margin-20"></div>
                </div>
                <div class="col-md-4">
                    <h3 class="text-uppercase">Information</h3>
                    <address class="address-big">
                        <p>
                            Pizzeria Head Office<br>
                            54866 2nd Road NY 48766<br>
                            Ney York, U.S.A
                        </p>
                        <p>
                            Make Reservations: 0 800 111 555 666<br>
                            Email: info@yourdomain.com
                        </p>
                    </address>
                </div>
            </div>
        </div><!-- .container -->
    </section>

    <section id="cart">
        <div class="container">
            <div class="cart-content">
                <div class="cart-close cart-trigger"><i class="fa fa-close"></i></div>
                <div class="border-lines-container">
                    <h1 class="no-top-margin border-lines">Cart</h1>
                </div>
                <form>
                    <div class="product-preview-small">
                        <div class="product-img">
                            <img alt="product photo" src="assets/images/products/1_small.png">
                        </div>
                        <div class="product-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="product-title">Vegetarian Pizza</h4>
                                    Price $7.00/, order
                                    <div class="product-pieces">
                                        <input type="text" value="12">
                                        <div class="product-pieces-up"></div>
                                        <div class="product-pieces-down"></div>
                                    </div>
                                    pieces
                                </div>
                                <div class="col-md-4 product-price">
                                    $75.0
                                </div>
                            </div>
                        </div><!-- .product-content -->
                    </div><!-- .product-preview-small -->
                    <div class="product-preview-small">
                        <div class="product-img">
                            <img alt="product photo" src="assets/images/products/1_small.png">
                        </div>
                        <div class="product-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="product-title">Vegetarian Pizza</h4>
                                    Price $4.50, order
                                    <div class="product-pieces">
                                        <input type="text" value="3">
                                        <div class="product-pieces-up"></div>
                                        <div class="product-pieces-down"></div>
                                    </div>
                                    pieces
                                </div>
                                <div class="col-md-4 product-price">
                                    $18.0
                                </div>
                            </div>
                        </div><!-- .product-content -->
                    </div><!-- .product-preview-small -->
                    <div class="product-preview-small">
                        <div class="product-img">
                            <img alt="product photo" src="assets/images/products/1_small.png">
                        </div>
                        <div class="product-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="product-title">Vegetarian Pizza</h4>
                                    Price $9.00, order
                                    <div class="product-pieces">
                                        <input type="text" value="1">
                                        <div class="product-pieces-up"></div>
                                        <div class="product-pieces-down"></div>
                                    </div>
                                    pieces
                                </div>
                                <div class="col-md-4 product-price">
                                    $31.0
                                </div>
                            </div>
                        </div><!-- .product-content -->
                    </div><!-- .product-preview-small -->
                    <div class="product-preview-small">
                        <div class="product-img">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="product-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="product-title">Delivery</h4>
                                    Price $2.50, order
                                    <div class="product-pieces product-pieces-readonly">
                                        <input type="text" value="1" readonly>
                                        <div class="product-pieces-up"></div>
                                        <div class="product-pieces-down"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-price">
                                    $2.5
                                </div>
                            </div>
                        </div><!-- .product-content -->
                    </div><!-- .product-preview-small -->
                    <hr>
                    <p class="text-right text-bigger">Total: $125.0</p>
                    <div class="row text-xs-center">
                        <div class="col-sm-6">
                            <input class="button-yellow button-text-low button-long button-low" type="submit" value="Update cart">
                        </div>
                        <div class="col-sm-6 text-right text-xs-center">
                            <div class="margin-15"></div>
                            <a href="#section-delivery" class="button-yellow button-text-low button-long button-low scroll-to cart-trigger">Delivery</a>
                        </div>
                    </div>
                </form>
            </div><!-- .cart-content -->
        </div><!-- .container -->
    </section><!-- #cart -->


@stop