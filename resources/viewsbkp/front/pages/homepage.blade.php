@extends('front.base')

@section('contents')
<section id="home-slider" class="fullscreen">
    <div id="main-slider" class="carousel carousel-fade" data-ride="carousel">
        <!-- Carousel inner -->
        <div class="carousel-inner">
            <!--/ Carousel item end -->


            <div class="item bg-1 active" style="background: url(images/slider/3.jpg) no-repeat 0 0; background-size: cover;" data-gradient-red="4">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <div class="slider-2">
                                    <h1 class="animated7 text-white">Meet <span> Your </span>  love <span> here!</span></h1>
                                </div>

                                <a
                                        href="tel:{{ env('NUMVAL') }}"

                                        class="button btn-dark btn-lg full-rounded animated right-icn"><span>Call {{ env('NUM') }} <i class="glyph-icon flaticon-hearts" aria-hidden="true"></i>
                                    </span>

                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--/ Carousel item end -->
        </div>

    </div>
</section>

<section class="form-1 ptb-20">
    <div class="container">
        <div class="row">
            <div class="banner-form">
                <form
                        action="{{route('save')}}"
                        method="post"
                >

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-md-4 col-sm-12 control-label text-white">Name</label>
                            <div class="col-md-8 col-sm-12">
                                <input required type="text" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-md-5 col-sm-12 control-label text-white">Mobile</label>
                            <div class="col-md-7 col-sm-12">
                                <input value=" " required type="tel" minlength="10" maxlength="13" name="mobile">
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-md-5 col-sm-12 control-label text-white">City</label>
                            <div class="col-md-7 col-sm-12">
                                <input  required type="text" name="city">
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-2">

                        <button type="submit" class="button btn-lg btn-theme full-rounded animated right-icn"><span>Register
                                <i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button>



                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="page-section-ptb pos-r">
    <div class="container">
        <div class="row mb-50 xs-mb-30">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h2 class="title divider mb-30">Find your Solemate Easily</h2>
              </div>
        </div>
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10 col-md-12">
                <ul class="timeline list-inline">
                    <li>
                        <div class="timeline-badge"><img class="img-responsive" src="{{asset('images/timeline/01.png')}}" alt=""></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-center">
                                <h4 class="timeline-title divider-3">CREATE PROFILE</h4>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Register your profile with us its free and Easy

                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge"><img class="img-responsive" src="{{asset('images/timeline/02.png')}}" alt=""></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-center">
                                <h4 class="timeline-title divider-3">Find match</h4>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Easily find perfect match by yourself just by entering your requirements

                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><img class="img-responsive" src="{{asset('images/timeline/03.png')}}" alt=""></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading text-center">
                                <h4 class="timeline-title divider-3">START DATING</h4>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Start Dating

                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>





        </div>





    </div>

</section>




<section class="page-section-ptb pos-r">
    <div class="container">
        <div class="col-12">
            <img  class="ri" src="{{asset('images/security.jpg')}}" alt="">
        </div>






    </div>

</section>



<section class="page-section-ptb  text-white" style="background: url(images/pattern/02.png) no-repeat 0 0; background-size: cover;">
    <div class="container">
        <div class="row mb-50 xs-mb-30">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h2 class="title divider">What makes us Differnt</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-xs-6 col-xx-12 text-center">
                <div class="counter">
                    <img src="images/counter/01.png" alt="">
                    <span class="timer" data-to="1600" data-speed="10000">1600</span><label>Total Members</label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6 col-xx-12 text-center">
                <div class="counter">
                    <img src="images/counter/02.png" alt="">
                    <span class="timer" data-to="750" data-speed="10000">750</span><label>Online Members</label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6 col-xx-12 text-center">
                <div class="counter">
                    <img src="images/counter/03.png" alt="">
                    <span class="timer" data-to="380" data-speed="10000">380</span><label>Men Online</label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6 col-xx-12 text-center">
                <div class="counter">
                    <img src="images/counter/04.png" alt="">
                    <span class="timer" data-to="370" data-speed="10000">370</span><label>Women Online</label>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section-ptb profile-slider pb-30 xs-pb-60">
    <div class="container">
        <div class="row mb-20 xs-mb-0">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h2 class="title divider">Our Members</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel" data-nav-arrow="true" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="30">
                    <div class="item">
                        <a href="#" class="profile-item">
                            <div class="profile-image clearfix"><img class="img-responsive" src="images/member/1.jpg" alt=""></div>
                            <div class="profile-details text-center">

                                <span>23 Years Old</span>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="profile-item">
                            <div class="profile-image clearfix"><img class="img-responsive" src="images/member/2.jpg" alt=""></div>
                            <div class="profile-details text-center">

                                <span>21 Years Old</span>
                            </div>
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="profile-item">
                            <div class="profile-image clearfix"><img class="img-responsive" src="images/member/3.jpg" alt=""></div>
                            <div class="profile-details text-center">

                                <span>19 Years Old</span>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="profile-item">
                            <div class="profile-image clearfix"><img class="img-responsive" src="images/member/4.jpg" alt=""></div>
                            <div class="profile-details text-center">

                                <span>20 Years Old</span>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="profile-item">
                            <div class="profile-image clearfix"><img class="img-responsive" src="images/member/5.jpg" alt=""></div>
                            <div class="profile-details text-center">

                                <span>22 Years Old</span>
                            </div>
                        </a>
                    </div>


                    <div class="item">
                        <a href="#" class="profile-item">
                            <div class="profile-image clearfix"><img class="img-responsive" src="images/member/6.jpg" alt=""></div>
                            <div class="profile-details text-center">

                                <span>26 Years Old</span>
                            </div>
                        </a>
                    </div>


                    <div class="item">
                        <a href="#" class="profile-item">
                            <div class="profile-image clearfix"><img class="img-responsive" src="images/member/7.jpg" alt=""></div>
                            <div class="profile-details text-center">

                                <span>19 Years Old</span>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="page-section-ptb grey-bg story-slider">
    <div class="container">
        <div class="row mb-20 xs-mb-0">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h2 class="title divider">They Found True Love</h2>
            </div>
        </div>
    </div>
    <div class="owl-carousel" data-nav-dots="true" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="30">
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/01.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div>
                </div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Quinnel & Jonet</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/02.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Adam & Eve</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div></div>
        </div>

        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/03.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Bella & Edward</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/04.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">DEMI & HEAVEN</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div></div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/05.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">David & Bathsheba</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/06.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Eros & Psychi</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/07.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Hector & Andromache</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/08.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Bonnie & Clyde</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/09.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Henry & Clare</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/10.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Casanova & Francesca</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/11.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">Jack & Sally</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="story-item">
                <div class="story-image clearfix"><img class="img-responsive" src="images/story/12.jpg" alt="">
                    <div class="story-link"><a href="stories-details.html"><i class="glyph-icon flaticon-add"></i></a></div></div>
                <div class="story-details text-center">
                    <h5 class="title divider-3">James & Lilly</h5>
                    <div class="about-des mt-30">Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in</div>
                </div>
            </div>
        </div>
    </div>
</section>--}}





<section class="page-section-ptb dark-bg text-white" style="background: url(images/pattern/03.png) no-repeat 0 0; background-size: cover;">
    <div class="container">
        <div class="row mb-50">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h2 class="title divider">Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-10"><div class="owl-carousel" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1">
                    <div class="item"><div class="testimonial bottom_pos">
                            <div class="testimonial-avatar"> <img alt="" src="images/avtar/1.png"> </div>
                            <div class="testimonial-info"><p>
                                    I have tried other dating sites but always came back to Happy Friendship Club because people on other sites were not after a serious relationship. So thanks to Full Moon Friendship I definitely found my keeper!



                                </p>
                                <div class="author-info"> <strong>Simran - <span>Jaipur</span></strong> </div>
                            </div>

                        </div></div>
                    <div class="item"><div class="testimonial bottom_pos">
                            <div class="testimonial-avatar"> <img alt="" src="images/avtar/2.png"> </div>
                            <div class="testimonial-info"><p>
                                    It was amazing and the connection was instant. Now we have that love that I used to look at others and think it wasn't real. Over two and a half years later and we are engaged and couldn't be happier

                                </p>
                                <div class="author-info"> <strong>Suraj - <span>Ludhina</span></strong> </div>
                            </div>
                        </div></div>
                    <div class="item"><div class="testimonial bottom_pos">
                            <div class="testimonial-avatar"> <img alt="" src="images/avtar/3.jpg"> </div>
                            <div class="testimonial-info"><p>

                                    Customer Care service is really great ,they made me very satisfied. Now I not bore at home....


                                </p>
                                <div class="author-info"> <strong>Kumar - <span> Bhopal</span></strong> </div></div>
                        </div></div>
                </div>
            </div>
        </div>
    </div>
</section>





<!--=================================
 page-section -->




    @endsection