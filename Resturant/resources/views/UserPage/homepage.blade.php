
@extends('UserPage.mainpage')

    @section('contents')

        {{--Design for Caruosel Slide--}}
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
                            <img src="{{asset('image/homepage/carousel1.png')}}" alt="carosel1" style="width:100%">
                        </div>

                        <div class="item">
                            <img src="{{asset('image/homepage/carousel2.png')}}" alt="carosel1" style="width:100%">
                        </div>

                        <div class="item">
                            <img src="{{asset('image/homepage/carousel3.png')}}" alt="carosel1" style="width:100%">
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

        {{--Design for Food Menu--}}
        <div class="menuFood">
            <div class="container">

                <div id="menuCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 thumbnail">
                                    <div class="foodImage">
                                        <img class="img-responsive" src="{{ asset('image/homepage/menuSalad.png') }}">
                                    </div>
                                    <div class="foodName" style="text-align: center">
                                        <h4>Salad</h4>
                                    </div>
                                    <div class="foodPrice"  style="text-align: center">
                                        <h2 style="color: crimson">$7</h2>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 thumbnail">
                                    <div class="foodImage">
                                        <img class="img-responsive" src="{{ asset('image/homepage/menuDeserts.png') }}">
                                    </div>
                                    <div class="foodName"  style="text-align: center">
                                        <h4>Desert</h4>
                                    </div>
                                    <div class="foodPrice"  style="text-align: center">
                                        <h2 style="color: crimson">$3</h2>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="item ">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 thumbnail">
                                    <div class="foodImage">
                                        <img class="img-responsive" src="{{ asset('image/homepage/menuDrink.png') }}">
                                    </div>
                                    <div class="foodName" style="text-align: center">
                                        <h4>Coca Cola</h4>
                                    </div>
                                    <div class="foodPrice"  style="text-align: center">
                                        <h2 style="color: crimson">$1</h2>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 thumbnail">
                                    <div class="foodImage">
                                        <img class="img-responsive" src="{{ asset('image/homepage/menuDrink2.png') }}">
                                    </div>
                                    <div class="foodName"  style="text-align: center">
                                        <h4>Cook-tail</h4>
                                    </div>
                                    <div class="foodPrice"  style="text-align: center">
                                        <h2 style="color: crimson">$4</h2>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="item ">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 thumbnail">
                                    <div class="foodImage">
                                        <img class="img-responsive" src="{{ asset('image/homepage/menuPizza.png') }}">
                                    </div>
                                    <div class="foodName" style="text-align: center">
                                        <h4>Chess-Crust</h4>
                                    </div>
                                    <div class="foodPrice"  style="text-align: center">
                                        <h2 style="color: crimson">$21</h2>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 thumbnail">
                                    <div class="foodImage">
                                        <img class="img-responsive" src="{{ asset('image/homepage/menuPizza2.png') }}">
                                    </div>
                                    <div class="foodName"  style="text-align: center">
                                        <h4>Sea-Chess-Crust</h4>
                                    </div>
                                    <div class="foodPrice"  style="text-align: center">
                                        <h2 style="color: crimson">$18</h2>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#menuCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#menuCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div> <!--end class carousel slide-->

            </div> <!--end class container in menuFood-->
        </div> <!--end class menuFood-->

    @endsection




