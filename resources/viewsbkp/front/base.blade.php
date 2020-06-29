
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/cupid-love-dating-website-html5-template/index-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2018 19:20:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{ env('NAME') }}" />
    <meta name="description" content=" {{ env('NAME') }}" />
    <meta name="author" content="{{ env('NAME') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Welcome to {{ env('NAME') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- mega menu -->
    <link href="{{asset('css/mega-menu/mega_menu.css')}}" rel="stylesheet" type="text/css" />

    <!-- font-awesome -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Flaticon -->
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css" />

    <!-- Magnific popup -->
    <link href="{{asset('css/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

    <!-- owl-carousel -->
    <link href="{{asset('css/owl-carousel/owl.carousel.css')}}" rel="stylesheet" type="text/css" />

    <!-- General style -->
    <link href="{{asset('css/general.css')}}" rel="stylesheet" type="text/css" />

    <!-- main style -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="#" data-style="styles" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-customizer.css')}}" />


    <style>
        img.ri
        {
            position: absolute;
            max-width: 80%;
            top: 10%;
            left: 10%;
            border-radius: 3px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.9);
        }
    </style>


</head>

<body>

<!--=================================
 preloader -->

<div id="preloader">
    <h1 style="margin-top: 20%">Loading</h1>
</div>
<!--=================================
header -->

<header id="header" class="dark">

    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="topbar-left text-left">
                        <ul class="list-inline">
                            <li><a href="mailto:support@website.com"><i class="fa fa-envelope-o"> </i> support@ {{ env('DOMAIN') }} </a></li>
                            <li><a href="tel:{{ env('NUM') }}"><i class="fa fa-phone"></i> {{ env('NUMS') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">

                </div>
            </div>
        </div>
    </div>
    <!--=================================
     mega menu -->

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="/"><img src="{{asset('images/logo.png')}}" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li class="active"><a href="/"> Home <i class="fa  fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->

                                </li>

                                <li><a href="/membership">Membership <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->

                                </li>

                                <li><a href="/about">About <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->

                                </li>
                                <li><a href="/contact">Contact <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                </li>


                                <li><a href="tel:{{ env('NUM') }}">Call {{ env('NUM') }} <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--=================================
 header -->

<!--=================================
 banner -->

@yield('contents')

<!--=================================
 banner -->


<!--=================================
 Page Section -->


<!--=================================
footer -->

<footer class="page-section-pt text-white text-center" style="background: url(images/pattern/04.png) no-repeat 0 0; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="row mb-50">
                    <div class="col-sm-12">
                        <h2 class="title divider mb-30">Register for Free</h2>

                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12 mb-30">

                    </div>
                    <div class="col-sm-12">

                        <form  class="main-form"


                              action="{{route('save')}}"
                              method="post"
                        >

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group half-group">
                                <div class="input-group">
                                    <input required  placeholder="Your name here" class="form-control" name="name" type="text">
                                </div>
                            </div>

                            <div class="form-group half-group">
                                <div class="input-group">
                                    <input required  placeholder="Mobile Number"minlength="10" maxlength="13" class="form-control" name="mobile" type="number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <textarea required  class="form-control input-message" placeholder="City*" rows="1" name="city"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button id="submit" name="submit" type="submit" value="Send" class="button btn-lg btn-theme full-rounded animated right-icn"><span>Register<i class="glyph-icon flaticon-hearts" aria-hidden="true"></i></span></button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget mt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">


                    <div class="social-icons color-hover mb-10">
                        <a href="{{route('privacy')}}">Privacy Policy & Terms of Service</a>
                    </div>

                    <p class="text-white">© 2017  - {{ env('NAME') }} </p>



                </div>





            </div>





        </div></div>
    <div class="footer-widget mt-50" >
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8" style="margin-bottom: 80px">


                    <img class="ri" src="{{asset('images/security.jpg')}}" alt="">



                </div>





            </div>





        </div></div>


</footer>

<!--=================================
footer -->

<!--=================================
Color Customizer -->


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-level-up"></i></a></div>

<!--=================================
 jquery -->


<!-- jquery  -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>

<!-- appear -->
<script type="text/javascript" src="{{asset('js/jquery.appear.js')}}"></script>

<!-- Menu -->
<script type="text/javascript" src="{{asset('js/mega-menu/mega_menu.js')}}"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>

<!-- counter -->
<script type="text/javascript" src="{{asset('js/counter/jquery.countTo.js')}}"></script>

<!-- Magnific Popup -->
<script type="text/javascript" src="{{asset('js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<!-- style customizer  -->
<script type="text/javascript" src="{{asset('js/style-customizer.js')}}"></script>

<!-- custom -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>


</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/cupid-love-dating-website-html5-template/index-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2018 19:23:39 GMT -->
</html>