@extends('UserPage.mainpage')
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
                                <h4>Tuna Salad</h4>
                            </div>
                            <div class="foodDescription">
                                <p>Lettuce / Tomatoes / Tuna / Grain toast</p>
                            </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <div class="foodPrice">
                                <h4>$25.00</h4>
                            </div>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <div class="foodName">
                                <h4>Roast Beef & Cheddar</h4>
                            </div>
                            <div class="foodDescription">
                                <p>Cheddar cheese / Lettuce / Roast beef / Sesame bread</p>
                            </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <div class="foodPrice">
                                <h4>$23.90</h4>
                            </div>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Chicken Pesto</h4>
                            <p>All-natural chicken / Tomatoes / Arugula / Baguette</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$15.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Manhattan</h4>
                            <p>Thinly sliced pastrami / Melted swiss cheese / Lettuce</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$15.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Turkey Avocado</h4>
                            <p>Smoked turkey breast / Bacon / Lettuce / Toast</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$7.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Summer Love</h4>
                            <p>Roasted turkey / Red pepper / Fresh avocado</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$7.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Tomato Mozarella</h4>
                            <p>Roasted red peppers / Arugula / Basil / Baguette</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$23.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Chicken Ranch</h4>
                            <p>Chicken breast / Melted cheese / Ranch dressing</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$23.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Tuna Salad</h4>
                            <p>Lettuce / Tomatoes / Tuna / Grain toast</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$25.00</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Roast Beef & Cheddar</h4>
                            <p>Cheddar cheese / Lettuce / Roast beef / Sesame bread</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$23.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Tuna Salad</h4>
                            <p>Lettuce / Tomatoes / Tuna / Grain toast</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$25.00</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-4 col-lg-5">
                            <h4>Roast Beef & Cheddar</h4>
                            <p>Cheddar cheese / Lettuce / Roast beef / Sesame bread</p>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-1">
                            <h4>$23.90</h4>
                            <div class="btn btn-success" style="font-size: 10px">Order</div>
                        </div>
                    </div>
                    <hr>


                </div>
            </div>
        </div>

    @endsection