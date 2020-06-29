@extends('front.base')

@section('contents')



    <!--================who we are Area =================-->
    <section class="who_we_are_area" style="padding: 100px">
        <div class="container">
            <div class="welcome_title">
                <h3>WOW you Have Successfully Registered</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="who_we_left">
                        <h4>WOW you Have Successfully Registered</h4>
                        <p>





                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="who_we_left">
                        For Instant Activation you can call us 24x7 at
                    </div>




                    <a type="submit"
                       href="tel:{{ env('NUMVAL') }}" class="btn form-control login_btn"><i class="fa fa-phone" aria-hidden="true"></i>
                        Call {{ env('NUM') }}</a>
                </div>

            </div>
        </div>
    </section>




    <!--=================================
     Page Section -->




@endsection