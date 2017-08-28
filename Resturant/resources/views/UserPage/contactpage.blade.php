@extends('UserPage.mainpage')
    @section('contents')

        <div class="contactImage">
            <img src="{{asset('image/contactpage/contacts.PNG')}}">
        </div>

        <div class="contact">
            <div class="container">

                <div class="header">
                    <h2>Get in Touch</h2>
                    <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about<br>
                        our services and dishes we offer. We would be glad to answer your questions.</p>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                        <form>
                            <div class="form-group">
                                <label for="usr">Enter Your Name:</label>
                                <input type="text" class="form-control" id="usr" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Enter Your Email:</label>
                                <input type="email" class="form-control" id="email" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Enter Your Phone Number:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Enter Your Message Here:</label>
                                <textarea class="form-control" id="message" name="message" required></textarea>
                            </div>
                            <div class="form-group" style="float: right">
                                <label for="submit"></label>
                                <input class="btn btn-success" type="submit" value="SEND MESSAGE" id="submit" name="submit" style="border-radius: 25px">
                            </div>

                        </form>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                        <div class="followus">
                            <div class="header">
                                <h5>FOLLOW US</h5>
                            </div>
                            <div class="social"  style="margin-top: 20px">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-google"></a>
                                <a href="#" class="fa fa-youtube"></a>
                                <a href="#" class="fa fa-instagram"></a>
                            </div>
                            <hr>

                            <div class="header">
                                <h5>PHONES</h5>
                            </div>
                            <div class="phone">
                                <p>
                                <span class="glyphicon glyphicon-earphone"></span>
                                    855 77 668 112
                                </p>
                            </div>
                            <hr>

                            <div class="header">
                                <h5>ADDRESS</h5>
                            </div>
                            <div class="add">
                                <p>
                                    <span class="glyphicon glyphicon-map-marker"></span>
                                    Khan Chrouy Chongva,<br> Phnom Penh
                                </p>
                            </div>
                            <hr>

                            <div class="header">
                                <h5>OPENING HOURS</h5>
                            </div>
                            <div class="time">
                                <p>
                                <span class="glyphicon glyphicon-dashboard"></span>
                                    9:00am-7:00pm
                                </p>
                            </div>

                        </div>
                    </div>

                </div> <!--end class row-->
            </div> <!--end class container-->
        </div> <!--end class contact-->

    @endsection