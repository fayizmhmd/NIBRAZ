@extends('frontend.layouts.master')
@section('title', 'Gallery')

@section('content')

<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url ({{asset('assets/frontend/images/banner/6.jpg')}});">

       
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Sustainability, Innovation, and Craftmanship</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                <!-- <div class="p-tb20">
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div> -->
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <!-- PAGINATION START -->
            <div class="filter-wrap p-b50">
                <ul class="masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".cat-1" href="#">House</a></li>
                        <li><a data-filter=".cat-2" href="#">Building</a></li>
                        <li><a data-filter=".cat-3" href="#">Office</a></li>
                        <li><a data-filter=".cat-4" href="#">Garden</a></li>
                        <li><a data-filter=".cat-5" href="#">Interior</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->
        </div>
        <!-- GALLERY CONTENT START -->
         <div class="portfolio-wrap mfp-gallery work-grid clearfix">
             <div class="container-fluid">
                   <div class="row">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item cat-1 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic1.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Sunset Plaza</a></h2>
                                            <p>A mixed-use complex featuring residential apartments, retail spaces, and a rooftop garden, designed by Horizon Architects for urban living.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item cat-2 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic2.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Greenwood Business Park</a></h2>
                                            <p>An eco-friendly office complex with sustainable features such as solar panels and rainwater harvesting, created by EcoDesign Group to promote environmental responsibility.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item cat-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic3.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Oceanfront Residences</a></h2>
                                            <p>Luxury condominiums overlooking the sea, crafted by Coastal Architects, offering panoramic views and exclusive amenities for discerning homeowners.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item cat-4 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic4.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Maplewood Shopping Center</a></h2>
                                            <p>A modern retail hub with diverse shops and restaurants, designed by Urban Design Studios to enhance shopping convenience and community engagement.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item cat-5 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic5.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Skyline Towers</a></h2>
                                            <p>Iconic high-rise apartments with sleek, minimalist design, envisioned by Modernist Architects to redefine city living with style and functionality.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item cat-4 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic6.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Central Park Plaza</a></h2>
                                            <p>A vibrant urban oasis blending residential living, commercial spaces, and recreational facilities, designed by Metropolis Architects for a dynamic city lifestyle.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item cat-3 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic7.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Heritage Square</a></h2>
                                            <p>A historical preservation and adaptive reuse project by Legacy Design Group, transforming heritage buildings into a mixed-use complex with cultural, retail, and residential spaces.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="masonry-item cat-2 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic1.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Gardenia Meadows</a></h2>
                                            <p>Suburban townhouses surrounded by landscaped gardens and community parks, designed by GreenField Architects to promote a peaceful and sustainable neighborhood environment.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="masonry-item cat-1 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic2.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Sunset Plaza</a></h2>
                                            <p>A mixed-use complex featuring residential apartments, retail spaces, and a rooftop garden, designed by Horizon Architects for urban living.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 10 -->
                        <div class="masonry-item cat-1 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic3.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Greenwood Business Park</a></h2>
                                            <p>An eco-friendly office complex with sustainable features such as solar panels and rainwater harvesting, created by EcoDesign Group to promote environmental responsibility.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 11 -->
                        <div class="masonry-item cat-1 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic4.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Oceanfront Residences</a></h2>
                                            <p>Luxury condominiums overlooking the sea, crafted by Coastal Architects, offering panoramic views and exclusive amenities for discerning homeowners.
                                            </p>
                                            <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <!-- COLUMNS 12 -->
                        <div class="masonry-item cat-1 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{asset('assets/frontend/images/gallery/portrait/pic5.jpg')}}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="project-detail.html" class="text-white font-20 letter-spacing-4 text-uppercase">Maplewood Shopping Center</a></h2>
                                            <p>A modern retail hub with diverse shops and restaurants, designed by Urban Design Studios to enhance shopping convenience and community engagement.
                                            </p>
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
    <!-- SECTION CONTENT END  -->

</div>



<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <svg id="triangle" width="140px" height="140px" viewBox="-3 -4 39 39">
          <polygon fill="#fff" stroke="#000" stroke-width="2" points="16,0 32,32 0,32"></polygon>
        </svg>
    </div>
</div>




@endsection
