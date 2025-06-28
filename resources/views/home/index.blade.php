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
                                    <a href="{{route('detail_about')}}">Read <br>More</a>
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


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__content-mission">
                            <div class="about-one__content-features">
                                <ul>
                                    <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
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
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-one__content-mission">
                            <div class="about-one__content-features">
                                <ul>

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
                                    <h3><a href="#">Sustainable & <br>Eco-Conscious</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Committed to responsible tourism, we support local communities and minimize environmental impact on every trip.</p>
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
                                    <h3><a href="#">Safety-First Approach</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Every journey is backed by high-standard gear, travel insurance, and strict safety protocols to ensure your comfort and security.</p>
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
                                    <h3><a href="#">Flexible Service</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Trips can be fully customized to your needs. Our team provides tailored recommendations for your perfect adventure.</p>
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
                                    <h3><a href="#">Local Expertise & Experience</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>Our team consists of professional guides with years of experience in special interest tourism,
                                        offering deep knowledge of exclusive destinations and the best routes.</p>
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
                                    <h3><a href="#">Unique & Tailored Adventures</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>We design one-of-a-kind trips—from mountain expeditions to cultural immersions and extreme adventures—crafted for unforgettable experiences.</p>
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
                                    <h3><a href="#">Trusted by Adventurers</a></h3>
                                </div>
                                <div class="text-box">
                                    <p>With hundreds of successful trips and glowing reviews, we’re proud to be a top choice for explorers.</p>
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
        {{-- <section class="project-one">
            <div class="project-one__bg" style="background-image: url('{{ asset('assets/img/bg/81956.jpg') }}');"></div>
            <div class="shape1"><img src="{{ asset('assets/img/shape/project-v1-shape1.png') }}" alt=""></div>
            <div class="shape2"><img src="{{ asset('assets/img/shape/project-v1-shape3.png') }}" alt=""></div>
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
        </section> --}}
        <!--End Project One-->

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
            <div class="team-one__bg" style="background-image: url('{{ asset('assets/img/bg/81956.jpg') }}');"></div>
            <div class="shape1"><img src="{{ asset('assets/img/shape/project-v1-shape1.png') }}" alt=""></div>
            <div class="shape2"><img src="{{ asset('assets/img/shape/project-v1-shape3.png') }}" alt=""></div>
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
            <div class="photo-one__bg" style="background-image: url('{{ asset('assets/img/bg/81956.jpg') }}');"></div>
            <div class="shape1"><img src="{{ asset('assets/img/shape/project-v1-shape1.png') }}" alt=""></div>
            <div class="shape2"><img src="{{ asset('assets/img/shape/project-v1-shape3.png') }}" alt=""></div>
            <div class="container">
                <div class="photo-one__top">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h5><span class="icon-right-arrow-1"></span> Our Gallery</h5>
                        </div>
                        <h2>Thrown away darling</h2>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="/home/photo">
                            <span class="txt">View All Gallery</span> <i class="icon-right-arrow"></i>
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