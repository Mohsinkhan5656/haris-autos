<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Haris Autos</title>

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
<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

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
                            <li>Welcome to Our Auto Work Repair Service</li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="social-icon-one clearfix">
                            <li><a href="javascript:void(0)"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="javascript:void(0)"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="javascript:void(0)"><span class="fab fa-google-plus-g"></span></a></li>
                            <li><a href="javascript:void(0)"><span class="fab fa-pinterest"></span></a></li>
                            <li><a href="javascript:void(0)"><span class="fab fa-dribbble"></span></a></li>
                        </ul>
                        <div class="call-btn">
                            <a href="javascript:void(0)">Book Now</a>
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
                    	<div class="logo"><a href="{{route('home')}}"><img src="{{ asset('assets/images/logo.png')}}" alt="" title=""></a></div>
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
                                <li><a href="javascript:void(0)">harisautos1@outlook.com</a></li>
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
                                <li class="current dropdown"><a href="{{route('home')}}">Home</a>
								</li>
                                <li><a href="{{route('about')}}">About</a>
                                </li>
                                <li><a href="{{route('contact')}}">Join Us</a>
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
                	<a href="{{route('home')}}" class="img-responsive"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a>
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
                                <li class="current dropdown"><a href="{{route('home')}}">Home</a>
								</li>
                                <li><a href="{{route('about')}}">About</a>
                                </li>
                                <li><a href="{{route('contact')}}">Join Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('assets/images/main-slider/image-1.jpg')}}" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/main-slider/image-1.jpg')}}">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['550','600','550','550']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-120','-120','-120','-120']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h4>Your Vehicle is</h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','700','700']"
                        data-whitespace="normal"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['-65','-65','-65','-65']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Save in our Hands</h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['700','700','450','450']"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['5','5','5','5']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">We specialize in complete auto care at a low cost and in a <br> professional manner.</div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="auto"
                        data-whitespace="nowrap"
                        data-hoffset="['15','15','15','15']"
                        data-voffset="['105','105','105','105']"
                        data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="javascript:void(0)" class="theme-btn btn-style-one">Booking Now</a>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('assets/images/main-slider/image-1.jpg')}}" data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/main-slider/image-2.jpg')}}">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['550','600','550','550']"
                        data-whitespace="normal"
                        data-textalign="center"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-120','-120','-120','-120']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h4>The Best Car Repair and</h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['700','700','700','700']"
                        data-textalign="center"
                        data-whitespace="normal"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-65','-65','-65','-65']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Maintenance Auto Service</h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-textalign="center"
                        data-whitespace="normal"
                        data-width="['700','700','550','450']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['5','5','5','15']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">We specialize in complete auto care at a low cost and in a <br> professional manner.</div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="auto"
                        data-whitespace="nowrap"
                        data-textalign="center"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['105','105','105','105']"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="javascript:void(0)" class="theme-btn btn-style-one">Booking Now</a>
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1697" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('assets/images/main-slider/image-1.jpg')}}" data-title="Slide Title" data-transition="parallaxvertical">
						<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/main-slider/image-3.jpg')}}">

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['490','490','490','490']"
                        data-whitespace="normal"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-120','-120','-120','-120']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h4>The Best Car Repair and</h4>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['490','590','490','490']"
                        data-whitespace="normal"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['-65','-65','-65','-65']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2>Maintenance Service</h2>
                        </div>

                        <div class="tp-caption"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-whitespace="normal"
                        data-width="['490','490','390','490']"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['5','5','5','5']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="text">We specialize in complete auto care at a low cost and in a <br> professional manner.</div>
                        </div>

                        <div class="tp-caption tp-resizeme"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingtop="[0,0,0,0]"
                        data-responsive_offset="on"
                        data-type="text"
                        data-height="none"
                        data-width="['490','490','490','490']"
                        data-whitespace="nowrap"
                        data-hoffset="['0','15','15','15']"
                        data-voffset="['105','105','105','105']"
                        data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <a href="javascript:void(0)" class="theme-btn btn-style-one">Booking Now</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <h2>Welcome to HarisAutos</h2>
                    <h4>Repair and Car Service</h4>
                    <div class="primary-text">Our expert technicians specialize in diagnosing and repairing a wide range of vehicle issues, including engine problems, electrical faults, brake and suspension repairs, and more.</div>
                    <div class="text">HarisAutos is a reputable automotive service provider dedicated to delivering top-notch repair and maintenance services for various vehicle types. With a team of highly skilled technicians and state-of-the-art facilities, we ensure reliable and efficient solutions to keep vehicles running smoothly.</div>
                    <ul class="list-style-one clearfix">
                        <li>Pre-Purchase Inspections</li>
                        <li>Transmission Services</li>
                        <li>Car painting assets and service</li>
                        <li>Air Conditioning and Heating Services</li>
                    </ul>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <a href="{{route('about')}}"><img src="{{ asset('assets/images/resource/about-img.jpg')}}" alt=""></a>
                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h3><a href="{{route('about')}}">Our Mission</a></h3>
                            <p>Our mission is to provide exceptional automotive repair and maintenance services, ensuring safety, reliability, and customer satisfaction in every service we deliver.</p>
                        </div>

                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <h3><a href="{{route('about')}}">Our History</a></h3>
                            <p>Founded on a passion for automotive excellence, we've served our community for 20 years with unwavering commitment, evolving into a trusted name in the automotive repair and service industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Fact counter -->
    <section class="fun-fact-section" style="background-image: url('assets/images/background/1.jpg');">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-avatar-1"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="10">0</span>
                        <div class="counter-title"><h5>Total experts</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-transport"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Service Done</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-boy-broad-smile"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1226">0</span>
                        <div class="counter-title"><h5>Happy Client</h5></div>
                    </div>
                </div>

                <!-- Count box -->
                <div class="count-box col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-car-1"></span></div>
                        <span class="count-text" data-speed="2000" data-stop="1035">0</span>
                        <div class="counter-title"><h5>Total Service</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fact counter -->

    <!-- Feature Section -->
    <section class="feature-section" style="background-image: url('assets/images/background/2.jpg');">
        <div class="auto-container">
            <div class="title-box">
                <h2>Our Features</h2>
            </div>

            <div class="features-carousel owl-carousel owl-theme">
                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Suspension Repair</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-2.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Engine Overhaul</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-3.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Wheel Alignment</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-4.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Car Inspection</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Suspension Repair</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-2.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Engine Overhaul</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-3.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Wheel Alignment</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>

                <!-- Feature block -->
                <div class="feature-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/resource/feature-4.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="javascript:void(0)">Car Inspection</a></h3>
                            <a href="javascript:void(0)" class="read-more"><i class="fa fa-angle-right"></i> Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Latest Works</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

             <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">View All</li>
                        <li class="filter" data-role="button" data-filter=".diagnostics">Diagnostics</li>
                        <li class="filter" data-role="button" data-filter=".engine">Engine</li>
                        <li class="filter" data-role="button" data-filter=".repair">Repairs</li>
                        <li class="filter" data-role="button" data-filter=".wheel">Wheel Service</li>
                        <li class="filter" data-role="button" data-filter=".conditioner">Air Conditioner</li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">
                    <!-- Project item -->
                    <div class="gallery-item mix all engine wheel conditioner col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assets/images/gallery/1.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="javascript:void(0)" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assets/images/gallery/1.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="javascript:void(0)">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all diagnostics repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assets/images/gallery/2.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="javascript:void(0)" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assets/images/gallery/2.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="javascript:void(0)">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all engine repair conditioner col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assets/images/gallery/3.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="javascript:void(0)" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assets/images/gallery/3.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="javascript:void(0)">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all wheel repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assets/images/gallery/4.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="javascript:void(0)" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assets/images/gallery/4.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="javascript:void(0)">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all diagnostics conditioner engine col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assets/images/gallery/5.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="javascript:void(0)" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assets/images/gallery/5.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="javascript:void(0)">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="gallery-item mix all wheel repair col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('assets/images/gallery/6.jpg')}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="icon-box">
                                    <a href="javascript:void(0)" class="link"><span class="icon fa fa-link"></span></a>
                                    <a href="{{asset('assets/images/gallery/6.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-expand-arrows-alt"></span></a>
                                    <h3><a href="javascript:void(0)">Car Repair Service</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box text-center">
                    <a href="javascript:void(0)" class="theme-btn btn-style-two">View All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery section -->

    <!-- Tesm Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Expert Workers</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

            <div class="row clearfix">

                 <!-- Team Block -->
                 <div class="team-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                           
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{asset('assets/images/resource/team-2.png')}}" alt=""></figure>
                            <ul class="social-icon">
                                <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="inner-box">
                                <h3 class="name"><a href="javascript:void(0)">Mian Ahmed</a></h3>
                                <span class="designation">Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>

                  <!-- Team Block -->
                  <div class="team-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            
                        </div>
                        
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Tesm Section -->

    <!-- Testimonial Seectin -->
    <section class="testimonial-section" style="background-image: url('assets/images/background/3.jpg');">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>What Client Says</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-carousel owl-carousel owl-theme">

				<div class="testimonial-block even">
					<figure class="thumb"><img src="{{asset('assets/images/resource/thumb-1.jpg')}}" alt=""></figure>
					<p>“They diagnosed and fixed the issue with my car in no time. The staff was courteous and explained everything clearly. I highly recommend their services to anyone needing reliable car repairs.”</p>
					<div class="name">DAVID MATIN</div>
					<span class="icon fa fa-quote-left"></span>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block even">
					<figure class="thumb"><img src="{{asset('assets/images/resource/thumb-2.jpg')}}" alt=""></figure>
					<p>“The team was friendly, and their attention to detail was impressive. I'm grateful for their exceptional service and quick turnaround.”</p>
					<div class="name">Emma Johnson</div>
					<span class="icon fa fa-quote-left"></span>
				</div>

				<div class="testimonial-block even">
                    <figure class="thumb"><img src="{{asset('assets/images/resource/thumb-1.jpg')}}" alt=""></figure>
                    <p>“They diagnosed and fixed the issue with my car in no time. The staff was courteous and explained everything clearly. I highly recommend their services to anyone needing reliable car repairs.”</p>
                    <div class="name">DAVID MATIN</div>
                    <span class="icon fa fa-quote-left"></span>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block even">
                    <figure class="thumb"><img src="{{asset('assets/images/resource/thumb-2.jpg')}}" alt=""></figure>
                    <p>“The team was friendly, and their attention to detail was impressive. I'm grateful for their exceptional service and quick turnaround.”</p>
                    <div class="name">Emma Johnson</div>
                    <span class="icon fa fa-quote-left"></span>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Seectin -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Contact US</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
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
                                <p><span>Email:</span><a href="javascript:void(0)">harisautos1@outlook.com</a></p>
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
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/4.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/1.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/2.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/3.png')}}" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="javascript:void(0)"><img src="{{asset('assets/images/clients/4.png')}}" alt=""></a></figure></li>
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
                                    <a href="{{route('home')}}"><img src="{{asset('assets/images/footer-logo.png')}}" alt=""></a>
                                </figure>
                            </div>
                            <div class="widget-content">
                                <div class="text">How to pursue pleasure rationally thats encounter consequences that extremely painful. Nor again is there anyones who loves or pursues or ut desires obtains pain of itself, because.</div>
                                <h4>Follow Us:</h4>
                                <ul class="social-icon">
                                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fab fa-dribbble"></i></a></li>
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
                                    <li><a href="javascript:void(0)">Engine Diagnostic & Repair</a></li>
                                    <li><a href="javascript:void(0)">Maintanence Inspaection</a></li>
                                    <li><a href="javascript:void(0)">Electrical System Diagnostic</a></li>
                                    <li><a href="javascript:void(0)">Wheel Allignment & Installation</a></li>
                                    <li><a href="javascript:void(0)">Air Conditioner Service & Repair</a></li>
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
                                    <h4><a href="javascript:void(0)">Updates on servicing electric vehicles, needs for EVs.</a></h4>
                                    <span class="date"><i class="far fa-calendar-check"></i>Dec 31, 2023</span>
                                </div>

                                <div class="post">
                                    <h4><a href="javascript:void(0)">News about training programs and skill developments.</a></h4>
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
                    <p>Copyrights © 2024 All Rights Reserved. by <a href="javascript:void(0)"> Haris Autos</a></p>
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
