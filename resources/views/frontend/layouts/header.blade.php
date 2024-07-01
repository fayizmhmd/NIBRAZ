<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="title" content="LeForum International | Premier Educational Consultancy in Bangalore">


    <meta name="keywords"
        content="LeForum International, educational consultancy, Bangalore, academic guidance, university admission, study abroad, student counseling, top universities, education consultancy services, higher education, college admission support, career counseling">


    <meta name="description"
        content="LeForum International offers expert educational consultancy services, guiding students to achieve academic excellence and gain admission to top universities in banglore.">

    <title>Colleges| Le Forum</title>
    @php
        $path = asset('/');
    @endphp

    <link rel="shortcut icon" href="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
        type="image/x-icon" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.36.0/tabler-icons.min.css" />

    <link rel="stylesheet" href="{{ $path }}frontstyles/assets/css/style.min.css" />

    <style>
        .custom-alert {
    display: none;
    position: fixed;
    top: 20px;
    left: 0;
    right: 0;
    margin: 0 auto;
    background-color: green; /* Light background color */
     /* Black text color */
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    z-index: 1000;
    width: 300px;
    border: 1px solid green;
    text-align: center;
}
.success-message{
    color: black !important;
}
    </style>
</head>

<body class="n0-bg">

    <div id="preloader">

        <img style="width: 150px" src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
            alt="img" class="bookicon-preloader" />
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="mat-icon fas fa-angle-double-up"></i>
    </button>

    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>

    <header class="header-section">

        <div class="header__topone header__bg">
            <div class="container">
                <div class="top-header d-flex gap-5 align-items-center justify-content-between py-lg-5 py-4">
                    <div class="d-flex gap-lg-10 gap-xl-15 align-items-center">



                        <div class="category__oneadjust gap-6 d-flex align-items-center">

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="one__header bg1-color">

            <div class="container">

                <div class="main-navbar one__mainheader">

                    <nav class="navbar-custom">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ route('front.allcolleges') }}" class="nav-brand d-block d-lg-none">
                                <img style="width: 200px" class="d-none d-md-block"
                                    src="{{ $path }}frontstyles/assets/images/le-logo-white-12.png"
                                    alt="logo" />
                                <img style="width: 200px" class="d-block d-md-none"
                                    src="{{ $path }}frontstyles/assets/images/le-logo-gold-12.png"
                                    alt="logo" />
                            </a>
                            <div class="d-flex gap-6">
                                <div class="switch-wrapper-top d-flex d-lg-none"></div>
                                <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="navbar-toggle-item cus__scroll">
                            <div
                                class="d-flex gap-5 flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between mt-5 mt-lg-0">
                                <a href="{{ route('front.allcolleges') }}" class="navbar-brand logo">
                                    <img style="width: 70px" class=""
                                        src="{{ $path }}frontstyles/assets/images/le-logo-gold-EMBLEM.png"
                                        alt="logo" />
                                </a>
                                <ul class="custom-nav d-lg-flex d-grid gap-4 gap-xl-6">
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('admin.home') }}" class="fw_500 n0-color">Home</a>

                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('front.allcolleges') }}" class="fw_500 n0-color">Colleges</a>


                                    </li>
                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('front.viewAboutUs') }}" class="fw_500 n0-color">About Us</a>

                                    </li>

                                    <li class="menu-item itembg__1 position-relative">
                                        <a href="{{ route('front.viewContactUs') }}" class="fw_500"> Contact Us </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>
