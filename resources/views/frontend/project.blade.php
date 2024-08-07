@extends('frontend.layouts.master')
@section('title', 'Projects')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
            style="background-image:url({{ asset('assets/frontend/images/new-img/constr2.jpg') }});">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Planning,
                                construction, and project management.</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- SECTION CONTENT -->
        <div class="section-full p-t80 p-b50">

            <div class="container">
                <!-- PAGINATION START -->
                <div class="filter-wrap p-b50">
                    <ul class="masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter=".cat-1" href="#">Notable Projects</a></li>
                        <li><a data-filter="*" href="#">Regular Projects</a></li>
                    </ul>
                </div>
                <!-- PAGINATION END -->
            </div>

            <!-- GALLERY CONTENT START -->
            <div class="portfolio-wrap mfp-gallery work-grid clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Notable Projects -->
                        @foreach ($notableProjects as $project)
                            <div class="masonry-item cat-1 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-img-effect ">
                                    <img src="{{ asset(json_decode($project->image, true)[0]) }}" alt=""
                                        style="width: 1089px; height: 450px; object-fit: cover">
                                    <div class="overlay-bx-2 ">
                                        <div class="line-amiation">
                                            <div class="text-white  font-weight-300 p-a40">
                                                <h2 class="text-white font-20 letter-spacing-4 text-uppercase">
                                                    {{ $project->name }}</h2>
                                                <p>
                                                    {!! $project->description !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Regular Projects -->
                        @foreach ($regularProjects as $project)
                            <div class="masonry-item cat-2 col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-img-effect ">
                                    <img src="{{ asset(json_decode($project->image, true)[0]) }}" alt=""
                                        style="width: 1089px; height: 450px; object-fit: cover">
                                    <div class="overlay-bx-2 ">
                                        <div class="line-amiation">
                                            <div class="text-white  font-weight-300 p-a40">
                                                <h2 class="text-white font-20 letter-spacing-4 text-uppercase">
                                                    {{ $project->name }}</h2>
                                                <p>
                                                    {!! $project->description !!}
                                                </p>
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

        <!-- CONTENT END -->
    @endsection
