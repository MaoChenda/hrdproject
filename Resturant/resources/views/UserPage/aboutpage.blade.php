@extends('UserPage.mainpage')
@section('title', 'About')
@section('contents')

    <!--image for menu page-->
    <div class="menuImage">
        <img src="../image/aboutpage/aboutpage.PNG">
    </div>

    <!--design for header title-->
    <div class="aboutTitle">
        <h2>Meet Our Team</h2>
    </div>
    <div class="aboutTitleDescription">
        <p>
            QuickFood’s team is what makes marks us out from other fast food restaurants. Everyone of us,  from founders to waiters,<br>
            is a part of a friendly family, who always welcomes new members!
        </p>
    </div>

    <!--Design for profile team-->
    <div class="container" style="padding-bottom: 100px">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" style="padding-bottom: 50px">
                <div class="aboutProfile">
                    <div class="chefProfile">
                        <img src="../image/aboutpage/chef/chef3.png">
                    </div>
                    <div class="chefName">
                        <h1 style="line-height: 90px">Amanda Stark</h1>
                        <p>Founder</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"  style="padding-bottom: 50px">
                <div class="aboutProfile">
                    <div class="chefProfile">
                        <img src="../image/aboutpage/chef/chef2.png">
                    </div>
                    <div class="chefName">
                        <h1 style="line-height: 90px">Edward Robinson</h1>
                        <p>Head Chef</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"  style="padding-bottom: 50px">
                <div class="aboutProfile">
                    <div class="chefProfile">
                        <img src="../image/aboutpage/chef/chef1.png">
                    </div>
                    <div class="chefName">
                        <h1 style="line-height: 90px">Rebecca Ives</h1>
                        <p>Marketing Expert</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"  style="padding-bottom: 50px">
                <div class="aboutProfile">
                    <div class="chefProfile">
                        <img src="../image/aboutpage/chef/chef4.png">
                    </div>
                    <div class="chefName">
                        <h1 style="line-height: 90px">Peter Emberson</h1>
                        <p>Assistant Chef</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"  style="padding-bottom: 50px">
                <div class="aboutProfile">
                    <div class="chefProfile">
                        <img src="../image/aboutpage/chef/chef5.png">
                    </div>
                    <div class="chefName">
                        <h1 style="line-height: 90px">Samantha Clark</h1>
                        <p>Administrator</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"  style="padding-bottom: 50px">
                <div class="aboutProfile">
                    <div class="chefProfile">
                        <img src="../image/aboutpage/chef/chef6.png">
                    </div>
                    <div class="chefName">
                        <h1 style="line-height: 90px">Ryan Ricks</h1>
                        <p>Sous Chef</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection