@extends('frontend.layouts.master')
@section('title', 'Project')

@section('content')
<!-- CONTENT START -->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url({{ asset('assets/frontend/images/banner/1.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Planning, design, and historic preservation.</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->
                <!-- <div class="p-tb20">
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li>Work masonry</li>
                        </ul>
                    </div>
                </div> -->
                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION CONTENT -->
    <div class="section-full p-t80 p-b50">
        <!-- GALLERY CONTENT START -->
        <div class="container-fluid">
            <div class="portfolio-wrap mfp-gallery work-masonry clearfix">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic1.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">A mixed-use complex featuring residential apartments, retail spaces, and a rooftop garden, designed by Horizon Architects for urban living.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="masonry-item col-lg-6 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/projects/pic-1.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">An eco-friendly office complex with sustainable features such as solar panels and rainwater harvesting, created by EcoDesign Group to promote environmental responsibility.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic3.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">Luxury condominiums overlooking the sea, crafted by Coastal Architects, offering panoramic views and exclusive amenities for discerning homeowners.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic4.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">A modern retail hub with diverse shops and restaurants, designed by Urban Design Studios to enhance shopping convenience and community engagement.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic5.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">Iconic high-rise apartments with sleek, minimalist design, envisioned by Modernist Architects to redefine city living with style and functionality.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 6 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic6.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">A vibrant urban oasis blending residential living, commercial spaces, and recreational facilities, designed by Metropolis Architects for a dynamic city lifestyle.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 7 -->

                    <!-- COLUMNS 8 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic1.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">Suburban townhouses surrounded by landscaped gardens and community parks, designed by GreenField Architects to promote a peaceful and sustainable neighborhood environment.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 9 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic2.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">A mixed-use complex featuring residential apartments, retail spaces, and a rooftop garden, designed by Horizon Architects for urban living.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 10 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic3.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">An eco-friendly office complex with sustainable features such as solar panels and rainwater harvesting, created by EcoDesign Group to promote environmental responsibility.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 11 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic4.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">Luxury condominiums overlooking the sea, crafted by Coastal Architects, offering panoramic views and exclusive amenities for discerning homeowners.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 12 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset('assets/frontend/images/gallery/portrait/pic5.jpg') }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2><a href="project-detail.html" class="text-white font-24 font-weight-300">A modern retail hub with diverse shops and restaurants, designed by Urban Design Studios to enhance shopping convenience and community engagement.</a></h2>
                                        <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- GALLERY CONTENT END -->
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->
@endsection
