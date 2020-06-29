@extends('front.base')

@section('contents')



<!--=================================
 banner -->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_content">
            <h3 title="Register"><img class="left_img" src="img/banner/t-left-img.png" alt="">Register<img class="right_img" src="img/banner/t-left-img.png" alt=""></h3>
            <a href="/">Home</a>
            <a href="/">Register</a>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->


<!--================Contact Address Area =================-->





<section class="contact_form_area">
    <div class="container">
        <div class="welcome_title">
            <h3>Register A Free Account</h3>
            
                 <img src="100.png"  style="
                             display: block;
    margin-left: auto;
    margin-right: auto;
    width: 15%;
                            
                            "></img>
            
            
            <img src="img/w-title-b.png" alt="">
        </div>
        <div class="row">
            <form

                    action="{{route('save')}}"
                    method="post"  class="form_inner"

            >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input name="name" required type="text" class="form-control"  placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="tel" minlength="10" maxlength="13" name="mobile" class="form-control"  placeholder="Mobile Number">
                        </div>

                    </div>
                </div>
                
                
                 <div class="col-md-6">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input name="city" required type="text" class="form-control"  placeholder="City">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="password"  name="password" class="form-control"  placeholder="Password">
                        </div>

                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="row">
                        
                         <button type="submit" class="btn btn-primary btn-block">Register</button>
                        
                        </div>
                        </div>
                
                
                
             
                <br> <br>
                <div class="form-group col-md-12">
                   
                </div>
                
                
            </form>
            
             <div class="col-12">
             
                 
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



    @endsection