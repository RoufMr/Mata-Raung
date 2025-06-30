@extends('layouts.layout')

@php
$title='Our Services';
$subTitle = 'Our Services';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';
@endphp

@section('content')

        <!--Start Pricing One -->
        <section class="pricing-one">
            <div class="pricing-one__bg" style="background-image: url('{{ asset('assets/img/background/pricing-v1-bg.jpg') }}');"></div>
            <div class="container">

                <div class="sec-title-style3 text-center">
                    <div class="sub-title center">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                        </div>
                        <h5>Price Table</h5>
                    </div>
                    <h2>Our Best Pricing Plan</h2>
                </div>


                <div class="row">
                    <!--Start Pricing One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-one__single text-center">
                            <div class="pricing-one__single-bg" style="background-image: url('{{ asset('assets/img/resource/nyobak.jpg') }}');"></div>
                            <div class="table-header">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/resource/nyobak.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="table-content">
                                <div class="table-content__top">
                                    <h3>Roade Freight</h3>
                                    <h2>$39 <span>/ 256kg</span></h2>
                                </div>

                                <ul>
                                    <li>
                                        <p><span class="icon-check"></span>Single Truck</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>Full Insurance</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>500 Km</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>Real-time rate shiping</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Get a Quote</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing One Single-->

                    <!--Start Pricing One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                        <div class="pricing-one__single text-center">
                            <div class="pricing-one__single-bg" style="background-image: url('{{ asset('assets/img/resource/nyobak.jpg') }}');"></div>
                            <div class="table-header">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/resource/nyobak.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="table-content">
                                <div class="table-content__top">
                                    <h3>Air Freight</h3>
                                    <h2>$70 <span>/ 300kg</span></h2>
                                </div>

                                <ul>
                                    <li>
                                        <p><span class="icon-check"></span>Single Truck</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>Full Insurance</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>500 Km</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>Real-time rate shiping</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Get a Quote</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing One Single-->

                    <!--Start Pricing One Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="pricing-one__single text-center">
                            <div class="pricing-one__single-bg" style="background-image: url('{{ asset('assets/img/resource/nyobak.jpg') }}');"></div>
                            <div class="table-header">
                                <div class="img-box">
                                    <img src="{{ asset('assets/img/resource/nyobak.jpg') }}" alt="">
                                </div>
                            </div>

                            <div class="table-content">
                                <div class="table-content__top">
                                    <h3>Cargo Transport</h3>
                                    <h2>$120 <span>/ 500kg</span></h2>
                                </div>

                                <ul>
                                    <li>
                                        <p><span class="icon-check"></span>Single Truck</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>Full Insurance</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>500 Km</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-check"></span>Real-time rate shiping</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="table-footer">
                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Get a Quote</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing One Single-->
                </div>
            </div>
        </section>
        <!--End Pricing One -->

        <!--Start Work process Two-->
        <section class="work-process-two">
            <div class="work-process-two__bg" style="background-image: url('{{ asset('assets/img/footer/111.jpg') }}');"></div>
            <div class="container">
                <div class="sec-title-style3 text-center">
                    <div class="sub-title center">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/title-marker.png') }}" alt="">
                        </div>
                        <h5>work process</h5>
                    </div>
                    <h2>Easy 3 Working Step</h2>
                </div>
                <div class="row">
                    <!--Start Work process Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/work-process-v2-shape1.png') }}" alt=""></div>
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-enter-product-details"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 1 </h3>
                                <h2><a href="#">Enter Product Details</a></h2>
                                <p>Once you place your order via mail or fax our field staff will collect the documents
                                    and consignments from.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->

                    <!--Start Work process Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="shape1"><img src="{{ asset('assets/img/shape/work-process-v2-shape1.png') }}" alt=""></div>
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-pay-your-service-tag"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 2 </h3>
                                <h2><a href="#">Pay Your Service Tag</a></h2>
                                <p>Once you place your order via mail or fax our field staff will collect the documents
                                    and consignments from.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->

                    <!--Start Work process Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="work-process-two__single">
                            <div class="work-process-two__single-icon">
                                <div class="inner">
                                    <span class="icon-road-transport t5"></span>
                                </div>
                            </div>

                            <div class="work-process-two__single-text">
                                <h3>Step - 3 </h3>
                                <h2><a href="#">Ready To Go Your Goods</a></h2>
                                <p>Once you place your order via mail or fax our field staff will collect the documents
                                    and consignments from.</p>
                            </div>
                        </div>
                    </div>
                    <!--End Work process Two Single-->
                </div>
            </div>
        </section>
        <!--End Work process Two-->

        <!--Start Why Choose Two-->
        <section class="why-choose-two why-choose-two--services">
            <div class="container">
                <div class="row">
                    <!--Start Why Choose Two Content-->
                    <div class="col-xl-6">
                        <div class="why-choose-two__content">
                            <div class="sec-title-style3">
                                <div class="sub-title">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                                    </div>
                                    <h5>Why choose us</h5>
                                </div>
                                <h2>We Provide all Kinds of <br> Logistics Service</h2>
                            </div>
                            <div class="why-choose-two__content-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua
                                    Quis gravida risus suspend ultrices gravida.</p>
                            </div>

                            <div class="why-choose-two__progress">
                                <div class="why-choose-two__progress-single">
                                    <div class="title">
                                        <h4>Success Rate 90%</h4>
                                    </div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="90%">
                                            <div class="count-text">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-box">
                                <a href="#">Get Freight <span class="icon-right-arrow-5"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Why Choose Two Content-->

                    <!--Start Why Choose Two Counter-->
                    <div class="col-xl-6">
                        <div class="why-choose-two__counter">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay=".1s">
                                    <div class="why-choose-two__counter-single">
                                        <div class="text-box">
                                            <h2 class="count">
                                                <span class="odometer" data-count="35"></span>
                                                <span class="plus">+</span>
                                            </h2>
                                            <div class="text">
                                                <p>Years Of Experience</p>
                                            </div>
                                        </div>

                                        <div class="icon-box">
                                            <span class="icon-experience"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".3s">
                                    <div class="why-choose-two__counter-single">
                                        <div class="text-box">
                                            <h2 class="count">
                                                <span class="odometer" data-count="250"></span>k
                                                <span class="plus">+</span>
                                            </h2>
                                            <div class="text">
                                                <p>Parcels Shipped Safely</p>
                                            </div>
                                        </div>

                                        <div class="icon-box">
                                            <span class="icon-shipped1"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                                    <div class="why-choose-two__counter-single">
                                        <div class="text-box">
                                            <h2 class="count">
                                                <span class="odometer" data-count="365"></span>
                                                <span class="plus">+</span>
                                            </h2>
                                            <div class="text">
                                                <p>Our Owned Vehicles</p>
                                            </div>
                                        </div>

                                        <div class="icon-box">
                                            <span class="icon-road-transport t5"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay=".3s">
                                    <div class="why-choose-two__counter-single">
                                        <div class="text-box">
                                            <h2 class="count">
                                                <span class="odometer" data-count="1.2"></span>k
                                                <span class="plus">+</span>
                                            </h2>
                                            <div class="text">
                                                <p>Company We Help</p>
                                            </div>
                                        </div>

                                        <div class="icon-box">
                                            <span class="icon-support"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Why Choose Two Counter-->
                </div>
            </div>
        </section>
        <!--End Why Choose Two-->



        <!--Start Cta Three-->

        <!--End Cta Three-->

@endsection
