@extends('layouts.layout')

@section('content')

    <div class="fix">

    <!--Start Main Slider Three-->
    <section class="main-slider main-slider-three">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>

            <div class="swiper-wrapper">

                <!--Start Swiper Slide Single-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url('{{ asset('assets/img/slider/raung-home.jpg') }}');">
                    </div>

                    <div class="container">
                        <div class="main-slider-three__single">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/slider-v3-shape1.png') }}" alt=""></div>
                            <div class="main-slider-three__content text-center">
                                <div class="tagline-box">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/title-marker.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p>We are the leading</p>
                                    </div>
                                </div>

                                <div class="title-box">
                                    <h2>A different kind<br> <span>of adventure</span></h2>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Discover More</span>
                                    </a>
                                </div>

                            </div>
                            <div class="bottom-text-box">
                                <div class="border"></div>
                                <div class="text">
                                    <p>Cargo Freight</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Swiper Slide Single-->

                <!--Start Swiper Slide Single-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url('{{ asset('assets/img/slider/raung-home2.png') }}');">
                    </div>

                    <div class="container">
                        <div class="main-slider-three__single">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/slider-v3-shape1.png') }}" alt=""></div>
                            <div class="main-slider-three__content text-center">
                                <div class="tagline-box">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/title-marker.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p>We are the leading</p>
                                    </div>
                                </div>

                                <div class="title-box">
                                    <h2>Authentic <br> <span>experiences</span></h2>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Discover More</span>
                                    </a>
                                </div>

                            </div>
                            <div class="bottom-text-box">
                                <div class="border"></div>
                                <div class="text">
                                    <p>Air Freight</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Swiper Slide Single-->

                <!--Start Swiper Slide Single-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url('{{ asset('assets/img/slider/raung-home3.jpg') }}');">
                    </div>

                    <div class="container">
                        <div class="main-slider-three__single">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/slider-v3-shape1.png') }}" alt=""></div>
                            <div class="main-slider-three__content text-center">
                                <div class="tagline-box">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/title-marker.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p>We are the leading</p>
                                    </div>
                                </div>

                                <div class="title-box">
                                    <h2>Discover another<br> <span>side of Indonesia</span></h2>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Discover More</span>
                                    </a>
                                </div>

                            </div>
                            <div class="bottom-text-box">
                                <div class="border"></div>
                                <div class="text">
                                    <p>Logistic Freight</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Swiper Slide Single-->

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Slider Three-->


        <!--Start About One-->
        <div class="about-one">
            <div class="about-one__big-title">Mata Raung </div>
            <div class="container">
                @foreach($abouts as $about)
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-one__img clearfix">
                            <div class="shape1 float-bob-x"><img src="{{ asset('asset/img/shape/about-v1-shape1.png') }}" alt="">
                            </div>
                            <div class="inner clearfix">
                                <img class="float-bob-y" src="{{ asset('storage/about/' . $about->image1) }}" alt="">
                            </div>
                            <div class="btn-box">
                                <div class="round-text">
                                    <div class="curved-circle rotate-me">
                                        Mata Raung Indonesia - Since 2020 - 
                                    </div>
                                    <a href="#">Read <br>More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="about-one__content">
                            <div class="about-one__content-top">
                                <div class="sec-title">
                                    <div class="sub-title">
                                        <h5><span class="icon-right-arrow-1"></span> About Company</h5>
                                    </div>
                                    <h2>{{ $about->judul1 }}</h2>
                                </div>

                                <div class="text">
                                    <p>{!! $about->deskripsi1 !!}</p>
                                </div>
                            </div>

                            <div class="about-one__content-features">
                                <ul>
                                    <li class="wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="icon-box">
                                                <img src="{{ asset('assets/img/icon/about/worldwide-delivery.png') }}" alt="#">
                                            </div>
                                            <div class="text-box">
                                                <h4>Vision</h4>
                                                <p>"{{ $about->visi }}"</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="icon-box">
                                                <img src="{{ asset('assets/img/icon/about/secure-delivery.png') }}" alt="#">
                                            </div>
                                            <div class="text-box">
                                                <h4>Mission</h4>
                                                <p>"{{ $about->misi }}"</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--End About One-->

        <!--Start Service One -->
        <section class="service-one">
            <div class="container">
                <div class="service-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> Our Services</h5>
                        </div>
                        <h2>Fast and professional <br> Logistic services</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('services') }}">
                            <span class="txt">View All Service</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>

                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50,
                    "slidesPerView": 3,
                    "loop": true,
                    "pagination": {
                        "el": "#service-one__pagination",
                        "type": "bullets",
                        "clickable": true
                        },
                    "navigation": {
                        "nextEl": "#team-one__swiper-button-next",
                        "prevEl": "#team-one__swiper-button-prev"
                    },
                    "autoplay": { "delay": 5000 },
                    "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "768": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "992": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "1200": {
                            "spaceBetween": 50,
                            "slidesPerView": 3
                        }
                    }
                }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!--Start Service One Single-->
                            <div class="service-one__single">
                                <div class="service-one__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/service/service-one__img1.jpg') }}" alt="#">
                                        <div class="overlay-icon">
                                            <img src="{{ asset('assets/img/icon/services/air-freight.png') }}" alt="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="service-one__single-content">
                                    <h3><a href="{{ route('roadTransport') }}">Air Freight</a></h3>
                                    <p>Following the quality of our service <br> thus having gained trust</p>
                                    <div class="btn-box">
                                        <a href="{{ route('roadTransport') }}">Read More <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Service One Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Service One Single-->
                            <div class="service-one__single">
                                <div class="service-one__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/service/service-one__img2.jpg') }}" alt="#">
                                        <div class="overlay-icon">
                                            <img src="{{ asset('assets/img/icon/services/ocean-freight.png') }}" alt="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="service-one__single-content">
                                    <h3><a href="{{ route('roadTransport') }}">Ocean Freight</a></h3>
                                    <p>Following the quality of our service <br> thus having gained trust</p>
                                    <div class="btn-box">
                                        <a href="{{ route('roadTransport') }}">Read More <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Service One Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Service One Single-->
                            <div class="service-one__single">
                                <div class="service-one__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/service/service-one__img3.jpg') }}" alt="#">
                                        <div class="overlay-icon">
                                            <img src="{{ asset('assets/img/icon/services/road-freight.png') }}" alt="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="service-one__single-content">
                                    <h3><a href="{{ route('roadTransport') }}">Road Freight</a></h3>
                                    <p>Following the quality of our service <br> thus having gained trust</p>
                                    <div class="btn-box">
                                        <a href="{{ route('roadTransport') }}">Read More <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Service One Single-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Service One Single-->
                            <div class="service-one__single">
                                <div class="service-one__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('assets/img/service/service-one__img2.jpg') }}" alt="#">
                                        <div class="overlay-icon">
                                            <img src="{{ asset('assets/img/icon/services/ocean-freight.png') }}" alt="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="service-one__single-content">
                                    <h3><a href="{{ route('roadTransport') }}">Ocean Freight</a></h3>
                                    <p>Following the quality of our service <br> thus having gained trust</p>
                                    <div class="btn-box">
                                        <a href="{{ route('roadTransport') }}">Read More <span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Service One Single-->
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="service-one__pagination"></div>
            </div>
        </section>
        <!--End Service One-->

        <!--Start Video One-->
        <section class="video-one">
            <div class="container">
                <div class="video-one__inner" style="background-image: url('{{ asset('assets/img/background/video-v1-bg.jpg') }}');">
                    <div class="video-one__video">
                        <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="video-one__video-btn video-popup">
                            <span class="txt">Play</span>
                        </a>
                    </div>
                    <div class="overlay-text">
                        <h3><a href="#">Watch Our Intro</a></h3>
                        <div class="icon">
                            <a href="#"><span class="icon-right-arrow-2"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Video One-->

        <!--Start Working Process One-->
        <section class="working-process-one">
            <div class="working-process-one__bg" style="background-image: url('{{ asset('assets/img/background/working-process-v1-bg.jpg') }}');"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5><span class="icon-right-arrow-1"></span> Check our steps</h5>
                    </div>
                    <h2>Our Freight Working Process</h2>
                </div>
                <div class="row">
                    <!--Start Working Process One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="working-process-one__single">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/working-process-v1-shape1.png') }}" alt=""></div>
                            <div class="working-process-one__single-top">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/working-process/step-1.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h2>Step - 1</h2>
                                </div>
                            </div>
                            <div class="working-process-one__single-content">
                                <h2><a href="#">The Paperwork</a></h2>
                                <p>Once you place your order via mail or fax our field staff will collect the documents
                                    and
                                    consignments from the shipper.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Working Process One Single-->

                    <!--Start Working Process One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="working-process-one__single ml60">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/working-process-v1-shape1.png') }}" alt=""></div>
                            <div class="working-process-one__single-top">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/working-process/step-2.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h2>Step - 2</h2>
                                </div>
                            </div>
                            <div class="working-process-one__single-content">
                                <h2><a href="#">Select Location</a></h2>
                                <p>We’ll evaluate the size and weight of your cargo, find just the right carrier to fly
                                    your goods to their destination.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Working Process One Single-->

                    <!--Start Working Process One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="working-process-one__single ml80">
                            <div class="working-process-one__single-top">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/working-process/step-3.png') }}" alt="">
                                </div>
                                <div class="text">
                                    <h2>Step - 3</h2>
                                </div>
                            </div>
                            <div class="working-process-one__single-content">
                                <h2><a href="#">Partners Till The End</a></h2>
                                <p>Our teams will be working hard at every step of the journey to ensure that your
                                    shipment is delivered on time.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Working Process One Single-->
                </div>
            </div>
        </section>
        <!--End Working Process One-->

        <!--Start Cta One-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner">
                    <div class="cta-one__shape1"><img src="{{ asset('assets/img/shape/cta-one__shape1.png') }}" alt=""></div>
                    <div class="cta-one__shape2"><img src="{{ asset('assets/img/shape/cta-one__shape2.png') }}" alt=""></div>
                    <div class="cta-one__shape3 float-bob-x">
                        <img src="{{ asset('assets/img/shape/cta-one__shape5.png') }}" alt="#">
                    </div>
                    <div class="cta-one__inner-box">
                        <div class="title-box">
                            <h2>We are best transport agency for give best quality service</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">Request Services</span> <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cta One-->

        <!--Start Choose Us One-->
        <section class="choose-us-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5><span class="icon-right-arrow-1"></span> Why Choose Us</h5>
                    </div>
                    <h2>Some reasons to choose us</h2>
                </div>
                <div class="row">
                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-global-network"></span>
                                    </div>
                                    <h3><a href="#">Global Network</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Freight Consolidators connects your business with international hubs across the
                                        world such as the USA.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-right-time-delivery"></span>
                                    </div>
                                    <h3><a href="#">Right Time Delivery</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>You place your order, and we’ll handle the rest. From pick-up to customs
                                        clearance from tracking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-support"></span>
                                    </div>
                                    <h3><a href="#">24-Hour Support</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Our dedicated team is on the job, tracking every step of your shipment we’re
                                        available 24/7 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-special-shipments"></span>
                                    </div>
                                    <h3><a href="#">Special Shipments</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>If your goods have special movement, storage and handling requirements, we have
                                        the expertise.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-enter-product-details"></span>
                                    </div>
                                    <h3><a href="#">Bespoke Solutions</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>We provide personalised intermodal solutions to all seaports and airports around
                                        the world.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->

                    <!--Start  Single Choose Us One-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="choose-us-one__single">
                            <div class="choose-us-one__single-overlay-bg"></div>
                            <div class="content-box">
                                <div class="title-box">
                                    <div class="icon-box">
                                        <span class="icon-esteemed-company"></span>
                                    </div>
                                    <h3><a href="#">Esteemed Company</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>More than 4099 clients across the world have chosen us as their freight partner,
                                        because of the competitive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End  Single Choose Us One-->
                </div>
            </div>
        </section>
        <!--End Choose Us One-->

        <!--Start Fact Counter One-->
        <section class="fact-counter-one">
            <div class="container">
                <div class="row">
                    <!--Start Fact Counter One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="fact-counter-one__single">
                            <div class="inner">
                                <h2 class="count"><span class="odometer" data-count="35"></span><span class="plus">+</span>
                                </h2>
                                <div class="text">
                                    <p>Years Of Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter One Single-->

                    <!--Start Fact Counter One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="fact-counter-one__single">
                            <div class="inner">
                                <h2 class="count"><span class="odometer" data-count="3560"></span>
                                </h2>
                                <div class="text">
                                    <p>Delivered Packages</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter One Single-->

                    <!--Start Fact Counter One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="fact-counter-one__single">
                            <div class="inner">
                                <h2 class="count"><span class="odometer" data-count="2364"></span>
                                </h2>
                                <div class="text">
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter One Single-->

                    <!--Start Fact Counter One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="fact-counter-one__single">
                            <div class="inner">
                                <h2 class="count"><span class="odometer" data-count="356"></span><span class="plus">+</span>
                                </h2>
                                <div class="text">
                                    <p>Owned Vehicles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Fact Counter One Single-->
                </div>
            </div>
        </section>
        <!--End Fact Counter One-->

        <!--Start Project One-->
        <section class="project-one">
            <div class="project-one__bg" style="background-image: url('{{ asset('assets/img/bg/project-v1-bg.jpg') }}');"></div>
            <div class="shape1"><img src="{{ asset('assets/img/shape/project-v1-shape1.png') }}" alt=""></div>
            <div class="shape2"><img src="{{ asset('assets/img/shape/project-v1-shape2.png') }}" alt=""></div>
            <div class="container">
                <div class="project-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> Recent Project</h5>
                        </div>
                        <h2>Transporting Across <br> The World</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('projects') }}">
                            <span class="txt">View All Project</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="auto-container">
                <div class="project-one__bottom">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50,
                    "slidesPerView": 3,
                    "loop": true,
                    "pagination": {
                        "el": "#project-one__pagination",
                        "type": "bullets",
                        "clickable": true
                        },
                    "navigation": {
                        "nextEl": "#team-one__swiper-button-next",
                        "prevEl": "#team-one__swiper-button-prev"
                    },
                    "autoplay": { "delay": 5000 },
                    "breakpoints": {
                        "0": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "375": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "575": {
                            "spaceBetween": 30,
                            "slidesPerView": 1
                        },
                        "768": {
                            "spaceBetween": 30,
                            "slidesPerView": 2
                        },
                        "992": {
                            "spaceBetween": 30,
                            "slidesPerView": 3
                        },
                        "1200": {
                            "spaceBetween": 40,
                            "slidesPerView": 4
                        }
                    }
                }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img1.jpg') }}" alt="#">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.01</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Large Warehouse</span>
                                        <h3><a href="{{ route('projectDetails') }}">Warehouse & Services</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>

                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img2.jpg') }}" alt="#">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.02</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Premium Tankers</span>
                                        <h3><a href="{{ route('projectDetails') }}">Transport for Product</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>

                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img3.jpg') }}" alt="">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.03</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Air Transportation</span>
                                        <h3><a href="{{ route('projectDetails') }}">Transport for Product</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>

                            <div class="swiper-slide">
                                <!--Start  Single Project One-->
                                <div class="project-one__single">
                                    <div class="project-one__single-overlay-bg"></div>
                                    <div class="project-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('assets/img/project/project-v1-img4.jpg') }}" alt="#">
                                        </div>
                                        <div class="overlay-box">
                                            <span>N.04</span>
                                        </div>
                                    </div>

                                    <div class="project-one__single-content">
                                        <span class="categories">Road Transportation</span>
                                        <h3><a href="{{ route('projectDetails') }}">Specialized Transport</a></h3>

                                        <div class="project-one__single-content-bottom">
                                            <div class="text-box">
                                                <p>Freight Consolidators connects your business with international.</p>
                                            </div>
                                            <div class="btn-box">
                                                <a class="thm-btn" href="{{ route('projectDetails') }}">
                                                    <span class="txt">View Details</span> <i class="icon-right-arrow"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End  Single Project One-->
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-pagination" id="project-one__pagination"></div>
                </div>
            </div>
        </section>
        <!--End Project One-->

        <!--Start Request Services One-->
        <section class="request-services-one">
            <div class="request-services-one__bg" style="background-image: url('{{ asset('assets/img/background/request-services-v1-bg.jpg') }}');"></div>
            <div class="shape1 float-bob-y"><img src="{{ asset('assets/img/shape/request-services-v1-shape1.png') }}" alt=""></div>
            <div class="container">

                <div class="request-services-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> Request Services</h5>
                        </div>
                        <h2>Get a Free Freight Quote</h2>
                    </div>

                    <div class="text-box">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Quis ipsum gravida risus commodo viverra maecenas.</p>
                    </div>
                </div>

                <div class="row">
                    <!--Start Request Services One Form-->
                    <div class="col-xl-8">
                        <div class="request-services-one__form-box">
                            <div class="request-services-one__form-tab tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#quote" class="tab-btn active-btn"><span>Request A Quote</span></li>
                                    <li data-tab="#track" class="tab-btn"><span>Track & Trace</span></li>
                                </ul>

                                <div class="tabs-content">
                                    <!--Start Single Tab-->
                                    <div class="tab" id="quote">
                                        <div class="request-services-one__single-tab">
                                            <form id="contact-form" class="default-form2 contact-form-validated request-services-one__form" action="assets/inc/sendemail.php" novalidate="novalidate">

                                                <div class="request-services-one__form-top">
                                                    <div class="title-box">
                                                        <h3>General Information:</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Full Name</label>
                                                                <input type="text" name="name" value="" placeholder="Ronald Richards" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Phone Number</label>
                                                                <input type="text" placeholder="+1256 456 7890" name="phone">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Email Address</label>
                                                                <input type="email" name="email" value="" placeholder="ronald@gmail.com" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Freight Type</label>
                                                                <div class="select-box">
                                                                    <select class="selectmenu wide">
                                                                        <option selected="selected">Air Freight</option>
                                                                        <option>Air Freight</option>
                                                                        <option>Air Freight</option>
                                                                        <option>Air Freight</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Departure City</label>
                                                                <input type="text" placeholder="New York" name="city">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Delivery City</label>
                                                                <input type="text" placeholder="Las Angle" name="city2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="request-services-one__form-bottom">
                                                    <div class="title-box">
                                                        <h3>Dimensions of Departure:</h3>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Incoterms</label>
                                                                <div class="select-box">
                                                                    <select class="selectmenu wide">
                                                                        <option selected="selected">Value 1</option>
                                                                        <option>Value 2</option>
                                                                        <option>Value 3</option>
                                                                        <option>Value 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Height</label>
                                                                <input type="number" placeholder="3" name="height">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Width</label>
                                                                <input type="number" placeholder="3" name="width">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Length</label>
                                                                <input type="number" placeholder="4" name="length">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="request-services-one__form-bottom-tag">
                                                        <div class="title">
                                                            <h3>Extra services:</h3>
                                                        </div>

                                                        <div class="tag-box">
                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_1">
                                                                <label for="tag_1"><span></span>Express Delivery</label>
                                                            </div>

                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_2">
                                                                <label for="tag_2"><span></span>Insurance</label>
                                                            </div>

                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_3">
                                                                <label for="tag_3"><span></span>Packaging</label>
                                                            </div>

                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_4">
                                                                <label for="tag_4"><span></span>Fragile</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="request-services-one__form-btn">
                                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                                                <span class="txt">Submit Now</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End Single Tab-->

                                    <!--Start Single Tab-->
                                    <div class="tab active-tab" id="track">
                                        <div class="request-services-one__single-tab">
                                            <form id="contact-form2" class="default-form2 contact-form-validated request-services-one__form" action="assets/inc/sendemail.php" novalidate="novalidate">

                                                <div class="request-services-one__form-top">
                                                    <div class="title-box">
                                                        <h3>General Information:</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Full Name</label>
                                                                <input type="text" name="name" value="" placeholder="Ronald Richards" required="">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Phone Number</label>
                                                                <input type="text" placeholder="+1256 456 7890" name="phone">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Email Address</label>
                                                                <input type="email" name="email" value="" placeholder="ronald@gmail.com" required="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Freight Type</label>
                                                                <div class="select-box">
                                                                    <select class="selectmenu wide">
                                                                        <option selected="selected">Air Freight</option>
                                                                        <option>Air Freight</option>
                                                                        <option>Air Freight</option>
                                                                        <option>Air Freight</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Departure City</label>
                                                                <input type="text" placeholder="New York" name="city">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-4 col-lg-4 col-md-4">
                                                            <div class="input-box">
                                                                <label>Delivery City</label>
                                                                <input type="text" placeholder="Las Angle" name="city2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="request-services-one__form-bottom">
                                                    <div class="title-box">
                                                        <h3>Dimensions of Departure:</h3>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Incoterms</label>
                                                                <div class="select-box">
                                                                    <select class="selectmenu wide">
                                                                        <option selected="selected">Value 1</option>
                                                                        <option>Value 2</option>
                                                                        <option>Value 3</option>
                                                                        <option>Value 4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Height</label>
                                                                <input type="number" placeholder="3" name="height">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Width</label>
                                                                <input type="number" placeholder="3" name="width">
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                                            <div class="input-box">
                                                                <label>Length</label>
                                                                <input type="number" placeholder="4" name="length">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="request-services-one__form-bottom-tag">
                                                        <div class="title">
                                                            <h3>Extra services:</h3>
                                                        </div>

                                                        <div class="tag-box">
                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_5">
                                                                <label for="tag_5"><span></span>Express Delivery</label>
                                                            </div>

                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_6">
                                                                <label for="tag_6"><span></span>Insurance</label>
                                                            </div>

                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_7">
                                                                <label for="tag_7"><span></span>Packaging</label>
                                                            </div>

                                                            <div class="single-tags">
                                                                <input type="checkbox" name="express-delivery" id="tag_8">
                                                                <label for="tag_8"><span></span>Fragile</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="request-services-one__form-btn">
                                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                                                <span class="txt">Submit Now</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End Single Tab-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Request Services One Form-->

                    <!--Start Request Services One Content-->
                    <div class="col-xl-4">
                        <div class="request-services-one__content">
                            <div class="request-services-one__content-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/img/resource/request-services-v1-img1.jpg') }}" alt="">
                                    <div class="request-services-one__video">
                                        <a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="request-services-one__video-icon video-popup">
                                            <span class="txt icon-play-button-arrowhead"></span>
                                        </a>
                                        <div class="title">
                                            <h3><a href="#">Watch Now</a></h3>
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <h3>How to <br> Transport <br> your Product</h3>
                                    </div>
                                </div>
                            </div>

                            <ul class="request-services-one__content-list">
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-global-network"></span>
                                    </div>

                                    <div class="text-box">
                                        <h3>Fast Worldwide Delivery</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon-box">
                                        <span class="icon-enter-product-details"></span>
                                    </div>

                                    <div class="text-box">
                                        <h3>Safe And Secure Delivery</h3>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Request Services One Content-->
                </div>
            </div>
        </section>
        <!--End Request Services One-->

        <!--Start Testimonials One-->
        <section class="testimonials-one">
            <div class="testimonials-one__pattern"><img src="{{ asset('assets/img/pattern/testimonials-v1-pattern.png') }}" alt="">
            </div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h5><span class="icon-right-arrow-1"></span> Testimonials</h5>
                    </div>
                    <h2>What Client Say </h2>
                </div>

                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 50,
                "slidesPerView": 3,
                "loop": true,
                "pagination": {
                    "el": "#testimonials-one__pagination",
                    "type": "bullets",
                    "clickable": true
                    },
                "navigation": {
                    "nextEl": "#team-one__swiper-button-next",
                    "prevEl": "#team-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "768": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "992": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "1200": {
                        "spaceBetween": 50,
                        "slidesPerView": 3
                    }
                }
            }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!--Start Single Testimonials One-->
                            <div class="testimonials-one__single">
                                <div class="icon-box"><span class="icon-quote11"></span></div>
                                <div class="border-left"></div>
                                <div class="testimonials-one__single-top">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/testimonial/testimonials-one__img1.jpg') }}" alt="">
                                    </div>

                                    <div class="title-box">
                                        <h2><a href="#">Rebecca Jr.</a></h2>
                                        <p>Client</p>
                                    </div>
                                </div>

                                <div class="testimonials-one__single-inner">
                                    <div class="content-box">
                                        <div class="content-box-top">
                                            <div class="text-box">
                                                <h3>“Good Services”</h3>
                                            </div>
                                            <div class="rating-box">
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                            </div>
                                        </div>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit some
                                            sed quia consequuntur dolores sequi nesciunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials One-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Single Testimonials One-->
                            <div class="testimonials-one__single">
                                <div class="icon-box"><span class="icon-quote11"></span></div>
                                <div class="border-left"></div>
                                <div class="testimonials-one__single-top">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/testimonial/testimonials-one__img2.jpg') }}" alt="">
                                    </div>

                                    <div class="title-box">
                                        <h2><a href="#">Helen Rose</a></h2>
                                        <p>Client</p>
                                    </div>
                                </div>

                                <div class="testimonials-one__single-inner">
                                    <div class="content-box">
                                        <div class="content-box-top">
                                            <div class="text-box">
                                                <h3>“Great Work”</h3>
                                            </div>
                                            <div class="rating-box">
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                            </div>
                                        </div>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit some
                                            sed quia consequuntur dolores sequi nesciunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials One-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Single Testimonials One-->
                            <div class="testimonials-one__single">
                                <div class="icon-box"><span class="icon-quote11"></span></div>
                                <div class="border-left"></div>
                                <div class="testimonials-one__single-top">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/testimonial/testimonials-one__img1.jpg') }}" alt="">
                                    </div>

                                    <div class="title-box">
                                        <h2><a href="#">John Smith.</a></h2>
                                        <p>Client</p>
                                    </div>
                                </div>

                                <div class="testimonials-one__single-inner">
                                    <div class="content-box">
                                        <div class="content-box-top">
                                            <div class="text-box">
                                                <h3>“Good Services”</h3>
                                            </div>
                                            <div class="rating-box">
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                            </div>
                                        </div>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit some
                                            sed quia consequuntur dolores sequi nesciunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials One-->
                        </div>

                        <div class="swiper-slide">
                            <!--Start Single Testimonials One-->
                            <div class="testimonials-one__single">
                                <div class="icon-box"><span class="icon-quote11"></span></div>
                                <div class="border-left"></div>
                                <div class="testimonials-one__single-top">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/img/testimonial/testimonials-one__img2.jpg') }}" alt="">
                                    </div>

                                    <div class="title-box">
                                        <h2><a href="#">Helen Rose</a></h2>
                                        <p>Client</p>
                                    </div>
                                </div>

                                <div class="testimonials-one__single-inner">
                                    <div class="content-box">
                                        <div class="content-box-top">
                                            <div class="text-box">
                                                <h3>“Great Work”</h3>
                                            </div>
                                            <div class="rating-box">
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                                <a href="#"><i class="icon-star"></i></a>
                                            </div>
                                        </div>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                            fugit some
                                            sed quia consequuntur dolores sequi nesciunt.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonials One-->
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="testimonials-one__pagination"></div>
            </div>
        </section>
        <!--End Testimonials One Area-->

        <!-- Start Team One-->
        <section class="team-one">
            <div class="team-one__bg" style="background-image: url('{{ asset('assets/img/bg/team-v1-bg.jpg') }}');"></div>
            <div class="container">
                <div class="team-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> Our Workers</h5>
                        </div>
                        <h2>Meet with expert team</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="/home/team">
                            <span class="txt">View All Member</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>

                <div class="team-one__bottom">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 24,
                        "slidesPerView": 3,
                        "loop": true,
                        "pagination": {
                            "el": "#team-one__pagination",
                            "type": "bullets",
                            "clickable": true
                            },
                        "navigation": {
                            "nextEl": "#team-one__swiper-button-next",
                            "prevEl": "#team-one__swiper-button-prev"
                        },
                        "autoplay": { "delay": 5000 },
                        "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "768": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "992": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "1200": {
                                "spaceBetween": 24,
                                "slidesPerView": 4
                            }
                        }
                    }'>
                        <div class="swiper-wrapper">
                        @foreach ($teams as $item)
                        <div class="swiper-slide">
                                <!-- Start Team One Single-->
                                <div class="team-one__single">
                                    <div class="team-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('storage/team/'.$item->image) }}" alt="">
                                            <div class="social-links">
                                                <a href="#"><span class="icon-facebook"></span></a>
                                                <a href="#"><span class="icon-twitter"></span></a>
                                                <a href="#"><span class="icon-instagram"></span></a>
                                                <a href="#"><span class="icon-linkedin"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-one__single-content">
                                        <h3><a href="/detail_team/{{ $item->slug }}">{{ Str::limit($item->nama, 15) }}</a></h3>
                                        <p>{{ $item->jabatan}}</p>
                                    </div>
                                </div>
                                <!-- End Team One Single-->
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-pagination" id="team-one__pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Team One-->

        <!-- Start Faq One-->
        <section class="faq-one">
            <div class="big-title">
                <h2>faq</h2>
            </div>
            <div class="faq-one__bg" style="background-image: url('{{ asset('assets/img/resource/faq-v1-bg.jpg') }}');"></div>
            <div class="container">
                <div class="row">
                    <!-- Start Faq One Faq-->
                    <div class="col-xl-6">
                        <div class="faq-one__faq">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h5><span class="icon-right-arrow-1"></span> FAQ ?</h5>
                                </div>
                                <h2>Question & Answer</h2>
                            </div>

                            <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                                <!-- Start Faq One Single-->
                                <li class="accrodion active">
                                    <div class="accrodion-title">
                                        <h2><span>01.</span> How can I pay for your logistics services?</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Answer:</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->

                                <!-- Start Faq One Single-->
                                <li class="accrodion">
                                    <div class="accrodion-title">
                                        <h2><span>02.</span> How can I track my shipments? </h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Answer:</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->

                                <!-- Start Faq One Single-->
                                <li class="accrodion">
                                    <div class="accrodion-title">
                                        <h2><span>03.</span> Can i specify a delivery date when ordering?</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Answer:</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->

                                <!-- Start Faq One Single-->
                                <li class="accrodion">
                                    <div class="accrodion-title">
                                        <h2><span>04.</span> Any advice for a first time shipper?</h2>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <span>Answer:</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Faq One Single-->
                            </ul>
                        </div>
                    </div>
                    <!-- End Faq One Faq-->

                    <!-- Start Faq One Contact Info-->
                    <div class="col-xl-6">
                        <div class="faq-one__contact-info wow fadeInRight" data-wow-delay=".3s">
                            <div class="title-box">
                                <p>Let’s Talk</p>
                                <h3>You need any help? get free consultation</h3>
                            </div>

                            <div class="faq-one__contact-info-number">
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>

                                <div class="text">
                                    <p>Have Any Questions</p>
                                    <h3><a href="tel:123456789">(00) 112 365 489</a></h3>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a class="thm-btn" href="#">
                                    <span class="txt">Contact Us</span> <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Faq One Contact Info-->
                </div>
            </div>
        </section>
        <!-- End Faq One-->

        <!-- Start Blog One-->
        <section class="blog-one">
            <div class="blog-one__pattern" style="background-image: url('{{ asset('assets/img/pattern/blog-v1-pattern.jpg') }}');"></div>
            <div class="container">
                <div class="blog-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> LATEST POST</h5>
                        </div>
                        <h2>latest news & blog</h2>
                    </div>
                    <div class="btn-box">
                        <a class="thm-btn" href="/home/blog">
                            <span class="txt">View All Post</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>



                <div class="blog-one__bottom">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "spaceBetween": 50,
                        "slidesPerView": 3,
                        "loop": true,
                        "pagination": {
                            "el": "#blog-one__pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": "#team-one__swiper-button-next",
                            "prevEl": "#team-one__swiper-button-prev"
                        },
                        "autoplay": { "delay": 5000 },
                        "breakpoints": {
                            "0": { "spaceBetween": 30, "slidesPerView": 1 },
                            "375": { "spaceBetween": 30, "slidesPerView": 1 },
                            "575": { "spaceBetween": 30, "slidesPerView": 1 },
                            "768": { "spaceBetween": 30, "slidesPerView": 2 },
                            "992": { "spaceBetween": 30, "slidesPerView": 3 },
                            "1200": { "spaceBetween": 50, "slidesPerView": 3 }
                        }
                    }'>
                        <div class="swiper-wrapper">
                            @foreach ($artikels as $item)
                            <div class="swiper-slide">
                                <!-- Start Blog One Single-->
                                <div class="blog-one__single">
                                    <div class="blog-one__single-img">
                                        <div class="inner">
                                            <img src="{{ asset('storage/artikel/'.$item->image) }}" alt="{{ $item->judul }}">
                                            <div class="text-box">Artikel Terbaru</div>
                                        </div>
                                    </div>

                                    <div class="blog-one__single-content">
                                        <h2><a href="/detail/{{ $item->slug }}">{{ Str::limit($item->judul, 50) }}</a></h2>
                                        <ul class="meta-box">
                                            <li><a href="#">By Admin</a></li>
                                            <li>-</li>
                                            <li>{{ $item->created_at->format('F d, Y') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Blog One Single-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination" id="blog-one__pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Blog One-->

        <!-- Start Team One-->
        <section class="photo-one">
            <div class="photo-one__bg" style="background-image: url('{{ asset('assets/img/bg/team-v1-bg.jpg') }}');"></div>
            <div class="container">
                <div class="photo-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> Our Workers</h5>
                        </div>
                        <h2>Meet with expert photo</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="/home/photo">
                            <span class="txt">View All Member</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>

                <div class="photo-one__bottom">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 24,
                        "slidesPerView": 3,
                        "loop": true,
                        "pagination": {
                            "el": "#photo-one__pagination",
                            "type": "bullets",
                            "clickable": true
                            },
                        "navigation": {
                            "nextEl": "#photo-one__swiper-button-next",
                            "prevEl": "#photo-one__swiper-button-prev"
                        },
                        "autoplay": { "delay": 5000 },
                        "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "768": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "992": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "1200": {
                                "spaceBetween": 24,
                                "slidesPerView": 4
                            }
                        }
                    }'>
                    <div class="swiper-wrapper">
                        @foreach ($photos as $item)
                        <div class="swiper-slide">
                            <!-- Start Team One Single-->
                            <div class="photo-one__single">
                                <div class="photo-one__single-img">
                                    <div class="inner">
                                        <!-- Tambahkan class 'gallery-item' dan atribut title -->
                                        <a class="photo-home-popup gallery-item" href="{{ asset('storage/photo/'.$item->image) }}" title="">
                                            <img src="{{ asset('storage/photo/'.$item->image) }}" class="img-fluid" alt="{{ $item->judul }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="photo-one__single-content">
                                    <h3>{{ $item->judul}}</h3>
                                </div>
                            </div>
                            <!-- End Team One Single-->
                        </div>
                        @endforeach
                    </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-pagination" id="photo-one__pagination"></div>
            </div>
            </div>
        </section>
        <!-- End Team One-->

    </div>

@endsection