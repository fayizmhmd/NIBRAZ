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

                    @foreach ($projects as $project)
                    <!-- COLUMNS 1 -->
                    <div class="masonry-item col-lg-3 col-md-6 m-b30">
                        <div class="wt-img-effect ">
                            <img src="{{ asset( json_decode($project->image, true)[0]) }}" alt="">
                            <div class="overlay-bx-2 ">
                                <div class="line-amiation  p-a40">
                                    <div class="text-white">
                                        <h2 class="text-white font-24 font-weight-300">{!! $project->description !!}</h2>
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
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->
@endsection
