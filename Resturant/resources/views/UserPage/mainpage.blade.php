<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fast Food Resturant</title>

        <!-- Styles -->
        <script src="{{asset('js/homepage.js')}}"></script>
        <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/jquery-3.2.1.js')}}"></script>
        <script type="text/javascript" src="{{asset('bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/mainpage.css')}}">

        {{--Font style--}}
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <!-- Google icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {{--Social Media button--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>

        {{--Design for Navigation Bar--}}
        <div class="navigationbar">
            <nav class="navbar navbar-inverse">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="{{asset('/home page')}}"><span class="glyphicon glyphicon-home"></span> </a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">MENU <span class="glyphicon glyphicon-menu-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{asset('/pizza menu')}}">PIZZAS</a></li>
                                <li><a href="{{asset('/pizza menu')}}">BURGARS</a></li>
                                <li><a href="{{asset('/pizza menu')}}">SALAD</a></li>
                                <li><a href="{{asset('/pizza menu')}}">DRINKS</a></li>
                                <li><a href="{{asset('/pizza menu')}}">DESERTS</a></li>
                            </ul>
                        </li>
                        <li><a href="{{asset('/contact us')}}">CONTACT</a></li>
                        <li><a href="{{asset('/about us')}}">ABOUT</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li data-toggle="modal" data-target="#signUp">
                            <a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                        </li>
                        <li  data-toggle="modal" data-target="#login">
                            <a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>

        <!-- Modal for signUp -->
        <div class="modal fade" id="signUp" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Sign Up</h2>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
                            </div>
                            <div class="form-group">
                                <label for="cpwd">Comfirm Password:</label>
                                <input type="password" class="form-control" id="cpwd" placeholder="Enter to comfirm password">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal for login -->
        <div class="modal fade" id="login" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Login</h2>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Login</button>
                    </div>
                </div>

            </div>
        </div>

        @yield('contents')

        {{--Desigh for Resturant Service--}}
        <div class="resturantService">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding-bottom: 20px">
                        <div class="image">
                            <img src="{{asset('image/homepage/fast_delivery.PNG')}}">
                        </div>
                        <div class="title">
                            <h4> FAST DELIVERY </h4>
                        </div>
                        <hr>
                        <div class="description">
                            <p>Everything you order at QuickFood will be <br> quickly delivered to your door.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"  style="padding-bottom: 20px">
                        <div class="image">
                            <img src="{{asset('image/homepage/fresh_food.PNG')}}">
                        </div>
                        <div class="title">
                            <h4> FRESH FOOD </h4>
                        </div>
                        <hr>
                        <div class="description">
                            <p>We use only the best ingredients to cook <br> the tasty fresh food for you.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"  style="padding-bottom: 20px">
                        <div class="image">
                            <img src="{{asset('image/homepage/experience_chef.PNG')}}">
                        </div>
                        <div class="title">
                            <h4> EXPERIENCED CHEFS </h4>
                        </div>
                        <hr>
                        <div class="description">
                            <p>Our staff consists of chefs and cooks <br> with years of experience.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"  style="padding-bottom: 20px">
                        <div class="image">
                            <img src="{{asset('image/homepage/variety_dishes.PNG')}}">
                        </div>
                        <div class="title">
                            <h4> A VARIETY OF DISHES </h4>
                        </div>
                        <hr>
                        <div class="description">
                            <p>In our menu you’ll find a wide variety of <br> dishes, desserts, and drinks.</p>
                        </div>
                    </div>
                </div>

            </div> <!--end class container in resturantService-->

        </div> <!--end class resturantService-->

        {{--Design for Resturant Service Pictures--}}
        <div class="resturantServicePicture">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 10px" >
                        <img src="{{asset('image/homepage/resService1.PNG')}}" >
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 10px" >
                        <img src="{{asset('image/homepage/resService2.PNG')}}" >
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 10px" >
                        <img src="{{asset('image/homepage/resService3.PNG')}}" >
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" style="padding-bottom: 10px" >
                        <img src="{{asset('image/homepage/resService4.PNG')}}" >
                    </div>

                </div>
            </div>

        </div>

        {{--Design for Footer--}}
        <div class="resturantFooter">

            <div class="socialButton">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
            <div class="menu-footer">
                <a href="#">PIZZAS</a>
                <a href="#">SALAD</a>
                <a href="#">HAMBURGERS</a> <br>
                <a href="#">DRINKS</a>
                <a href="#">DESERTS</a>
            </div>
            <div class="copyRight">
                <p>All Right Reserve &#169; 2017</p>
            </div>

        </div> <!--end class resturantFooter-->

        {{--Design for Button Scroll Back to Top--}}
        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </button>

        {{--Script for Button Scroll Back to Top--}}
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>


    </body>

</html>

