<!DOCTYPE html>
<html lang="en">



<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/NIBRAZ ONLY fav.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/NIBRAZ ONLY fav.png" />

    <!-- PAGE TITLE HERE -->
    <title>@yield('title') | Nirbaz Builders</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/loader.min.css')}}"> <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/bootstrap.min.css')}}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/fontawesome/css/font-awesome.min.css')}}" /><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/magnific-popup.min.css')}}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}"><!-- MAIN STYLE SHEET -->
    <!-- REVOLUTION SLIDER 4 STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/rev-slider-4.css')}}">
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/plugins/revolution/revolution/css/navigation.css')}}">

 	<!-- BEFORE/AFTER ADD-ON FILES  MUST BE INSERTED AFTER THE SLIDER DOM ELEMENTS !-->
	<link rel='stylesheet' href="{{asset('assets/frontend/plugins/revolution/revolution-addons/beforeafter/css/revolution.addon.beforeafter.css')}}" type='text/css' media='all' />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">

</head>

<body id="bg">

	<div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-1  nav-wide mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white p-t10">
                    <div class="container">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="/">
                                <img src="{{asset('assets/frontend/images/NIBRAZ ONLY (B).png')}}" width="171" height="80" alt="" />
                            </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse">
                            <ul class=" nav navbar-nav">
                                <!-- <li class="active">
                                    <a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">Home-1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home-2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home-3</a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">Home-4</a>
                                        </li>
                                        <li>
                                            <a href="index-5.html">Home-5</a>
                                        </li>
                                    </ul>
                                </li> -->

                                <li>
                                    <a href="/">Home</a>
                                </li>

                                <li>
                                    <a href="{{ asset('about') }}">About us</a>
                                </li>

                                <li>
                                    <a href="{{ asset('contact') }}">Contact us</a>
                                </li>


                                <li>
                                    <a href="{{ asset('gallery') }}">Gallery</a>
                                </li>

                                <li>

                                    <a href="{{ asset('project') }}">Projects</a>
                                </li>






                                <!-- <li>
                                    <a href="javascript:;">Pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="about-1.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="contact-1.html">Contact us</a>
                                        </li>
                                    </ul>
                                </li> -->


                                <!-- <li>
                                    <a href="javascript:;">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news-grid.html">Grid</a></li>
                                        <li><a href="news-listing.html">Listing</a></li>
                                        <li><a href="news-masonry.html">Masonry</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li>
                                    <a href="javascript:;">Works</a>
                                    <ul class="sub-menu">
                                        <li><a href="work-grid.html">Grid</a></li>
                                        <li><a href="work-masonry.html">Masonry</a></li>
                                        <li><a href="work-carousel.html">Carousel</a></li>
                                        <li><a href="project-detail.html">Project Detail</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li>
                                    <a href="javascript:;">Post detail</a>
                                    <ul class="sub-menu">
                                        <li><a href="post-image.html">Image</a></li>
                                        <li><a href="post-gallery.html">Gallery</a></li>
                                        <li><a href="post-video.html">Video</a></li>
                                        <li><a href="post-right-sidebar.html">Right Sidebar</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li class="submenu-direction">
                                    <a href="javascript:;">Shortcodes</a>
                                    <ul class="sub-menu">
                                        <li><a href="accordian.html">All Elements</a></li>
                                    </ul>
                                </li>                                 -->
                            </ul>
                        </div>
                        <!-- ETRA Nav -->
                        <!-- <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                         </div> -->
                        <!-- SITE Search -->
                        <!-- <div id="search">
                            <span class="close"></span>
                            <form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div> -->

                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->
