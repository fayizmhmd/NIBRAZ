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
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/gallery/portrait/pic2.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/gallery/portrait/pic3.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="item">
                                    <div class="owl-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/gallery/portrait/pic4.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/gallery/portrait/pic5.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                                <!-- COLUMNS 5 -->
                                <div class="item">
                                    <div class="ow-img wt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/gallery/portrait/pic6.jpg') }}" alt=""></a>
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
                                    <img src="{{ asset('assets/frontend/images/our-team5/pic1.jpg') }}" alt="">
                                </div>
                                <div class="wt-team-info text-center p-lr10 p-tb20 bg-white">
                                    <h2 class="wt-team-title text-uppercase text-black font-32 font-weight-500">Robert willson</h2>
                                    <p class="font-22">Co-manager associated</p>
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
                                    <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Master Plans</h4>
                                    <p style="text-align: justify !important;">Master plans are strategic documents outlining development goals, integrating urban design, infrastructure, land use, and community needs to create cohesive, sustainable environments for future growth. </p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a20 text-white" href="#tab2" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Architecture</h4>
                                    <p style="text-align: justify !important;">
                                        Architecture encompasses the art and science of designing and constructing buildings and other physical structures, focusing on aesthetic, functional, and environmental considerations to create spaces that serve human needs and aspirations</p>
                                </div>
                            </a>
                        </div>


                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a20 text-white" href="#tab3" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Landscaping</h4>
                                    <p style="text-align: justify !important;">Landscaping involves the planning, design, and maintenance of outdoor spaces, including gardens, parks, and urban green areas. It focuses on enhancing the natural environment through the strategic placement of plants, trees, paths, and structures to create aesthetically pleasing and functional outdoor spaces.</p>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-12 m-b30">
                        <div class="circle-content-pic tab-content ">

                            <div id="tab1" class="tab-pane active show">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 ">
                                        <img src="{{ asset('assets/frontend/images/gallery/portrait/pic1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/images/gallery/portrait/pic2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/images/gallery/portrait/pic3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/images/gallery/portrait/pic4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab5" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/images/gallery/portrait/pic5.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab6" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20">
                                        <img src="{{ asset('assets/frontend/images/gallery/portrait/pic6.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                         </div>
                    </div>

                    <div class="col-lg-4 col-md-12 m-b30">

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab4" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Interior</h4>
                                    <p style="text-align: justify !important;">Interior design enhances building interiors through furniture, color, lighting, and materials, creating functional and aesthetically pleasing spaces tailored to occupants' needs. </p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab5" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Construction</h4>
                                    <p style="text-align: justify !important;">Construction involves the process of building or assembling infrastructure and buildings, encompassing planning, design, financing, and execution, to create physical structures that meet specific functional and aesthetic requirements.</p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab6" data-bs-toggle="tab">
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Urban Designs</h4>
                                    <p style="text-align: justify !important;"> Urban design plans and shapes cities to create functional, attractive, and sustainable environments, integrating architecture, infrastructure, public spaces, and transportation to enhance quality of life and promote economic and social well-being.</p>
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
                            <img src="{{ asset('assets/frontend/images/gallery/pic1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">
                            <h3 class="text-uppercase">2011-12</h3>
                            <h2 class="text-uppercase">Park Boathouse</h2>
                            <p  style="text-align: justify !important;">
                                The park boathouse harmoniously integrates functional amenities with natural surroundings, emphasizing practicality and aesthetic appeal to enhance the waterfront recreational experience. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-media our-story-pic">
                            <img src="{{ asset('assets/frontend/images/gallery/pic3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">
                            <h3 class="text-uppercase">2013-14</h3>
                            <h2 class="text-uppercase">Museum Expansion</h2>
                            <p style="text-align: justify !important;">
                                The museum expansion project aims to enhance exhibit space and visitor amenities while preserving and complementing the original architecture, accommodating growing collections and improving visitor experiences.</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-media our-story-pic">
                            <img src="{{ asset('assets/frontend/images/gallery/pic4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">
                            <h3 class="text-uppercase">2015-16</h3>
                            <h2 class="text-uppercase">Eisenhower Memoria</h2>
                            <p style="text-align: justify !important;">The Eisenhower Memorial honors President Dwight D. Eisenhower's legacy through a design that blends architecture, landscape, and public art to create a contemplative and educational space for visitors to reflect on his contributions to the nation.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="wt-media our-story-pic">
                            <img src="{{ asset('assets/frontend/images/gallery/pic5.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                        <div class="wt-box our-story-detail">
                            <h3 class="text-uppercase">2017-18</h3>
                            <h2 class="text-uppercase">Columbia Sport Center</h2>
                            <p style="text-align: justify !important;">The Columbia Sport Center is a state-of-the-art facility designed to accommodate a variety of sports and recreational activities, featuring modern architecture that enhances functionality and provides a dynamic space for athletes and enthusiasts alike.</p>
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


