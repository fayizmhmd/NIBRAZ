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
            {{-- <div class="filter-wrap p-b50">
                <ul class="masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".cat-1" href="#">House</a></li>
                        <li><a data-filter=".cat-2" href="#">Building</a></li>
                        <li><a data-filter=".cat-3" href="#">Office</a></li>
                        <li><a data-filter=".cat-4" href="#">Garden</a></li>
                        <li><a data-filter=".cat-5" href="#">Interior</a></li>
                </ul>
            </div> --}}
            <!-- PAGINATION END -->
        </div>
        <!-- GALLERY CONTENT START -->
         <div class="portfolio-wrap mfp-gallery work-grid clearfix">
             <div class="container-fluid">
                   <div class="row">
                        <!-- COLUMNS 1 -->
                        @foreach ($galleries as $gallery)

                        <div class="masonry-item cat-1 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="wt-img-effect ">
                                <img src="{{ asset( json_decode($gallery->image, true)[0]) }}" alt="">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2 class="text-white font-20 letter-spacing-4 text-uppercase">{{ $gallery->name }}</h2>
                                            <p>
                                                {!! $gallery->description !!}
                                            </p>
                                            {{-- <a href="project-detail.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a> --}}
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        @endforeach

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
