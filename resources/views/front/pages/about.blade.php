@extends('front.base')

@section('contents')



    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3 title="About us"><img class="left_img" src="img/banner/t-left-img.png" alt="">About us<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                <a href="index-2.html">Home</a>
                <a href="blog.html">Pages</a>
                <a href="blog.html">About us</a>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================who we are Area =================-->
    <section class="who_we_are_area">
        <div class="container">
            <div class="welcome_title">
                <h3>Who We Are</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="who_we_left">
                        <h4>We Are Female Friendship Club & We Care About Your Happiness</h4>
                        <p>

                            Female Friendship Club is the new modern matchmaking and matrimonial platform designed for the modern Indian. It is the most progressive and modern social networking organization for providing the services to find the most perfect partner of your choice from your own place where you can make a new exciting relationship – like a true soul mate, online!

                            Female Friendship Club has launched to help you to find your dream partner who would understand you, support you, would share your feeling & everything that you want to get rid from your monotonous life.






                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="who_we_right">
                        <img src="img/who-we-right.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End who we are Area =================-->

    @include('front.component.form')



    @endsection