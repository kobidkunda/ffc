@extends('front.base')

@section('contents')



<!--=================================
 banner -->

<section class="inner-intro bg bg-fixed bg-overlay-black-60" style="background-image:url(images/bg/inner-bg-1.jpg);">
    <div class="container">
        <div class="row intro-title text-center">
            <div class="col-sm-12">
                <div class="section-title"><h1 class="pos-r divider">Contact<span class="sub-title">Contact</span></h1></div>
            </div>
            <div class="col-sm-12 mt-70">
                <ul class="page-breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="/">contact</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>contact 1</span> </li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!--=================================
 banner -->



<!--=================================
 Page Section -->

<section class="contact-sec page-section-pt gray-bg"><div class="container"><div class="row">


            <div class="col-sm-12">
                <div class="row mb-30">
                    <div class="col-sm-12 text-center">
                        <h4 class="title divider-3 text-uppercase text-center mb-50">we are the one</h4>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-30">
                        <div class="address-block fill">
                            <h3 class="title text-uppercase">Address :</h3>
                            <address>{{ env('ADD1') }}  <br> {{ env('ADD2') }} <br>
                                {{ env('ADD3') }} </address>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-30">
                        <div class="address-block fill">
                            <h3 class="title text-uppercase">Email Address:</h3>
                            <a href="#">info@ {{ env('DOMAIN') }}</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="address-block fill">
                            <h3 class="title text-uppercase">Phone :</h3>
                            <span>Office : <a href="tel:{{ env('NUM') }} ">{{ env('NUMS') }}</a></span>

                        </div>
                    </div>



                    <div class="col-sm-6">
                        <div class="address-block fill">
                            <h3 class="title text-uppercase">Social Media :</h3>
                            <div class="social-icons color-hover"><ul>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul></div>
                        </div>
                    </div>
                </div>
            </div>





        </div></div>



</section>


    @endsection