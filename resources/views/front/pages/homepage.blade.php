@extends('front.base')

@section('contents')



    <!--================Slider Reg Area =================-->
    <section class="slider_area">
        <div class="slider_inner">
            <div class="rev_slider"  data-version="5.3.0.2" id="home-slider">
                <ul>
                    <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('slider/001.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                    </li>
                    <li data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="600" data-rotate="0" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('slider/002.jpg')}}" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                    </li>

                </ul>
            </div><!-- END REVOLUTION SLIDER -->
        </div>
        <div class="registration_form_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="registration_form_s">
                            <img src="100.png" width="80px" style="
                             display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
                            
                            "></img>
                            <h4>Free Registration</h4>
                            
                            <form
                                    action="{{route('save')}}"
                                    method="post"
                            >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <input name="name" required type="text" class="form-control"  placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="tel" minlength="10" maxlength="10" name="mobile" class="form-control"  placeholder="Mobile Number for OTP verification">
                                </div>
                                <div class="form-group">
                                    <input  required type="text" name="city" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input  required type="text" name="un" class="form-control" placeholder="User Name">
                                </div>
                                
                                <div class="form-group">
                                    <input  required type="text" name="age" class="form-control" placeholder="Age">
                                </div>
                                
                                <div class="form-group">
                                    <input  required type="password" name="password" class="form-control" placeholder="Password">
                                </div>


                                <div class="reg_chose form-group">
                                    <button type="submit"  class="btn form-control login_btn">Register</button>
                                </div>
                                
                                <hr>
                                <center>Or Call</center>
                                
                                <div class="reg_chose form-group">
                                    <a href="tel:{{ env('NUMVAL') }}" class="btn form-control login_btn">{{ env('NUMVAL') }}</a>
                                </div>
                                
                                <div class="reg_chose form-group">
                                
                                 <div id="google_translate_element"></div>
                                  </div>
                                
                                
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Slider Reg Area =================-->

    <!--================Welcome Area =================-->
    <section class="welcome_area">
        <div class="container">
            <div class="welcome_title">
                <h3>Find Your  <span>Solemate </span>Easily</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <div class="welcome_item">
                        <img src="img/welcome-icon/w-icon-1.png" alt="">
                        <h4 class="counter">1611</h4>
                        <h6>Total Members</h6>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="welcome_item">
                        <img src="img/welcome-icon/w-icon-2.png" alt="">
                        <h4 class="counter">500</h4>
                        <h6>Members online</h6>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="welcome_item">
                        <img src="img/welcome-icon/w-icon-3.png" alt="">
                        <h4 class="counter">300</h4>
                        <h6>Men online</h6>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="welcome_item">
                        <img src="img/welcome-icon/w-icon-4.png" alt="">
                        <h4 class="counter">200</h4>
                        <h6>Women online</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Welcome Area =================-->



    <!--================Find Your Soul Area =================-->
    <section class="find_soul_area">
        <div class="container">
            <div class="welcome_title">
                <h3>Step to Find Your Soul mate</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="find_soul_item">
                        <img src="img/soul-icon/soul-1.png" alt="">
                        <h4>Create a profile</h4>
                        <p>Register your profile with us its free and Easy.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="find_soul_item">
                        <img src="img/soul-icon/soul-2.png" alt="">
                        <h4>Find matches </h4>
                        <p>Easily find perfect match by yourself just by entering your requirements.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="find_soul_item">
                        <img src="img/soul-icon/soul-3.png" alt="">
                        <h4>Start Dating</h4>
                        <p>Start Dating.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Find Your Soul Area =================-->



    <!--================Testimonials Area =================-->
    <section class="testimonials_area">
        <div class="container">
            <div class="welcome_title">
                <h3>Testimonials</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="testimonials_slider">
                <div class="item">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="test_left_content">
                                <p>

                                    I have tried other dating sites but always came back to Happy Friendship Club because people on other sites were not after a serious relationship. So thanks to Full Moon Friendship I definitely found my keeper

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="test_man">
                                <img class="img-circle" src="{{asset('img/3.jpg')}}" alt="">
                                <h4>Raj</h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="test_left_content">
                                <p>
                                    It was amazing and the connection was instant. Now we have that love that I used to look at others and think it wasn't real. Over two and a half years later and we are engaged and couldn't be happier
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="test_man">
                                <img class="img-circle" src="{{asset('img/3.jpg')}}" alt="">
                                <h4>Prashant</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->

<style>
    .img-thumbnail{
        width:190px;
        height:290px;
    }
</style>

    <!--================Register Members slider Area =================-->
    <section class="register_members_slider">
        <div class="container">
            <div class="welcome_title">
                <h3>Latest registered members</h3>
                <img src="img/w-title-b.png" alt="">
            </div>
            <div class="">
                
                <div class='col-md-4'>
                    
                     <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/1.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Anmol</h4>
                    <h5>22 years old</h5>
                    
                 
                </div>
                
                </a>
                
      <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
       
                
                </div>
                <div class='col-md-4 col-xs-6'>
                
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/2.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Asin</h4>
                    <h5>23 years old</h5>
                </div>
                </a>
                
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                <div class='col-md-4 col-xs-6'>
                    
                    <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/3.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Kavita</h4>
                    <h5>25 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                
                
                
                <div class='col-md-4 col-xs-6'>
                    <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/4.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Karishma</h4>
                    <h5>20 years old</h5>
                </div>
                
                 </a>
                 
                  <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                 
                <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/5.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Sumit</h4>
                    <h5>26 years old</h5>
                </div>
                 </a>
                
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                 
                <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/6.jpg')}}"  class="img-thumbnail" alt="">
                    <h4>Kunal</h4>
                    <h5>20 years old</h5>
                </div>
                
                 </a>
                
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                 
                <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/7.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Soma</h4>
                    <h5>23 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/8.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Simran</h4>
                    <h5>25 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                  <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/9.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Anisa</h4>
                    <h5>29 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                  <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/10.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Priyanka</h4>
                    <h5>22 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                  <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/11.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Puja</h4>
                    <h5>28 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                  <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/13.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Sharon</h4>
                    <h5>21 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                  <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/14.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Susmita</h4>
                    <h5>25 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
              
              
               <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/15.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Sanjana</h4>
                    <h5>22 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                  <div class='col-md-4 col-xs-6'>
                <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/16.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Sona</h4>
                    <h5>27 years old</h5>
                </div>
                 </a>
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                 
                 
                 
                 
                 
                 
                  <div class='col-md-4 col-xs-6'>
                
                 <a href="{{route('page.register')}}">
                <div class="item">
                    <img src="{{asset('members/17.jpg')}}" class="img-thumbnail" alt="">
                    <h4>Laila</h4>
                    <h5>29 years old</h5>
                </div>
                
                </a>
                
                   <a href="{{route('page.register')}}" class="btn btn-danger"><i class="fa fa-heart"></i> Connect Now</a>
                
                 </div>
                
                
            </div>
        </div>
    </section>
    <!--================End Register Members  slider Area =================-->


    @include('front.component.form')


<!-- Global site tag (gtag.js) - Google Ads: 733903724 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-733903724"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-733903724');
</script>






    @endsection