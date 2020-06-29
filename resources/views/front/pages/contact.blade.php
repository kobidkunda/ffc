@extends('front.base')

@section('contents')



<!--=================================
 banner -->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h3 title="Contact us"><img class="left_img" src="img/banner/t-left-img.png" alt="">Contact us<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
            <a href="index-2.html">Home</a>
            <a href="matches.html">Contact us</a>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Contact Address Area =================-->
<section class="address_details">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="address_item">
                    <img src="img/soul-icon/address-1.png" alt="">
                    <h3>Address</h3>
                    <address>{{ env('ADD1') }}  <br> {{ env('ADD2') }} <br>
                        {{ env('ADD3') }} </address>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="address_item">
                    <img src="img/soul-icon/address-2.png" alt="">
                    <h3>Phone</h3>
                    <h4>Office : <a href="tel:{{ env('NUM') }} ">{{ env('NUMS') }}</a></h4>
                    <h4>Office : <a href="tel:{{ env('NUM') }} ">{{ env('NUMS') }}</a></h4>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="address_item">
                    <img src="img/soul-icon/address-3.png" alt="">
                    <h3>Email</h3>
                  <h4>  <a href="#">info@ {{ env('DOMAIN') }}</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Contact Address Area =================-->

<!--================Map Area =================-->


<!--=================================
 banner -->



<!--=================================
 Page Section -->
@include('front.component.form')


    @endsection