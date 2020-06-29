@extends('front.base')

@section('contents')



    <!--================who we are Area =================-->
    <section class="who_we_are_area" style="padding: 100px">
        <div class="container">
            <div class="welcome_title">
                <h3>Please wait upto 2 minutes for otp to arrive</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="who_we_left">
                        <h4>Please Enter OTP</h4>
                         <form action="{{route('otp.verify')}}" method="post" >

                            {{$msg}}

                            <input type="hidden" name="encryptedOTP" value="{{$encryptedOTP}}" id="encryptedOTP">
                            <input type="hidden" name="admin_phone" value="{{$receiverNo}}" id="admin_phone">
                            <div class="form-group">
                                <label for="otpEntered">Enter OTP:</label>
                                <input type="text"

                                       min="4" max="4"
                                       class="form-control" placeholder="Enter OTP" id="otpEntered" name="otpEntered">
                            </div>

                            {{ csrf_field() }}

                            <button class="btn btn-primary">Submit</button>


                        </form>





                        </p>
                    </div>
                </div>

                

            </div>
        </div>
    </section>




<!--=================================
 Page Section -->




    @endsection