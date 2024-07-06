@extends('frontend.layouts.master')
@section('title', 'Project')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
            style="background-image:url({{ asset('assets/frontend/images/banner/1.jpg') }});">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Planning, design,
                                and historic preservation.</h2>
                        </div>
                    </div>

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
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($projects as $project)
                            @php
                                $i++;
                                $class = ($i == 2 ) ? 'col-lg-6' : 'col-lg-3';
                                
                            @endphp

                            <div class="masonry-item {{ $class }} col-md-6 m-b30">
                                <div class="wt-img-effect ">
                                    <img src="{{ asset(json_decode($project->image, true)[0]) }}" alt="">
                                    <div class="overlay-bx-2 ">
                                        <div class="line-amiation  p-a40">

                                            <div class="text-white">
                                                <h2><a href="#"
                                                        class="text-white font-18 font-weight-300">{!! $project->name !!}</a>
                                                </h2>

                                            </div>
                                            <div class="text-white">
                                                <h2><a href="#"
                                                        class="text-white font-18 font-weight-300">{!! $project->description !!}</a>
                                                </h2>

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
