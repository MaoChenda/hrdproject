@extends('UserPage.mainpage')
@section('title', 'Desert')
@section('contents')

    <!--image for menu page-->
    <div class="menuImage">
        <img src="{{asset('image/menu/desertsmenu.PNG')}}">
    </div>

    <!--Design for menu-->
    <div class="menu">
        <div class="container">
            <div class="jumbotron">

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <div class="foodName">
                            <h4>
                                Chocolate Hand Spun
                                <span>
                                    <img src="{{asset('image/sweet/chocolate-hand-spun.jpg')}}">
                                </span>
                            </h4>
                        </div>
                        <div class="foodDescription">
                            <p>Chocolate / Crimes / Sweet / Grain</p>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <div class="foodPrice">
                            <h4>$2.00</h4>
                        </div>
                        <button class="btn btn-success my-cart-btn" data-id="37" data-name="product 37"
                                data-summary="summary 37" data-price="2.00" data-quantity="1"
                                data-image="image/sweet/chocolate-hand-spun.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <div class="foodName">
                            <h4>
                                Dutch Apple-pie
                                <span>
                                    <img src="{{asset('image/sweet/dutch-apple-pie.jpg')}}">
                                </span>
                            </h4>
                        </div>
                        <div class="foodDescription">
                            <p>Apple-test / Sweet / Crimes </p>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <div class="foodPrice">
                            <h4>$2.10</h4>
                        </div>
                        <button class="btn btn-success my-cart-btn" data-id="38" data-name="product 38"
                                data-summary="summary 38" data-price="2.10" data-quantity="1"
                                data-image="image/sweet/dutch-apple-pie.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Froot Loops Shake
                            <span>
                                <img src="{{asset('image/sweet/froot-loops-shake.jpg')}}">
                            </span>
                        </h4>
                        <p>Crimes / Froot-loops / Arugula / Sweet</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="39" data-name="product 39"
                                data-summary="summary 39" data-price="1.90" data-quantity="1"
                                data-image="image/sweet/froot-loops-shake.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Hershey Sundae pie
                            <span>
                                <img src="{{asset('image/sweet/hershey-sundae-pie.jpg')}}">
                            </span>
                        </h4>
                        <p>Cake / Melted swiss cheese / Soft-bread</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$3.00</h4>
                        <button class="btn btn-success my-cart-btn" data-id="40" data-name="product 40"
                                data-summary="summary 40" data-price="3.00" data-quantity="1"
                                data-image="image/sweet/hershey-sundae-pie.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Lucky Charms
                            <span>
                                <img src="{{asset('image/sweet/lucky-charms.jpg')}}">
                            </span>
                        </h4>
                        <p>Smoked turkey breast / Cake / Lettuce / Crimes</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.50</h4>
                        <button class="btn btn-success my-cart-btn" data-id="41" data-name="product 41"
                                data-summary="summary 41" data-price="1.50" data-quantity="1"
                                data-image="image/sweet/lucky-charms.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Newyork Cheese Cake
                            <span>
                                <img src="{{asset('image/sweet/newyork-cheese-cake.jpg')}}">
                            </span>
                        </h4>
                        <p>Cake / Red / Fresh avocado</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$2.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="42" data-name="product 42"
                                data-summary="summary 42" data-price="2.90" data-quantity="1"
                                data-image="image/sweet/newyork-cheese-cake.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            OREO Chocolate Shake
                            <span>
                                <img src="{{asset('image/sweet/oreo-chocolate-shake.jpg')}}">
                            </span>
                        </h4>
                        <p>Roasted red peppers / Arugula / Basil / Baguette</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$2.10</h4>
                        <button class="btn btn-success my-cart-btn" data-id="43" data-name="product 43"
                                data-summary="summary 43" data-price="2.10" data-quantity="1"
                                data-image="image/sweet/oreo-chocolate-shake.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            OREO Cookie Cheese Cake
                            <span>
                                <img src="{{asset('image/sweet/oreo-cookie-cheesecake.jpg')}}">
                            </span>
                        </h4>
                        <p> breast / Melted cheese / Ranch dressing</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$3.40</h4>
                        <button class="btn btn-success my-cart-btn" data-id="44" data-name="product 44"
                                data-summary="summary 44" data-price="3.40" data-quantity="1"
                                data-image="image/sweet/oreo-cookie-cheesecake.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            OREO Shake
                            <span>
                                <img src="{{asset('image/sweet/oreo-shake.png')}}">
                            </span>
                        </h4>
                        <p>Lettuce / Cake / Crime / Grain toast</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$2.00</h4>
                        <button class="btn btn-success my-cart-btn" data-id="45" data-name="product 45"
                                data-summary="summary 45" data-price="2.00" data-quantity="1"
                                data-image="image/sweet/oreo-shake.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Pie Snicker
                            <span>
                                <img src="{{asset('image/sweet/pie-snickers.jpg')}}">
                            </span>
                        </h4>
                        <p>Cheddar cheese / Lettuce / Roast / Sesame bread</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$3.00</h4>
                        <button class="btn btn-success my-cart-btn" data-id="46" data-name="product 46"
                                data-summary="summary 46" data-price="3.00" data-quantity="1"
                                data-image="image/sweet/pie-snickers.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Vanila Hand Spun-shake
                            <span>
                                <img src="{{asset('image/sweet/vanila-hand-spun-shake.jpg')}}">
                            </span>
                        </h4>
                        <p>Smoked turkey breast / Sweet / Lettuce / Toast</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="47" data-name="product 47"
                                data-summary="summary 47" data-price="1.90" data-quantity="1"
                                data-image="image/sweet/vanila-hand-spun-shake.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Vanila Soft Serve
                            <span>
                                <img src="{{asset('image/sweet/vanila-soft-serve.jpg')}}">
                            </span>
                        </h4>
                        <p>Vanila / Red sweet / Fresh avocado</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="48" data-name="product 48"
                                data-summary="summary 48" data-price="1.90" data-quantity="1"
                                data-image="image/sweet/vanila-soft-serve.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>

@endsection