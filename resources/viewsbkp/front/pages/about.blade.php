@extends('front.base')

@section('contents')



<!--=================================
 banner -->

<section class="inner-intro bg bg-fixed bg-overlay-black-60" style="background-image:url(images/bg/inner-bg-1.jpg);">
    <div class="container">
        <div class="row intro-title text-center">
            <div class="col-sm-12">
                <div class="section-title"><h1 class="pos-r divider">Contact<span class="sub-title">About</span></h1></div>
            </div>
            <div class="col-sm-12 mt-70">
                <ul class="page-breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="/">About</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>About</span> </li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!--=================================
 banner -->



<!--=================================
 Page Section -->

<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center mb-50 xs-mb-30">
                <h2 class="title divider mb-30">WELCOME TO  {{ env('NAME') }}</h2>

            </div>

            <div class="col-md-6 xs-mb-30"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
            <div class="col-md-6">
                <h3 class="title">Founded in 2014</h3>
                <h5 class="clearfix text-orange mb-20">The overall planning, coordination, and control of a project from beginning to completion. CPM is aimed at meeting a client's Construction Project Management</h5>
                <p>


                    RomanceLoves is the new modern matchmaking and matrimonial platform designed for the modern Indian. It is the most progressive and modern social networking organization for providing the services to find the most perfect partner of your choice from your own place where you can make a new exciting relationship – like a true soul mate, online!

                    RomanceLoves has launched to help you to find your dream partner who would understand you, support you, would share your feeling & everything that you want to get rid from your monotonous life.



                </p>

            </div>
        </div>
    </div>
</section>


    @endsection