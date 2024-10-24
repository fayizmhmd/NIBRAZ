@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- SLIDER START -->
        <div id="rev_slider_346_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="" data-source="gallery"
            style="background:#252525;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.3.3 fullscreen mode -->
            <div id="rev_slider_346_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.3">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-index="rs-964" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                        data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                        data-param8="" data-param9=""
                        data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}"
                        data-description=""
                        data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"#e7e7e7","bgType":"image","bgImage":"{{ asset('assets/frontend/images/main-slider/slider3/construction-site-and-supervisors.png') }}","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>

                        <!-- Black Overlay -->
                        <div
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;">
                        </div>

                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/frontend/images/main-slider/slider3/construction-site-and-supervisors.png') }}"
                            data-beforeafter="after" data-bgcolor='' alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                            data-no-retina style="z-index: 2;">

                        <!-- LAYERS -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-964-layer-2"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['210','210','210','100']"
                            data-width="['960','960','960','320']" data-height="none" data-whitespace="normal"
                            data-type="text" data-beforeafter="before" data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                    {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]"
                            style="z-index: 3; min-width: 960px; max-width: 960px; white-space: normal; font-size: 18px; line-height: 20px; font-weight: 400; color: #fff; letter-spacing: 5px;font-family:Montserrat;text-transform:uppercase;">
                            Your Trusted Partner in Construction, Delivering Excellence Every Step of the Way
                        </div>

                        <!-- LAYER NR. 3  button-->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-3"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['70','70','70','80']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-beforeafter="before" data-responsive_offset="on"
                            data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                    {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},
                    {"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[45,45,45,45]"
                            style="z-index: 4; white-space: nowrap; font-size: 15px; line-height: 60px; font-weight: 700; color:rgb(0,0,0) ; letter-spacing: 5px;font-family:Montserrat;background-color:#fff;">
                            <a href="{{ asset('contact') }}">CONTACT US</a>
                        </div>

                        <!-- SLIDE RIGHT PART START-->
                        <div class="tp-caption tp-resizeme tp-blackshadow rs-parallaxlevel-5" id="slide-964-layer-4"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['50','50','50','30']"
                            data-letterspacing="['5','5','5','2']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-beforeafter="after" data-responsive_offset="on"
                            data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                    {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[50,50,50,50]"
                            style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 50px; font-weight: 400;
                           color: #fff; font-family: Montserrat; text-transform: uppercase; letter-spacing: 5px;">
                            Building Beyond Limits
                        </div>



                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-964-layer-5"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['210','210','210','100']"
                            data-width="['960','960','960','320']" data-height="none" data-whitespace="normal"
                            data-type="text" data-beforeafter="after" data-responsive_offset="on"
                            data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                    {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]"
                            style="z-index: 6;  white-space: normal; font-size: 16px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Montserrat;text-transform:uppercase;">
                        </div>

                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-964-layer-6"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['70','70','70','80']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-beforeafter="after" data-responsive_offset="on"
                            data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                    {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},
                    {"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[45,45,45,45]"
                            style="z-index: 7; white-space: nowrap; font-size: 15px; line-height: 60px; font-weight: 700; color: #fff; letter-spacing: 5px;font-family:Montserrat;background-color:rgb(0,0,0);">
                            <a href="{{ asset('contact') }}">CONTACT US</a>
                        </div>
                    </li>


                    <!-- SLIDE 1 -->
                    {{-- <li data-index="rs-965" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off"
                        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}"
                        data-description=""
                        data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"#e7e7e7","bgType":"image","bgImage":"{{ asset('assets/frontend/images/main-slider/slider3/img2.jpg') }}","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false}'>
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/frontend/images/main-slider/slider3/img1.jpg') }}"
                            data-beforeafter="after" data-bgcolor='' alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 text -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-965-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']"
                            data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']"
                            data-letterspacing="['50','50','50','30']" data-height="none" data-whitespace="normal"
                            data-type="text" data-beforeafter="before" data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"
                            style="z-index: 16; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #000; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">
                            Updated</div>
                        <!-- LAYER NR. 2 text -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-965-layer-2"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['210','210','210','100']"
                            data-width="['960','960','960','320']" data-height="none" data-whitespace="normal"
                            data-type="text" data-beforeafter="before" data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]"
                            style="z-index: 11; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 600; color: #000; letter-spacing: 5px;font-family:Montserrat;text-transform:uppercase;">
                            A whole different kind of architectural firm.</div>

                        <!-- LAYER NR. 3  button-->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-965-layer-3"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['70','70','70','80']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-beforeafter="before" data-responsive_offset="on"
                            data-frames='[{"delay":700,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},
                        {"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[45,45,45,45]"
                            style="z-index: 12; white-space: nowrap; font-size: 15px; line-height: 60px; font-weight: 700; color: #fff; letter-spacing: 5px;font-family:Montserrat;background-color:rgb(0,0,0);">
                            <a href="{{ asset('contact') }}" style="color: #fff; text-decoration: none;">CONTACT US</a></div>

                        <!-- SLIDE RIGHT PART START-->

                        <!-- LAYER NR. 1  text-->
                        <div class="tp-caption   tp-resizeme  tp-blackshadow rs-parallaxlevel-5" id="slide-965-layer-4"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','0']"
                            data-fontsize="['120','120','120','60']" data-lineheight="['120','120','120','60']"
                            data-letterspacing="['50','50','50','30']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-beforeafter="after"
                            data-responsive_offset="on"
                            data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,50]"
                            style="z-index: 16; white-space: nowrap; font-size: 120px; line-height: 120px; font-weight: 400; color: #ffffff; letter-spacing: 50px;font-family:Montserrat;text-transform:uppercase;">
                              Constructing Excellence</div>

                        <!-- LAYER NR. 2 text -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-5" id="slide-965-layer-5"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['210','210','210','100']"
                            data-width="['960','960','960','320']" data-height="none" data-whitespace="normal"
                            data-type="text" data-beforeafter="after" data-responsive_offset="on"
                            data-frames='[{"delay":2100,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[5,5,5,5]"
                            style="z-index: 17; min-width: 960px; max-width: 960px; white-space: normal; font-size: 13px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 5px;font-family:Montserrat;text-transform:uppercase;">
                            A whole different kind of architectural firm.</div>

                        <!-- LAYER NR. 3  button-->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-965-layer-6"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['70','70','70','80']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-beforeafter="after" data-responsive_offset="on"
                            data-frames='[{"delay":2200,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},
                        {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},
                        {"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[45,45,45,45]"
                            style="z-index: 18; white-space: nowrap; font-size: 15px; line-height: 60px; font-weight: 700; color: #000; letter-spacing: 5px;font-family:Montserrat;background-color:rgb(255,255,255);">
                            <a href="{{ asset('contact') }}">CONTACT US</a></div>
                    </li> --}}

                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- SLIDER END -->


        <!-- WELCOME SECTION START -->







        <!-- WELCOME  SECTION END -->

        <!-- LATEST PRJECTS SLIDER START -->
        <div class="section-full p-t80 p-lr80 latest_project-outer square_shape3">

            <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                <strong>Awesome</strong>
                <span class="text-black">Designs</span>
            </div>
        </div>
        <!-- LATEST PRJECTS SLIDER END -->

        <!-- WHO WE ARE SECTION START -->
        <div class="section-full p-t140 clearfix bg-repeat tm-wo-we-r"
            style="background-image:url({{ asset('assets/frontend/images/background/ptn-1.png') }});">
            <div class="container-fluid">
                <div class="section-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6 col-lg-5 col-md-12">
                            <div class="wt-left-part">
                                <div class="text-uppercase text-black">
                                    <span class="font-30 font-weight-300 d-block m-b10">Who we are </span>
                                    <h2 class="font-40">
                                        Precision and Excellence in Tall Building Construction
                                    </h2>
                                    <p>We focus on designing and building outstanding multi-story commercial buildings that
                                        are both stylish and practical. We use the latest engineering methods and
                                        top-quality materials to make sure our buildings are top-notch. Our dedication to
                                        detail and creativity helps us create buildings that become lasting landmarks in the
                                        city.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-12">
                            <div class="m-carousel-2">
                                <div class="owl-carousel carousel-hover home-carousel-2 owl-btn-vertical-center">
                                    <!-- COLUMNS 1 -->
                                    <div class="item">
                                        <div class="wt-box">
                                            <div class="ow-img wt-carousel-block gradi-black">
                                                <img src="{{ asset('assets/frontend/nib-images/new/City-Center-Chungam.jpg') }}"
                                                    alt="" style="width: 100%; height: 300px; object-fit: cover;">
                                                <div class="p-a50 wt-carousel-info text-white">
                                                    <div class="carousel-line">
                                                        <h2 class="font-28 font-weight-400 m-b10">City Center Chungam</h2>
                                                        <p class="m-b0">City Center Chungam, designed by Nibraz
                                                            Architectural Firm, stands as a premier commercial hub in
                                                            Chungam, showcasing a blend of modern aesthetics and functional
                                                            spaces for diverse businesses.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 2 -->
                                    <div class="item">
                                        <div class="wt-box">
                                            <div class="ow-img wt-carousel-block gradi-black">
                                                <img src="{{ asset('assets/frontend/nib-images/new/Darul-Hikam.jpg') }}"
                                                    alt="" style="width: 100%; height: 300px; object-fit: cover;">
                                                <div class="p-a50 wt-carousel-info text-white">
                                                    <div class="carousel-line">
                                                        <h2 class="font-28 font-weight-400 m-b10">Darul Hikam</h2>
                                                        <p class="m-b0">Darul Hikam, designed by Nibraz Architectural
                                                            Firm, is a significant memorial building (Smaraka Soudham) in
                                                            Perinthalmanna.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 3 -->
                                    <div class="item">
                                        <div class="wt-box">
                                            <div class="ow-img wt-carousel-block gradi-black">
                                                <img src="{{ asset('assets/frontend/nib-images/new/Juma-Masjid-Melattur.jpg') }}"
                                                    alt="" style="width: 100%; height: 300px; object-fit: cover;">
                                                <div class="p-a50 wt-carousel-info text-white">
                                                    <div class="carousel-line">
                                                        <h2 class="font-28 font-weight-400 m-b10">Juma Masjid Melattur</h2>
                                                        <p class="m-b0">Juma Masjid Melattur, designed by Nibraz
                                                            Architectural Firm, is a prominent mosque in Melattur, serving
                                                            as a central place of worship and community gathering.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 4 -->
                                    <div class="item">
                                        <div class="wt-box">
                                            <div class="ow-img wt-carousel-block gradi-black">
                                                <img src="{{ asset('assets/frontend/nib-images/new/MSTM.jpg') }}"
                                                    alt="" style="width: 100%; height: 300px; object-fit: cover;">
                                                <div class="p-a50 wt-carousel-info text-white">
                                                    <div class="carousel-line">
                                                        <h2 class="font-28 font-weight-400 m-b10">MSTM Arts and Science
                                                            College</h2>
                                                        <p class="m-b0">MSTM Arts and Science College, designed by Nibraz
                                                            Architectural Firm, is a distinguished educational institution
                                                            in Perinthalmanna, providing state-of-the-art facilities and a
                                                            vibrant learning environment for students.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 5 -->

                                </div>
                                <div class="carousel-bg-img">
                                    <img src="{{ asset('assets/frontend/images/slider-corner.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="hilite-title p-lr20 m-tb20 text-left text-uppercase bdr-gray bdr-left">
                    <strong>30+ Projects</strong>
                    <span class="text-black">Completed</span>
                </div>
            </div>
        </div>

        <div class="section-full clearfix p-t80  bg-gray">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 m-b30 text-uppercase text-black">
                            <span class="font-30 font-weight-300 d-block m-b10"></span>
                            <h2 class="font-40">
                                BUILDING TIMELESS STRUCTURES WITH PRECISION
                            </h2>
                            <p> We combine beauty and practicality to create innovative and reliable construction solutions
                                for you.</p>
                            <p class="text-lowercase">From concept to construction, we specialize in creating spaces that
                                harmonize innovation, sustainability, and client vision.
                            </p>


                            <a href="about/" class="btn-half site-button button-lg m-b15"><span>Read
                                    More</span><em></em></a>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div class="m-carousel-1 m-l100">
                                <div class="owl-carousel home-carousel-1 owl-btn-vertical-center">

                                    <div class="item">
                                        <div class="ow-img wt-img-effect zoom-slow">
                                            <img src="{{ asset('assets/frontend/nib-images/new/nibraz-first-slider.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-img wt-img-effect zoom-slow">
                                            <img src="{{ asset('assets/frontend/nib-images/new/nibraz-fourth-slider.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>

                                    {{-- <div class="item">
                                        <div class="owl-img wt-img-effect zoom-slow">
                                            <img src="{{ asset('assets/frontend/nib-images/new/nibraz-second-slider.jpg') }}"
                                                alt="">
                                        </div>
                                    </div> --}}

                                    <div class="item">
                                        <div class="ow-img wt-img-effect zoom-slow">
                                            <img src="{{ asset('assets/frontend/nib-images/new/nibraz-third-slider.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="ow-img wt-img-effect zoom-slow">
                                            <img src="{{ asset('assets/frontend/nib-images/new/Resedential-client-name-Abdul-gafoor-area-3750sqft.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                        <strong>18 Year</strong>
                        <span class="text-black">Experience Working</span>
                    </div>
                </div>
            </div>
        </div>



        <div class="section-full bg-gray p-t80 p-b50 square_shape1">
            <div class="container">
                <!-- TITLE START -->
                <div class="section-head text-left text-black">
                    <h2 class="text-uppercase font-36">Latest Projects</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator bg-black"></div>
                    </div>
                </div>
                <!-- TITLE END -->
                <div class="section-content our-story">
                    @foreach ($projects as $project)
                        @if ($loop->index % 2 === 0)
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="wt-media our-story-pic">
                                        <img src="{{ asset(json_decode($project->image, true)[0]) }}" alt="" style="width: 561px; height: 319px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                                    <div class="wt-box our-story-detail">
                                        <h3 class="text-uppercase"></h3>
                                        <h2 class="text-uppercase">{{ $project->name }}</h2>
                                        <p>{!! $project->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    @foreach ($projects as $project)
                        @if ($loop->index % 2 === 1)
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="wt-media our-story-pic">
                                        <img src="{{ asset(json_decode($project->image, true)[0]) }}" alt="" style="width: 561px; height: 319px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 our-story-detail-wrap">
                                    <div class="wt-box our-story-detail">
                                        <h3 class="text-uppercase"></h3>
                                        <h2 class="text-uppercase">{{ $project->name }}</h2>
                                        <p>{!! $project->description !!}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- <div class="section-full p-t80 p-lr80 latest_project-outer square_shape3">
            <div class="section-head text-left">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12">
                        <h2 class="text-uppercase font-36">Latest Project</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-black"></div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12">
                        <ul class="btn-filter-wrap">
                            <li class="btn-filter btn-active" data-filter="*">All Project</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-content"
                style="display: flex !important; align-items: center !important; justify-content: center !important; padding: 20px !important">
                <div class="owl-carousel owl-carousel-filter  owl-btn-bottom-left">
                    @foreach ($projects as $project)
                        <div class="item fadingcol building-col">
                            <div class="wt-img-effect ">
                                <img src="{{ asset(json_decode($project->image, true)[0]) }}" alt=""
                                    style="width: 1089px; height: 450px; object-fit: cover">
                                <div class="overlay-bx-2 ">
                                    <div class="line-amiation">
                                        <div class="text-white  font-weight-300 p-a40">
                                            <h2><a href="#"
                                                    class="text-white font-20 letter-spacing-4 text-uppercase">{{ $project->name }}</a>
                                            </h2>
                                            <p>{!! $project->description !!}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div> --}}

        <!-- SERVICES SECTION -->
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
                                <a class="nav-link active wt-icon-box-wraper right p-a20 text-white" href="#tab1"
                                    data-bs-toggle="tab">
                                    <div class="icon-content">
                                        <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Building
                                            Construction</h4>
                                        <p style="text-align: justify !important;">Explore Nibraz Builders' expertise in
                                            creating durable, sustainable buildings with innovative designs. Each project,
                                            residential or commercial, showcases our commitment to lasting quality. See how
                                            we bring ideas to life.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="nav-item">
                                <a class="nav-link wt-icon-box-wraper right p-a20 text-white" href="#tab2"
                                    data-bs-toggle="tab">
                                    <div class="icon-content">
                                        <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Building
                                            Renovation</h4>
                                        <p style="text-align: justify !important;">
                                            Revitalize your space with Nibraz Builders' expert renovation services. We
                                            enhance functionality and aesthetics while preserving your vision. Trust us to
                                            transform your residential or commercial property with precision and care.</p>
                                    </div>
                                </a>
                            </div>


                            <div class="nav-item">
                                <a class="nav-link wt-icon-box-wraper right p-a20 text-white" href="#tab3"
                                    data-bs-toggle="tab">
                                    <div class="icon-content">
                                        <h4 style="text-align: left !important;" class="wt-tilte text-uppercase">Flooring
                                            & Roofing</h4>
                                        <p style="text-align: justify !important;">Nibraz Builders offers expert flooring
                                            and roofing solutions, combining durability with aesthetic appeal. Whether
                                            renovating or constructing, trust us for high-quality materials and meticulous
                                            craftsmanship to enhance your space.</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-4 col-md-12 m-b30">
                            <div class="circle-content-pic tab-content ">

                                <div id="tab1" class="tab-pane active show">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20 ">
                                            <img src="{{ asset('assets/frontend/nib-images/serv/BuildingConstruction.jpg') }}"
                                                alt="">

                                        </div>
                                    </div>
                                </div>

                                <div id="tab2" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20">
                                            <img src="{{ asset('assets/frontend/nib-images/serv/BuildingRenovation.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div id="tab3" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20">
                                            <img src="{{ asset('assets/frontend/nib-images/serv/FlooringRoofing.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div id="tab4" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20">
                                            <img src="{{ asset('assets/frontend/nib-images/serv/BuildingMaintenance.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div id="tab5" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20">
                                            <img src="{{ asset('assets/frontend/nib-images/serv/ConcreteWorks.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                                <div id="tab6" class="tab-pane">
                                    <div class="wt-box">
                                        <div class="wt-media text-primary m-b20">
                                            <img src="{{ asset('assets/frontend/nib-images/serv/ProjectMgmt.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 m-b30">

                            <div class="nav-item">
                                <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab4"
                                    data-bs-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Building Maintenance</h4>
                                        <p style="text-align: justify !important;">Ensure your property remains pristine
                                            with Nibraz Builders' comprehensive maintenance services. From routine
                                            inspections to timely repairs, we safeguard structural integrity and enhance
                                            longevity, ensuring your building retains its value. </p>
                                    </div>
                                </a>
                            </div>

                            <div class="nav-item">
                                <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab5"
                                    data-bs-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Concrete Works</h4>
                                        <p style="text-align: justify !important;">Trust Nibraz Builders for expert
                                            concrete solutions. From foundations to structures, we ensure durability and
                                            precision. Our skilled team delivers quality concrete works, meeting project
                                            timelines and exceeding expectations.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="nav-item">
                                <a class="nav-link wt-icon-box-wraper left p-a20 text-white" href="#tab6"
                                    data-bs-toggle="tab">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase">Project Management</h4>
                                        <p style="text-align: justify !important;"> Trust Nibraz Builders for seamless
                                            project management services. From inception to completion, we oversee every
                                            detail with precision. Our expertise ensures on-time delivery and quality
                                            outcomes for your construction projects.</p>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>









        <div class="section-full p-t80 p-b50 overlay-wraper bg-top-center bg-parallax" data-stellar-background-ratio="0.5"
            style="background-image:url(images/background/bg-11.jpg);">
            <div class="overlay-main opacity-08 bg-black"></div>
            <div class="container ">
                <div class="row">

                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="some-facts">
                            <div class="text-white text-uppercase">
                                <span class="font-40 font-weight-300">Some</span>
                                <h2 class="font-50">
                                    Interesting Facts
                                </h2>
                                <p class="font-18 font-weight-300">YOUR TRUSTED BUILDER OF INNOVATIVE SPACES WITH
                                    SUSTAINABLE SOLUTIONS, CREATING COMMUNITY-CENTERED ENVIRONMENTS THAT ENHANCE MODERN
                                    LIVING.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="row some-facts-counter">
                            <div class="col-md-4 col-sm-4">
                                <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                    <div class="icon-content text-center">
                                        <div class="font-40 font-weight-600 m-b5"><span class="counter">451</span></div>
                                        <div class="wt-separator-outer m-b20">
                                            <div class="wt-separator bg-white"></div>
                                        </div>
                                        <span class="text-uppercase">Happy Clients</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                    <div class="icon-content text-center">
                                        <div class="font-40 font-weight-600 m-b5"><span class="counter">532</span></div>
                                        <div class="wt-separator-outer m-b20">
                                            <div class="wt-separator bg-white"></div>
                                        </div>
                                        <span class="text-uppercase">Finished projects</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="wt-icon-box-wraper p-a10 text-white m-b30">
                                    <div class="icon-content text-center">
                                        <div class="font-40 font-weight-600 m-b5"><span class="counter">299</span></div>
                                        <div class="wt-separator-outer m-b20">
                                            <div class="wt-separator bg-white"></div>
                                        </div>
                                        <span class="text-uppercase">Working Days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- TESTIMONIALS SECTION START -->
        <div class="section-full p-t80 clearfixbg-repeat " style="background-image:url(images/background/ptn-1.png);">
            <div class="container">
                <div class="section-content">
                    <!-- TITLE START -->
                    <div class="section-head text-left">
                        <h2 class="text-uppercase font-36">Testimonials</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-black"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->
                    <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                    <div class="section-content">
                        <div class="owl-carousel testimonial-home">



                            @foreach ($reviews as $review)
                                <div class="item">
                                    <div class="testimonial-6">
                                        <div class="testimonial-pic-block">
                                            {{-- <div class="testimonial-pic">
                                                <img src="{{ $review->image }}" width="132" height="132" alt="">
                                            </div> --}}
                                        </div>
                                        <div class="testimonial-text clearfix bg-white">
                                            <div class="testimonial-detail clearfix">
                                                <strong class="testimonial-name">{{ $review->name }}</strong>

                                            </div>
                                            <div class="testimonial-paragraph text-black p-t15">
                                                <span class="fa fa-quote-left"></span>
                                                <p>{{ $review->review }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="hilite-title p-lr20 m-tb20 text-right text-uppercase bdr-gray bdr-right">
                    <strong>Client</strong>
                    <span class="text-black">Says</span>
                </div>
            </div>
        </div>
        <!-- TESTIMONIALS SECTION END -->

        <!-- CLIENT LOGO SECTION START -->
        <div class="section-full p-tb40 bg-black square_shape4">
            <div class="container">
                <div class="section-content">

                    <!-- TESTIMONIAL 4 START ON BACKGROUND -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <!-- TITLE START -->
                                <div class="section-head  text-left">
                                    <h2 class="text-uppercase font-36 text-white">Our Clients</h2>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator bg-white"></div>
                                    </div>
                                </div>
                                <!-- TITLE END -->
                            </div>

                            <div class="col-lg-8 col-md-12">
                                <div class="section-content bg-white p-tb10">
                                    <div class="owl-carousel home-client-carousel owl-btn-center-v">
                                        @foreach ($logos as $logo)
                                            <div class="item">
                                                <div class="ow-client-logo">
                                                    <div class="client-logo client-logo-media">
                                                        <img src="{{ $logo->image }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CLIENT LOGO  SECTION End -->

    </div>

    <!-- CONTENT END -->


@endsection
