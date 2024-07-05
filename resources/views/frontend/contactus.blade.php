@extends('frontend.layouts.master')
@section('title', 'Contact Us')

@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
            style="background-image:url ({{ asset('assets/frontend/images/banner/6.jpg') }});">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Inspired design
                                for people</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- SECTION CONTENTG START -->
        <div class="section-full p-tb80">
            <!-- LOCATION BLOCK-->
            <div class="container">
                <!-- TITLE START -->
                <div class="section-head text-left text-black">
                    <h2 class="text-uppercase font-36">Where to Find us </h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-black"></div>
                    </div>
                </div>
                <!-- TITLE END -->
                <!-- GOOGLE MAP & CONTACT FORM -->
                <div class="section-content">
                    <!-- CONTACT FORM-->
                    <div class="wt-box">
                        <div class="contact-one p-a40 p-r150">

                            <form class="" method="post" action="{{ route('savecontact') }}">
                                @csrf
                                <div class="form-group">
                                    <input name="name" type="text" required class="form-control" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input name="phone" type="text" required class="form-control" placeholder="Phone">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" rows="3" class="form-control " required placeholder="Message"></textarea>
                                </div>

                                <button type="submit" class="site-button black radius-no text-uppercase">
                                    <span class="font-12 letter-spacing-5">Submit</span>
                                </button>

                            </form>


                            <div class="contact-info bg-black text-white p-a30">
                                <div class="wt-icon-box-wraper left p-b30">
                                    <div class="icon-sm"><i class="iconmoon-smartphone-1"></i></div>
                                    <div class="icon-content text-white ">
                                        <h5 class="m-t0 text-uppercase">Phone number</h5>
                                        <p>(456) 789 10 12</p>
                                    </div>
                                </div>

                                <div class="wt-icon-box-wraper left p-b30">
                                    <div class="icon-sm"><i class="iconmoon-email"></i></div>
                                    <div class="icon-content text-white">
                                        <h5 class="m-t0  text-uppercase">Email address</h5>
                                        <p>nirbazinfo@gmail.com</p>
                                    </div>
                                </div>

                                <div class="wt-icon-box-wraper left">
                                    <div class="icon-sm"><i class="iconmoon-travel"></i></div>
                                    <div class="icon-content text-white">
                                        <h5 class="m-t0  text-uppercase">Address info</h5>
                                        <p>55/11 Land Street, Nirbaz Perinthalmanna</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-full">
            <div class="gmap-outline">
                <div id="gmap_canvas" class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6944678855257!2d76.22078387482058!3d10.986418555285676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7cdab4ff75ef1%3A0xb48c26cf49978e65!2sNibraz%20Builders!5e0!3m2!1sen!2sin!4v1720001782495!5m2!1sen!2sin"
                        width="600" height="450"></iframe>


                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6944678855257!2d76.22078387482058!3d10.986418555285676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7cdab4ff75ef1%3A0xb48c26cf49978e65!2sNibraz%20Builders!5e0!3m2!1sen!2sin!4v1720001782495!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->
@endsection
