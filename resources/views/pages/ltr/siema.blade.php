@extends('layouts.ltr.main')
@section('content')

    <style>
        .wrap-of-carousel {
            width: 100%;
            height: auto;
            margin: auto;
            text-align: center;
            position: relative;
        }

        .carousel-image {
            position: relative;
            /*width:100%;*/
            /*height: auto;*/
        }

        .testimonial-content {
            width: 70%;
            margin: 0 auto;
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            color: #fff;
            height: 100px;
        }

        .client-testimonial {
            font-family: 'Bree Serif', serif;
            font-size: 3rem;
            line-height: 3.2rem;
            color: #fff;
            font-weight: 400;
        }

        .carousel-name {
            font-family: 'Bree Serif', serif;
            font-size: 3.1rem;
            line-height: 3.2rem;
            color: #fff;
            font-weight: 400;
        }

        .buttons {
            position: relative;
        }

        .buttons .prev {
            background: none;
            border: medium none;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 30px;
            height: 30px;
            position: absolute;
            top: 50%;
            width: 30px;
            left: 5%;
        }

        .buttons .next {
            background: none;
            border: medium none;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 30px;
            height: 30px;
            position: absolute;
            top: 50%;
            width: 30px;
            right: 5%;
        }

        .buttons .prev:before {
            content: '\2190';
        }

        .buttons .next:after {
            content: '\2192';
        }


    </style>



    <section>
        <!-- first slider -->
        <div class="siema">
            <div class="wrap-of-carousel">
                <img class="carousel-image"
                     src="http://imanage.bmbc.co/wp-content/themes/iManage/testimonial-background.jpg" alt=""/>
                <div class="testimonial-content">
                    <div class="client-testimonial">i manage built our franchise system, they played a major role in
                        dealing with franchise leads and building our infrastructure to support that significant growth
                        we had.
                    </div>
                    <h2 class="carousel-name">Imad Massaad</h2>
                </div>
            </div>
            <div class="wrap-of-carousel">
                <img class="carousel-image"
                     src="http://imanage.bmbc.co/wp-content/themes/iManage/testimonial-background.jpg" alt=""/>
                <div class="testimonial-content">
                    <div class="client-testimonial">i manage built our franchise system, they played a major role in
                        dealing with franchise leads and building our infrastructure to support that significant growth
                        we had.
                    </div>
                    <h2 class="carousel-name">roxana </h2>
                </div>
            </div>
            <div class="wrap-of-carousel">
                <img class="carousel-image"
                     src="http://imanage.bmbc.co/wp-content/themes/iManage/testimonial-background.jpg" alt=""/>
                <div class="testimonial-content">
                    <div class="client-testimonial">i manage built our franchise system, they played a major role in
                        dealing with franchise leads and building our infrastructure to support that significant growth
                        we had.
                    </div>
                    <h2 class="carousel-name">najm</h2>
                </div>
            </div>
            <div class="wrap-of-carousel">
                <img class="carousel-image"
                     src="http://imanage.bmbc.co/wp-content/themes/iManage/testimonial-background.jpg" alt=""/>
                <div class="testimonial-content">
                    <div class="client-testimonial">i manage built our franchise system, they played a major role in
                        dealing with franchise leads and building our infrastructure to support that significant growth
                        we had.
                    </div>
                    <h2 class="carousel-name">alina</h2>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button class="prev"></button>
            <button class="next"></button>
        </div>
        <!-- end of first slider -->


    </section>



    <script type="text/javascript" src="{{asset("assets/js/siema.min.js")}}"></script>

    <script>

        //first slider
        mySiema = new Siema({
            selector: '.siema',
            duration: 1000,
            easing: 'ease-out',
            perPage: 1,
            startIndex: 0,
            draggable: true,
            threshold: 20,
            loop: true
        });


        prev = jQuery('.prev');
        next = jQuery('.next');

        jQuery('.buttons .prev').on('click', function () {
            mySiema.prev();
        });
        jQuery('.buttons .next').on('click', function () {
            mySiema.next();
        });

        setInterval(function () {
            mySiema.next();
        }, 2000);

        // end of first slider


    </script>


@stop