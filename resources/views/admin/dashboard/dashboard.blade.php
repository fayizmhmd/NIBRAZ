@extends('admin.layout.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-xxl-6 col-md-6">
                    <div class="card h-100">
                        <div class="nk-ecwg nk-ecwg3">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Total Projects</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="amount">{{ $totalProjects }}</div>
                                </div>
                            </div>
                            <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                <div class="nk-ecwg3-ck">
                                    <canvas class="ecommerce-line-chart-s1" id="totalOrders"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-6 col-md-6">
                    <div class="card h-100">
                        <div class="nk-ecwg nk-ecwg3">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Galleries</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="amount">{{ $totalGalleries }}</div>
                                </div>
                            </div>
                            <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                <div class="nk-ecwg3-ck">
                                    <canvas class="ecommerce-line-chart-s1" id="totalOrders"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-6 col-md-6">
                    <div class="card h-100">
                        <div class="nk-ecwg nk-ecwg3">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Testimonials</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="amount">{{ $totalTestimonials }}</div>
                                </div>
                            </div>
                            <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                <div class="nk-ecwg3-ck">
                                    <canvas class="ecommerce-line-chart-s1" id="totalOrders"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-xxl-12">
                    <div class="card card-full">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Recently Added Schemes</h6>
                                </div>
                            </div>
                        </div>
                        <div class="nk-tb-list mt-n2">
                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col"><span>Scheme ID</span></div>
                                <div class="nk-tb-col tb-col-sm"><span>Scheme Name</span></div>
                                <div class="nk-tb-col tb-col-sm"><span>Branch</span></div>
                                <div class="nk-tb-col tb-col-md"><span>Start</span></div>
                                <div class="nk-tb-col tb-col-md"><span>End</span></div>
                                <div class="nk-tb-col"><span>Monthly Payment Date</span></div>
                                <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                            </div>


                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
