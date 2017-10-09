
@extends('UserPage.mainpage')

    @section('contents')

        <!--Design for Caruosel Slide-->
        <div class="animation">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="slideCarousel">
                    <div class="carousel-inner" style="margin-top: -20px">

                        <div class="item active">
                            <img src={{asset('image/slide/slide1.jpg')}} alt="carosel1" style="width:100%">

                            <div class="slide-description">
                                <h4 class="text-center">
                                    From Our Chef
                                </h4>
                                <h1 class="text-center">
                                    MEETING THE <br>
                                    LEGEND
                                </h1>
                                <h3 class="text-center">
                                    THE CALIFORNIA
                                </h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src={{asset('image/slide/slide2.jpg')}} alt="carosel2" style="width:100%">

                            <div class="slide-description">
                                <h4 class="text-center">
                                    New Testing
                                </h4>
                                <h1 class="text-center">
                                    THE PIZZA
                                </h1>
                                <h3 class="text-center">
                                    WITH SEAFOOD
                                </h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src={{asset('image/slide/slide3.jpg')}} alt="carosel3" style="width:100%">

                            <div class="slide-description">
                                <h4 class="text-center">
                                    Hot Stuff
                                </h4>
                                <h1 class="text-center">
                                    BURGER
                                </h1>
                                <h3 class="text-center">
                                    THE MEXICAN
                                </h3>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{--Design for Three Food Feature--}}
        <div class="foodFeature">

            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 " >
                        <div class="carousel-inner" style="padding-bottom: 20px">
                            <img src="{{asset('image/homepage/featurefood1.png')}}">
                            <div class="carousel-caption">
                                <h1>For Vegans</h1>
                                <p  style="color: white">Burger + French Fries + Drink</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 " >
                        <div class="carousel-inner" style="padding-bottom: 20px">
                            <img src="{{asset('image/homepage/featurefood3.png')}}">
                            <div class="carousel-caption">
                                <h1>Order Online</h1>
                                <p  style="color: white">+885 77 668 112</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 " >
                        <div class="carousel-inner" style="padding-bottom: 20px">
                            <img src="{{asset('image/homepage/featurefood2.png')}}">
                            <div class="carousel-caption">
                                <h1>Cakes Specials</h1>
                                <p style="color: white">Every Friday Only $0.99</p>
                            </div>
                        </div>
                    </div>

                </div> <!--end class row in foodFeature-->
            </div>

        </div> <!--end class foodFeature-->

        {{--Design menu food title--}}
        <div class="page-header">
            <div class="container-fluid">
                <h1>Our Menu</h1>
            </div>
        </div>

        <!--Design for Food Menu-->
        <div class="menuFood">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heroSlider-fixed">
                        <div class="overlay"></div>
                        <!-- Slider -->
                        <div class="slider responsive">
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger5.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger6.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger8.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger7.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger4.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger9.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger1.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger2.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/burger3.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/desert1.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/desert2.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/desert3.png')}}">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('image/homepage/desert4.png')}}">
                            </div>
                        </div>
                        <!-- control arrows -->
                        <div class="prev">
                            <span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>
                        </div>
                        <div class="next">
                            <span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!--end class menuFood-->

        {{--parallax animation background--}}
        <div class="parallax-animate">
            <div class="animation-bg"></div>
            <div class="text-bg">
                <h2>
                    <span style="color: red;letter-spacing: -5px">____________ </span>
                    &nbsp;&nbsp;Free Delivery
                    <span style="color: red; letter-spacing: -5px">____________ </span>
                </h2>
                <h1>SANDWICH DAY</h1>
                <p>$3<small style="font-size: 40px">99</small> <br> <br>
                    <span>
                        <a href="{{url('/contactus')}}">
                            <button class="btn btn-success btn-lg">Send Us Feedback</button>
                        </a>
                    </span>
                </p>
            </div>
        </div>

    @endsection




