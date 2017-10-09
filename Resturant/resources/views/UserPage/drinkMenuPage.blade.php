@extends('UserPage.mainpage')
@section('title', 'Drink')
@section('contents')

    <!--image for menu page-->
    <div class="menuImage">
        <img src="{{asset('image/menu/drinkmenu.PNG')}}">
    </div>

    <!--Design for menu-->
    <div class="menu">
        <div class="container">
            <div class="jumbotron">

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <div class="foodName">
                            <h4>
                                Coca Cola
                                <span>
                                    <img src="{{asset('image/drink/coca-cola.jpg')}}">
                                </span>
                            </h4>
                        </div>
                        <div class="foodDescription">
                            <p>Coca / Sweetie / Middle</p>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <div class="foodPrice">
                            <h4>$0.75</h4>
                        </div>
                        <button class="btn btn-success my-cart-btn" data-id="25" data-name="product 25"
                                data-summary="summary 25" data-price="0.75" data-quantity="1"
                                data-image="image/drink/coca-cola.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <div class="foodName">
                            <h4>
                                Coke Icee
                                <span>
                                    <img src="{{asset('image/drink/coke-icee.jpg')}}">
                                </span>
                            </h4>
                        </div>
                        <div class="foodDescription">
                            <p>Coke Icee/ Middle /Sweet</p>
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <div class="foodPrice">
                            <h4>$0.70</h4>
                        </div>
                        <button class="btn btn-success my-cart-btn" data-id="26" data-name="product 26"
                                data-summary="summary 26" data-price="4.90" data-quantity="1"
                                data-image="image/drink/coke-icee.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Diet Coke
                            <span>
                                <img src="{{asset('image/drink/diet-coke.jpg')}}">
                            </span>
                        </h4>
                        <p>Crimes/ Coke/ Diet</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.00</h4>
                        <button class="btn btn-success my-cart-btn" data-id="27" data-name="product 27"
                                data-summary="summary 27" data-price="1.00" data-quantity="1"
                                data-image="image/drink/diet-coke.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Frozen Fanta Cherry
                            <span>
                                <img src="{{asset('image/drink/frozen-fanta-cherry.jpg')}}">
                            </span>
                        </h4>
                        <p>Fanta/ Cherry's test</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.25</h4>
                        <button class="btn btn-success my-cart-btn" data-id="28" data-name="product 28"
                                data-summary="summary 28" data-price="1.25" data-quantity="1"
                                data-image="image/drink/frozen-fanta-cherry.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Iced Tea
                            <span>
                                <img src="{{asset('image/drink/iced-tea.jpg')}}">
                            </span>
                        </h4>
                        <p>Lemon/ Green Tea/ Ice</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$0.50</h4>
                        <button class="btn btn-success my-cart-btn" data-id="29" data-name="product 29"
                                data-summary="summary 29" data-price="0.50" data-quantity="1"
                                data-image="image/drink/iced-tea.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Low Fat Chocolate Milk
                            <span>
                                <img src="{{asset('image/drink/low-fat-chocolate-milk.jpg')}}">
                            </span>
                        </h4>
                        <p>Chocolate/ Milk/ Ice</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$2.00</h4>
                        <button class="btn btn-success my-cart-btn" data-id="30" data-name="product 30"
                                data-summary="summary 30" data-price="2.00" data-quantity="1"
                                data-image="image/drink/low-fat-chocolate-milk.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Mello Yello
                            <span>
                                <img src="{{asset('image/drink/mello-yello.jpg')}}">
                            </span>
                        </h4>
                        <p>Oranges/ Crime/ Mello</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.50</h4>
                        <button class="btn btn-success my-cart-btn" data-id="31" data-name="product 31"
                                data-summary="summary 31" data-price="1.50" data-quantity="1"
                                data-image="image/drink/mello-yello.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Minute-maid Lemon Juice
                            <span>
                                <img src="{{asset('image/drink/minute-maid-lemon.jpg')}}">
                            </span>
                        </h4>
                        <p>Lemon/ Ice/ Sweeties</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.25</h4>
                        <button class="btn btn-success my-cart-btn" data-id="32" data-name="product 32"
                                data-summary="summary 32" data-price="1.25" data-quantity="1"
                                data-image="image/drink/minute-maid-lemon.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Minute-maid Orange Juice
                            <span>
                                <img src="{{asset('image/drink/minute-maid-orange.jpg')}}">
                            </span>
                        </h4>
                        <p>Orange/ Ice/ Sweeties</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.50</h4>
                        <button class="btn btn-success my-cart-btn" data-id="33" data-name="product 33"
                                data-summary="summary 33" data-price="1.50" data-quantity="1"
                                data-image="image/drink/minute-maid-orange.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Sprite
                            <span>
                                <img src="{{asset('image/drink/sprite.jpg')}}">
                            </span>
                        </h4>
                        <p>Sprite/ Sweeties/ Middle</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$0.75</h4>
                        <button class="btn btn-success my-cart-btn" data-id="34" data-name="product 34"
                                data-summary="summary 34" data-price="0.75" data-quantity="1"
                                data-image="image/drink/sprite.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Strawberry Banana Smoothies
                            <span>
                                <img src="{{asset('image/drink/strawberry-banana-smooth.jpg')}}">
                            </span>
                        </h4>
                        <p>Strawberry/ Banana/ Sweeties/ Crimes</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$2.90</h4>
                        <button class="btn btn-success my-cart-btn" data-id="35" data-name="product 35"
                                data-summary="summary 35" data-price="2.90" data-quantity="1"
                                data-image="image/drink/strawberry-banana-smooth.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                        <h4>
                            Strawberry Cake Smoothies
                            <span>
                                <img src="{{asset('image/drink/strawberry-banana-smooth.jpg')}}">
                            </span>
                        </h4>
                        <p>Strawberry/ Cake/ Sweeties/ Crimes</p>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                        <h4>$1.50</h4>
                        <button class="btn btn-success my-cart-btn" data-id="36" data-name="product 36"
                                data-summary="summary 36" data-price="1.50" data-quantity="1"
                                data-image="image/drink/strawberry-banana-smooth.jpg" style="font-size: 10px">Add to Cart
                        </button>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>

@endsection