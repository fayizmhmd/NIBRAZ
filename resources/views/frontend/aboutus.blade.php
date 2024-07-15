@extends('frontend.layouts.master')
@section('title', 'About Us')

@section('content')
<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ asset('assets/frontend/images/banner/3.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Fusing logic with imagination and truth with discovery.</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-t80 p-b50 bg-gray square_shape2">
        <div class="container">
            <div class="section-content ">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-12 m-b50">
                        <div class="m-about m-l50 m-r50">
                            <div class="owl-carousel about-us-carousel owl-btn-bottom-right">
                                <!-- COLUMNS 1 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/nib-images/new/Untitled design.png') }}" alt=""></a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/nib-images/new/Untitled design.jpg') }}" alt=""></a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="owl-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/nib-images/new/Untitled design (3).jpg') }}" alt=""></a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/nib-images/new/Untitled design (2).jpg') }}" alt=""></a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/nib-images/new/Untitled design (1).jpg') }}" alt=""></a>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 m-b30">
                        <div class="m-about-containt text-uppercase text-black p-t30">
                            <span class="font-30 font-weight-300">About Us</span>
                            <h2 class="font-40">Our mission is the best interior design & development.</h2>
                            <p><b>Innovating the Future of Interior Design & Development through pioneering concepts, cutting-edge techniques, and setting new industry standards</b></p>
                            <p style="text-transform: capitalize;" class="">NIBRAZ BUILDERS LLC is an architectural firm dedicated to setting the highest standards in interior design and development. Our mission is to transform spaces with unmatched creativity and precision, ensuring each project reflects our commitment to excellence and innovation. By pioneering new design concepts and utilizing cutting-edge techniques, we aim to redefine the industry and exceed our clients' expectations.
                            </p>
                            <p style="text-transform: capitalize;">
                                Our team of experienced architects and designers collaborates closely with clients to understand their unique vision and requirements. We believe in the power of thoughtful design to enhance the way people live, work, and interact within a space. Every project we undertake is a testament to our passion for creating functional, aesthetically pleasing environments that inspire and elevate the human experience.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->

    <!-- OUR EXPERTS SECTION START -->
    <div class="section-full bg-white  square_shape2">
        <div class="container-fluid">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12 bg-repeat" style="background-image:url(../images/background/ptn-1.png);">
                        <div class="wt-left-part2 m-experts p-tb90">
                            <!-- TITLE START -->
                            <div class="section-head text-left text-black">
                                <h2 class="text-uppercase font-36">Our experts</h2>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator bg-black"></div>
                                </div>
                            </div>
                            <!-- TITLE END -->
                            <div class="wt-team-six large-pic">
                                <div class="wt-team-media wt-thum-bx">
                                    <img src="{{ asset('assets/frontend/nib-images/new/Director-Nibraz.jpg') }}" alt="">
                                </div>
                                <div class="wt-team-info text-center p-lr10 p-tb20 bg-white">
                                    <h2 class="wt-team-title text-uppercase text-black font-32 font-weight-500">Salahudheen</h2>
                                    <p class="font-22">Director Nibraz</p>
                                    <ul class="social-icons social-md social-square social-dark">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-right-part2 team-outer">
                            <div class="row">
                                <!-- COLUMNS 1 -->
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-six bg-white">
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                            <img src="{{ asset('assets/frontend/images/our-team5/pic2.jpg') }}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0">David Gray</h5>
                                            <p class="m-b0">Co-manager associated</p>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-six bg-white">
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                            <img src="{{ asset('assets/frontend/images/our-team5/pic3.jpg') }}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0">Taylor Roberts</h5>
                                            <p class="m-b0">Co-manager associated</p>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-six bg-white">
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                            <img src="{{ asset('assets/frontend/images/our-team5/pic4.jpg') }}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0">Robert willson</h5>
                                            <p class="m-b0">Co-manager associated</p>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-tb15">
                                    <div class="wt-team-six bg-white">
                                        <div class="wt-team-media wt-thum-bx wt-img-overlay1">
                                            <img src="{{ asset('assets/frontend/images/our-team5/pic5.jpg') }}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="social-icons social-square social-dark">
                                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wt-team-info text-center bg-white p-lr10 p-tb20">
                                            <h5 class="wt-team-title text-uppercase m-a0">Austin Evon</h5>
                                            <p class="m-b0">Co-manager associated</p>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR EXPERTS SECTION END -->

    <!-- OUR SERVICES SECTION START -->
    <div class="section-full bg-black p-t80 p-b50 square_shape1">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-left text-white">
                <h2 class="text-uppercase font-36">Our Services</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-white"></div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content circle-block-outer" data-bs-toggle="tab-hover">
                <div class="row nav nav-tab">

                    <div class="col-lg-4 col-md-12 m-b30">

                        <div class="nav-item">
                            <a class="nav-link active wt-icon-box-wraper right p-a20 text-white" href="#tab1" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Building Construction</h4>
                                    <p style="text-align: justify !important;">Explore Nibraz Builders' expertise in creating durable, sustainable buildings with innovative designs. Each project, residential or commercial, showcases our commitment to lasting quality. See how we bring ideas to life.</p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a20 text-white" href="#tab2" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Building Renovation</h4>
                                    <p style="text-align: justify !important;">
                                        Revitalize your space with Nibraz Builders' expert renovation services. We enhance functionality and aesthetics while preserving your vision. Trust us to transform your residential or commercial property with precision and care.</p>
                                </div>
                            </a>
                        </div>


                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a20 text-white" href="#tab3" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Flooring & Roofing</h4>
                                    <p style="text-align: justify !important;">Nibraz Builders offers expert flooring and roofing solutions, combining durability with aesthetic appeal. Whether renovating or constructing, trust us for high-quality materials and meticulous craftsmanship to enhance your space.</p>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12 m-b30">
                        <div class="circle-content-pic tab-content ">

                            <div id="tab1" class="tab-pane active show">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 ">
                                        <img src="{{ asset('assets/frontend/nib-images/serv/BuildingConstruction.jpg') }}" alt="">

                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/nib-images/serv/BuildingRenovation.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/nib-images/serv/FlooringRoofing.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/nib-images/serv/BuildingMaintenance.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab5" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/nib-images/serv/ConcreteWorks.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab6" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/nib-images/serv/ProjectMgmt.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                         </div>
                    </div>

                    <div class="col-lg-4 col-md-12 m-b30">

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab4" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Building Maintenance</h4>
                                    <p style="text-align: justify !important;">Ensure your property remains pristine with Nibraz Builders' comprehensive maintenance services. From routine inspections to timely repairs, we safeguard structural integrity and enhance longevity, ensuring your building retains its value. </p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab5" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Concrete Works</h4>
                                    <p style="text-align: justify !important;">Trust Nibraz Builders for expert concrete solutions. From foundations to structures, we ensure durability and precision. Our skilled team delivers quality concrete works, meeting project timelines and exceeding expectations.</p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab6" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Project Management</h4>
                                    <p style="text-align: justify !important;"> Trust Nibraz Builders for seamless project management services. From inception to completion, we oversee every detail with precision. Our expertise ensures on-time delivery and quality outcomes for your construction projects.</p>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
    <!-- OUR SERVICES SECTION END -->

    <!-- OUR STORY SECTION START -->
    <div class="section-full bg-gray p-t80 p-b50 square_shape1">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-left text-black">
                <h2 class="text-uppercase font-36">Our Story</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator bg-black"></div>
                </div>
            </div>
            <!-- TITLE END -->
            <div class="section-content our-story">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-media our-story-pic">
                            <img src="{{ asset('assets/frontend/nib-images/new/velliyarnew.png') }}" alt="" style="object-fit: cover">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">

                            <h2 class="text-uppercase">Velliyar Mall</h2>
                            <p  style="text-align: justify !important;">
                                Velliyarmall, crafted by Nibraz Architectures in Perinthalmanna, exemplifies contemporary architectural excellence, offering a blend of functionality and aesthetic appeal. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-media our-story-pic">
                            <img src="{{ asset('assets/frontend/nib-images/new/1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">

                            <h2 class="text-uppercase">Rugmini Resedence Home</h2>
                            <p style="text-align: justify !important;">
                                The Rugmini Residence Home, designed by Nibraz Architecture, combines contemporary aesthetics with cozy living spaces, providing an ideal environment for modern family life.</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-media our-story-pic">
                            <img src="{{ asset('assets/frontend/nib-images/new/2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">

                            <h2 class="text-uppercase">Savion Mall</h2>
                            <p style="text-align: justify !important;">Savion Mall, a premier shopping complex designed by Nibraz Architecture, features a modern layout and diverse retail spaces, offering a dynamic shopping experience.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-media our-story-pic">
                            <img src="{{ asset('assets/frontend/nib-images/new/3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">

                            <h2 class="text-uppercase">House in Mulliyakkurssi</h2>
                            <p style="text-align: justify !important;">The house in Mulliyakurssi, crafted by Nibraz Architecture, embodies contemporary design and comfort, creating a perfect sanctuary for its residents.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <!-- OUR STORY SECTION END -->

</div>
<!-- CONTENT END -->

@endsection


