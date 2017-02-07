@extends('layouts.ltr.main')
@section('content')


    <div class="page-title-img">
        <img class="img-full" alt="page title img" src="assets/images/headers/gallery.png">
        <div class="page-title">
            <div class="container">
                <h1>Gallery</h1>
                <p>Lorem ipsum dolor sit amet</p>
            </div><!-- .container -->
        </div>
    </div><!-- .page-title-img -->

    <section>
        <div class="container">
            <h1 class="bottom-line">Gallery</h1>
            <p class="text-center"><em>When gliding by the Bashee isles we emerged at last upon the great South Sea.</em></p>
            <div class="text-center">
                Filter:
                <ul id="gallery-filter" class="list-filter">
                    <li><a class="isotope-filter active" data-filter="*">All</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-pizza">Pizza</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-sandwiches">Sandwiches</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-hamburgers">Hamburgers</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-wordpress">Wordpress</a></li>
                    <li><a class="isotope-filter" data-filter=".filter-photoshop">Photoshop</a></li>
                </ul>
            </div>
            <div id="gallery" class="gallery row">
                <div class="col-md-4 col-sm-6 col-xs-12 grid-sizer"></div><!-- basic size of the grid -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-pizza filter-sandwiches filter-wordpress">
                    <img alt="photo" src="assets/images/gallery3/1.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/1.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-sandwiches filter-wordpress">
                    <img alt="photo" src="assets/images/gallery3/2.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/2.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-pizza filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/3.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/3.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-hamburgers filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/4.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/4.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-pizza filter-sandwiches filter-hamburgers">
                    <img alt="photo" src="assets/images/gallery3/5.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/5.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-sandwiches filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/6.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/6.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-pizza filter-photoshop">
                    <img alt="photo" src="assets/images/gallery3/7.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/7.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item filter-hamburgers filter-wordpress">
                    <img alt="photo" src="assets/images/gallery3/8.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/8.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
                <div class="col-md-4 col-sm-6 col-xs-12 gallery-item dark-cover filter-pizza filter-sandwiches filter-hamburgers">
                    <img alt="photo" src="assets/images/gallery3/9.jpg">
                    <div class="gallery-item-detail">
                        <div class="row">
                            <div class="col-sm-7 hidden-xs">
                                <h4 class="gallery-item-heading">HOT PEPPERONI</h4>
                                pizza, salads, design
                            </div>
                            <div class="col-sm-5 text-right">
                                <a href="assets/images/gallery3/9.jpg" class="gallery-detail-icon" data-lightbox="gallery-images"><i class="fa fa-search"></i></a>
                                <a href="#" class="gallery-detail-icon"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .gallery-item -->
            </div><!-- .gallery -->
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