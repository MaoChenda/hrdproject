@extends('UserPage.mainpage')
@section('title', 'Pizza')
    @section('contents')

        <div class="pizzaMenuImage">
            <img src="{{asset('image/menu/pizzamenu.PNG')}}">
        </div>

        <div class="menu">
            <div class="container">
                <div class="jumbotron">

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <div class="foodName">
                                <h4>
                                    Tuna Salad
                                    <span>
                                        <img src="{{asset('image/menu/tuna_salad.png')}}" alt="tuna_salad">
                                    </span>
                                </h4>
                            </div>
                            <div class="foodDescription">
                                <p>Lettuce / Tomatoes / Tuna / Grain toast</p>
                            </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <div class="foodPrice">
                                <h4>$5.50</h4>
                            </div>
                            {{--<div class="btn btn-success" >Order</div>--}}
                            <button class="btn btn-success my-cart-btn" data-id="1" data-name="product 1"
                                    data-summary="summary 1" data-price="5.50" data-quantity="1"
                                    data-image="image/menu/tuna_salad.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <div class="foodName">
                                <h4>
                                    Chess Crust
                                    <span>
                                        <img src="{{asset('image/pizza/chess-crust.png')}}">
                                    </span>
                                </h4>
                            </div>
                            <div class="foodDescription">
                                <p>Cheddar cheese / Lettuce / Roast beef / Sesame bread</p>
                            </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <div class="foodPrice">
                                <h4>$21.40</h4>
                            </div>
                            <button class="btn btn-success my-cart-btn" data-id="2" data-name="product 2"
                                    data-summary="summary 2" data-price="21.40" data-quantity="1"
                                    data-image="image/pizza/chess-crust.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Chicken Pesto
                                <span>
                                    <img src="{{asset('image/menu/chicken_pesto.png')}}">
                                </span>
                            </h4>
                            <p>All-natural chicken / Tomatoes / Arugula / Baguette</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$7.90</h4>
                            <button class="btn btn-success my-cart-btn" data-id="3" data-name="product 3"
                                    data-summary="summary 3" data-price="7.90" data-quantity="1"
                                    data-image="image/menu/chicken_pesto.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Etra Chessy Suasage
                                <span>
                                    <img src="{{asset('image/pizza/extra-chessy-suasage.png')}}">
                                </span>
                            </h4>
                            <p>Thinly sliced pastrami / Melted swiss cheese / Seafood</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$22.90</h4>
                            <button class="btn btn-success my-cart-btn" data-id="4" data-name="product 4"
                                    data-summary="summary 4" data-price="22.90" data-quantity="1"
                                    data-image="image/pizza/extra-chessy-suasage.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Pan Pizza
                                <span>
                                    <img src="{{asset('image/pizza/pan-pizza.png')}}">
                                </span>
                            </h4>
                            <p>Smoked turkey breast / chese / Lettuce / Toast</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$12.90</h4>
                            <button class="btn btn-success my-cart-btn" data-id="5" data-name="product 5"
                                    data-summary="summary 5" data-price="12.90" data-quantity="1"
                                    data-image="image/pizza/pan-pizza.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Pizza Puff
                                <span>
                                    <img src="{{asset('image/pizza/pizza-puff.png')}}">
                                </span>
                            </h4>
                            <p>Roasted turkey / Red pepper / Fresh avocado</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$11.60</h4>
                            <button class="btn btn-success my-cart-btn" data-id="6" data-name="product 6"
                                    data-summary="summary 6" data-price="11.60" data-quantity="1"
                                    data-image="image/pizza/pizza-puff.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Tomato Mozarella
                                <span>
                                    <img src="{{asset('image/menu/tomato_mozarella.png')}}">
                                </span>
                            </h4>
                            <p>Roasted red peppers / Arugula / Basil / Baguette</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$9.90</h4>
                            <button class="btn btn-success my-cart-btn" data-id="7" data-name="product 7"
                                    data-summary="summary 7" data-price="9.90" data-quantity="1"
                                    data-image="image/menu/tomato_mozarella.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Chicken Ranch
                                <span>
                                    <img src="{{asset('image/menu/chicken_ranch.png')}}">
                                </span>
                            </h4>
                            <p>Chicken breast / Melted cheese / Ranch dressing</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$13.90</h4>
                            <button class="btn btn-success my-cart-btn" data-id="8" data-name="product 8"
                                    data-summary="summary 8" data-price="13.90" data-quantity="1"
                                    data-image="image/menu/chicken_ranch.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                               Thin Crust Cheese
                                <span>
                                    <img src="{{asset('image/pizza/thin-crust-cheese-pizza.png')}}">
                                </span>
                            </h4>
                            <p>Cheese / Tomatoes / Tuna / Grain toast</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$25.00</h4>
                            <button class="btn btn-success my-cart-btn" data-id="9" data-name="product 9"
                                    data-summary="summary 9" data-price="25.00" data-quantity="1"
                                    data-image="image/pizza/thin-crust-cheese-pizza.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Tripple Crust
                                <span>
                                    <img src="{{asset('image/pizza/tripple-crust.png')}}">
                                </span>
                            </h4>
                            <p>Cheddar cheese / Lettuce / Roast beef / Sesame bread</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$15.90</h4>
                            <button class="btn btn-success my-cart-btn" data-id="10" data-name="product 10"
                                    data-summary="summary 10" data-price="15.90" data-quantity="1"
                                    data-image="image/pizza/tripple-crust.png" style="font-size: 10px">Add to Cart
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
                            <button class="btn btn-success my-cart-btn" data-id="11" data-name="product 11"
                                    data-summary="summary 11" data-price="7.90" data-quantity="1"
                                    data-image="image/menu/turkey_avocado.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>
                                Summer Love
                                <span>
                                    <img src="{{asset('image/menu/summer_love.png')}}">
                                </span>
                            </h4>
                            <p>Roasted turkey / Red pepper / Fresh avocado</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$7.90</h4>
                            <button class="btn btn-success my-cart-btn" data-id="12" data-name="product 12"
                                    data-summary="summary 12" data-price="7.90" data-quantity="1"
                                    data-image="image/menu/summer_love.png" style="font-size: 10px">Add to Cart
                            </button>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>


    @endsection