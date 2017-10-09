@extends('UserPage.mainpage')
@section('title', 'Pizza')
@section('contents')

    <!--image for menu page-->
    <div class="menuImage">
        <img src="{{asset('image/menu/burgermenu.PNG')}}">
    </div>

    <!--Design for menu-->
    <div class="menu">
        <div class="container">
            <div class="jumbotron">

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <div class="foodName">
                            <h4>
                                Bacon Cheese
                                <span>
                                    <img src="{{asset('image/burger/bacon-cheese.png')}}">
                                </span>
                            </h4>
                        </div>
                        <div class="foodDescription">
                            <p>Cheese / Tomatoes / Tuna / Bacon</p>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <div class="foodPrice">
                            <h4>$5.10</h4>
                        </div>
                        <button class="btn btn-success my-cart-btn" data-id="13" data-name="product 13"
                                data-summary="summary 13" data-price="5.10" data-quantity="1"
                                data-image="image/burger/bacon-cheese.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <div class="foodName">
                            <h4>
                               Bacon Cheese Burger
                                <span>
                                    <img src="{{asset('image/burger/bacon-cheese-burger.png')}}">
                                </span>
                            </h4>
                        </div>
                        <div class="foodDescription">
                            <p>Cheddar cheese / Bacon / Roast beef / Sesame bread</p>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <div class="foodPrice">
                            <h4>$3.90</h4>
                        </div>
                        <button class="btn btn-success my-cart-btn" data-id="14" data-name="product 14"
                                data-summary="summary 14" data-price="3.90" data-quantity="1"
                                data-image="image/burger/bacon-cheese-burger.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Bacon Double Cheese
                            <span>
                                <img src="{{asset('image/burger/bacon-double-cheese-burger.png')}}">
                            </span>
                        </h4>
                        <p>All-natural bacon / Tomatoes / Cheese / Burger</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$4.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="15" data-name="product 15"
                                data-summary="summary 15" data-price="4.90" data-quantity="1"
                                data-image="image/burger/bacon-double-cheese-burger.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Manhattan
                            <span>
                                    <img src="{{asset('image/menu/manhattan.png')}}">
                                </span>
                        </h4>
                        <p>Thinly sliced pastrami / Melted swiss cheese / Lettuce</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$15.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="16" data-name="product 16"
                                data-summary="summary 16" data-price="15.90" data-quantity="1"
                                data-image="image/menu/manhattan.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            BBQ Bacon Whopper
                            <span>
                                    <img src="{{asset('image/burger/bbq-bacon-whopper.jpg')}}">
                                </span>
                        </h4>
                        <p>Smoked turkey breast / Bacon / Lettuce / Toast</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$7.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="17" data-name="product 17"
                                data-summary="summary 17" data-price="7.90" data-quantity="1"
                                data-image="image/burger/bbq-bacon-whopper.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Rodeo
                            <span>
                                <img src="{{asset('image/burger/rodeo.png')}}">
                            </span>
                        </h4>
                        <p>Burger / Red pepper / Fresh avocado</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$3.10</h4>
                        <button class="btn btn-success my-cart-btn" data-id="18" data-name="product 18"
                                data-summary="summary 18" data-price="3.10" data-quantity="1"
                                data-image="image/burger/rodeo.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Whopper-JR
                            <span>
                                <img src="{{asset('image/burger/whopper-jr.jpg')}}">
                            </span>
                        </h4>
                        <p>Roasted red peppers / Arugula / Basil / Baguette</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$3.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="19" data-name="product 19"
                                data-summary="summary 19" data-price="3.90" data-quantity="1"
                                data-image="image/burger/whopper-jr.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Whopper Sandwhich
                            <span>
                                <img src="{{asset('image/burger/whopper-sandwhich.jpg')}}">
                            </span>
                        </h4>
                        <p>Chicken breast / Melted cheese / Ranch dressing</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$3.50</h4>
                        <button class="btn btn-success my-cart-btn" data-id="20" data-name="product 20"
                                data-summary="summary 20" data-price="3.50" data-quantity="1"
                                data-image="image/burger/whopper-sandwhich.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                           Hamburger
                            <span>
                                <img src="{{asset('image/burger/hamburger.png')}}">
                            </span>
                        </h4>
                        <p>Cheese / Tomatoes / Bacon / Grain toast</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$2.00</h4>
                        <button class="btn btn-success my-cart-btn" data-id="21" data-name="product 21"
                                data-summary="summary 21" data-price="2.00" data-quantity="1"
                                data-image="image/burger/hamburger.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Cheese Burger
                            <span>
                                <img src="{{asset('image/burger/cheese-burger.png')}}">
                            </span>
                        </h4>
                        <p>Cheddar cheese / Roast beef / Sesame bread</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$3.20</h4>
                        <button class="btn btn-success my-cart-btn" data-id="22" data-name="product 22"
                                data-summary="summary 22" data-price="7.90" data-quantity="1"
                                data-image="image/burger/cheese-burger.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Turkey Avocado
                            <span>
                                <img src="{{asset('image/menu/turkey_avocado.png')}}">
                            </span>
                        </h4>
                        <p>Smoked turkey breast / Bacon / Lettuce / Toast</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$7.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="23" data-name="product 23"
                                data-summary="summary 23" data-price="7.90" data-quantity="1"
                                data-image="image/menu/turkey_avocado.png" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Double Whopper
                            <span>
                                <img src="{{asset('image/burger/double-whopper.jpg')}}">
                            </span>
                        </h4>
                        <p>Roasted turkey / Red pepper / Fresh avocado</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$4.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="24" data-name="product 24"
                                data-summary="summary 24" data-price="4.90" data-quantity="1"
                                data-image="image/burger/double-whopper.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>

@endsection