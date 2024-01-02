<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Haris Autos</title>
<link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{asset('assets/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{asset('assets/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{asset('assets/css/color-switcher-design.css')}}" rel="stylesheet">


<!--Color Themes-->
<link id="theme-color-file" href="{{asset('assets/css/color-themes/default-theme.css')}}" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

        <!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li>HarisAutos is your one step solution for all auto repair needs!</li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="social-icon-one clearfix">
                            <li><a href="#"><span class="fa fa-phone-volume">_24/7 Support_02034902176</span></a></li>
                        </ul>
                        <div class="call-btn">
                            <a href="#">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	<div class="pull-left logo-outer">
                    	<div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png')}}" alt="" title=""></a></div>
                    </div>
                    <div class="pull-right upper-right clearfix">
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-home"></span></div>
                            <ul>
                            	<li><strong>SW24BT, 4 Ardwell Road</strong></li>
                                <li>Streatham Hill, London</li>
                            </ul>

                        </div>
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-mail-1"></span></div>
                            <ul>
                            	<li><strong>Send your mail at</strong></li>
                                <li><a href="#">harisautos1@outlook.com</a></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock"></span></div>
                            <ul>
                                <li><strong>Working Hours</strong></li>
                                <li>Mon-Sat:9.00am to 18.00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">

        	<div class="auto-container">
            	<div class="nav-outer clearfix">
                    <!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
                                <li><a href="{{route('home')}}">Home</a>
								</li>
                                <li><a href="{{route('about')}}">About</a>
                                </li>
                                <li class="current dropdown" ><a href="{{route('contact')}}">Join Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu  navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li><a href="{{route('home')}}">Home</a>
								</li>
                                <li><a href="{{route('about')}}">About</a>
                                </li>
                                <li class="current dropdown"><a href="#">Join Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

        <!--Page Title-->
        <section class="page-title" style="background-image:url('assets/images/background/8.jpg');">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>JOIN US</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        </section>
    <!--End Page Title-->

           <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Join US</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <div class="contact-form">
                <form method="post" action="{{ route('submit.form') }}" id="contact-form">
                 @csrf
                                    <!-- Display the form -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group pull-right">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="tel" name="phone" placeholder="Phone No" required="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <select name="subject" required="">
                                        <option value="Mechanic">Mechanic</option>
                                        <option value="Electrition">Electrition</option>
                                        <option value="Dentar">Dentar</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button type="submit" name="submit-form">send Massage</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="contact-info">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                        <figure><img src="{{asset('assets/images/resource/car-image.png')}}" alt=""></figure>
                    </div>

                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <span class="icon flaticon-placeholder"></span>
                                <p><strong>Address:</strong><br>SW24BT, 4 Ardwell Road Streatham Hill, London.</p>
                            </li>

                            <li>
                                <span class="icon flaticon-phone"></span>
                                <p><strong>Phone:</strong>+44 7393 547570</p>
                                <p><span>Email:</span><a href="#">harisautos1@outlook.com</a></p>
                            </li>

                            <li>
                                <span class="icon flaticon-stopwatch"></span>
                                <p><strong>Workshop Timeing :</strong><br>  09:00am to 18:00pm  Sunday Closed</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.006423477938!2d-0.12908432467201086!3d51.43967591565021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604251a487ff9%3A0xc63d1f7b59a87e59!2sHARIS%20AUTOS!5e0!3m2!1sen!2s!4v1704222732902!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </section>
    <!-- End Map Section -->

    <!--Clients Section-->
    <section class="clients-section">
    <div class="auto-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/1.png')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/2.png')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/3.png')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/4.png')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/1.png')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/2.png')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/3.png')}}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{asset('assets/images/clients/4.png')}}" alt=""></a></figure></li>
            </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-image: url('assets/images/background/4.jpg');">
        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <figure>
                                    <a href="index.html"><img src="{{asset('assets/images/footer-logo.png')}}" alt=""></a>
                                </figure>
                            </div>
                            <div class="widget-content">
                                <div class="text">How to pursue pleasure rationally thats encounter consequences that extremely painful. Nor again is there anyones who loves or pursues or ut desires obtains pain of itself, because.</div>
                                <h4>Follow Us:</h4>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget services-widget">
                            <h2 class="widget-title">Our Services</h2>
                            <div class="widget-content">
                                <ul class="services-list">
                                    <li><a href="#">Engine Diagnostic & Repair</a></li>
                                    <li><a href="#">Maintanence Inspaection</a></li>
                                    <li><a href="#">Electrical System Diagnostic</a></li>
                                    <li><a href="#">Wheel Allignment & Installation</a></li>
                                    <li><a href="#">Air Conditioner Service & Repair</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!--Footer Column-->
                        <div class="footer-widget gallery-widget">
                            <h2 class="widget-title">Instragram</h2>
                             <!--Footer Column-->
                            <div class="widget-content">
                                <div class="outer clearfix">
                                    <figure class="image">
                                        <a href="{{asset('assets/images/resource/insta-1.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/resource/insta-1.jpg')}}" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="{{asset('assets/images/resource/insta-2.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/resource/insta-2.jpg')}}" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="{{asset('assets/images/resource/insta-3.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/resource/insta-3.jpg')}}" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="{{asset('assets/images/resource/insta-4.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/resource/insta-4.jpg')}}" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="{{asset('assets/images/resource/insta-5.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/resource/insta-5.jpg')}}" alt=""></a>
                                    </figure>

                                    <figure class="image">
                                        <a href="{{asset('assets/images/resource/insta-6.jpg')}}" class="lightbox-image" title="Image Title Here"><img src="{{asset('assets/images/resource/insta-6.jpg')}}" alt=""></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <!--Footer Column-->
                        <div class="footer-widget news-widget">
                            <h2 class="widget-title">Latest News</h2>
                             <!--Footer Column-->
                            <div class="widget-content">
                                <div class="post">
                                    <h4><a href="#">Updates on servicing electric vehicles, needs for EVs.</a></h4>
                                    <span class="date"><i class="far fa-calendar-check"></i>Dec 31, 2023</span>
                                </div>

                                <div class="post">
                                    <h4><a href="#">News about training programs and skill developments.</a></h4>
                                    <span class="date"><i class="far fa-calendar-check"></i>Jan 01, 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text">
                    <p>Copyrights © 2024 All Rights Reserved. by <a href="#"> Haris Autos</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!--Revolution Slider-->
<script src="{{asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/js/main-slider-script.js')}}"></script>
<!--End Revolution Slider-->
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/mixitup.js')}}"></script>
<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCrOYxoFhIZGvi6XhIQsvJOdUJQmm_beS8"></script>
<script src="{{asset('assets/js/map-script.js')}}"></script>
<!--End Google Map APi-->
<script src="{{asset('assets/js/color-settings.js')}}"></script>
</body>
</html>
