@extends('layouts.layout')

@php
$title='About Us';
$subTitle = 'About Us';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';
@endphp

@section('content')
@foreach($abouts as $about)
<!--Start About Three-->
<section class="about-three">
    <div class="container">
        <div class="row">
            <!--Start About Three Img-->
            {{-- @foreach($abouts as $about) --}}
            <div class="col-xl-6">
                <div class="about-three__img">
                    <div class="shape1"><img src="{{ asset('assets/img/shape/about-v3-shape1.png') }}" alt=""></div>
                    <div class="about-three__img1 wow fadeInLeft" data-wow-delay=".1s">
                        <img class="float-bob-y" src="{{ asset('storage/about/' . $about->image1) }}" alt="">
                    </div>
                    <div class="about-three__img2 wow fadeInRight" data-wow-delay=".1s">
                        <img src="{{ asset('storage/about/' . $about->image2) }}" alt="">
                    </div>
                    <div class="about-three__img-icon-box">
                        <div class="round-text">
                            <div class="curved-circle-3 rotate-me">
                                Mata Raung Indonesia - Since 2019 -
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/logo_nonbg.png') }}" width="66px" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--End About Three Img-->

            <!--Start About Three Content-->
            <div class="col-xl-6">
                <div class="about-three__content">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                            </div>
                            <h5>About Company</h5>
                        </div>
                        <h2>{{ $about->judul1 }}</h2>
                    </div>
                    <div class="about-three__content-text">
                        <p>{!! $about->deskripsi1 !!}</p>
                    </div>

                    <ul class="about-three__content-list">
                        <li>
                            <div class="icon-box">
                                <span class="icon-global-network"></span>
                            </div>

                            <div class="text-box">
                                <h3>Vission</h3>
                                <p>{{ $about->visi }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-enter-product-details"></span>
                            </div>

                            <div class="text-box">
                                <h3>Mission</h3>
                                <p>{{ $about->misi }}</p>
                            </div>
                        </li>
                    </ul>

                    {{-- <div class="about-three__content-bottom">
                        <div class="btn-box">
                            <a class="thm-btn" href="#">
                                <span class="txt">Know More About Us</span>
                            </a>
                        </div>

                        <div class="author-box">
                            <div class="img-box">
                                <img src="{{ asset('assets/img/about/about-v2-img4-.jpg') }}" alt="">
                            </div>

                            <div class="text-box">
                                <p>Need Help?</p>
                                <h3><a href="tel:123456789">+00 264 566 579</a></h3>

                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
            <!--End About Three Content-->
            {{-- @endforeach --}}
        </div>
    </div>
</section>
<!--End About Three-->

<!--Start Services Details Page Content-->
<section class="fact-counter-two fact-counter-two--about">
<div class="container">

    <div >
        {{-- <div class="services-details-page__content-img1">
            <img src="{{ asset('assets/img/service/services-details-img4.jpg') }}" alt="#">
        </div> --}}

        <div class="services-details-page__content-text1">
            <div class="top-text">
                <div class="icon">
                    <span class="icon-airplane mt"></span>
                </div>

                <div class="title">
                    <h2>{{$about->judul2}}</h2>
                </div>
            </div>
            <p></p>

        </div>

        <div class="services-details-page__content-text2">
            <div class="title-box">
                {{-- <h2>Benefit of Service</h2> --}}
                <p>{!! $about->deskripsi2 !!}</p>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="services-details-page__content-text2-single text-center">
                        <div class="icon-box">
                            <span class="icon-checked-2"></span>
                        </div>
                        <div class="text">
                            <h4>Packages and Web <br> Page Editors</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="services-details-page__content-text2-single text-center">
                        <div class="icon-box">
                            <span class="icon-checked-2"></span>
                        </div>
                        <div class="text">
                            <h4>Professional and <br> Dedicated Team</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="services-details-page__content-text2-single text-center">
                        <div class="icon-box">
                            <span class="icon-checked-2"></span>
                        </div>
                        <div class="text">
                            <h4>Trusted Construction <br> Agency</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

</section>
{{-- </section> --}}
<!--End Services Details Page Content-->

<!--Start Fact Counter Two-->
<section class="fact-counter-two fact-counter-two--about">
    <div class="container">
        <div class="row">
            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-special-shipments"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="250000"></span>
                        </h2>
                        <div class="text">
                            <p>Parcels Shipped Safely</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->

            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-global-network"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="95000"></span>
                        </h2>
                        <div class="text">
                            <p>Cities Served Worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->

            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-satisfied3"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="2560"></span>
                        </h2>
                        <div class="text">
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->

            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-support"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="1200"></span>
                        </h2>
                        <div class="text">
                            <p>Company We Help</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->
        </div>
    </div>
</section>
<!--End Fact Counter Two-->


<!--Start Fact Counter Two-->
<section class="fact-counter-two fact-counter-two--about">
    <div class="container">
        <div class="row">
            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-special-shipments"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="250000"></span>
                        </h2>
                        <div class="text">
                            <p>Parcels Shipped Safely</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->

            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-global-network"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="95000"></span>
                        </h2>
                        <div class="text">
                            <p>Cities Served Worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->

            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-satisfied3"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="2560"></span>
                        </h2>
                        <div class="text">
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->

            <!--Start Fact Counter Two Single-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                <div class="fact-counter-two__single">
                    <div class="icon-box">
                        <span class="icon-support"></span>
                        <div class="shape2"><img src="{{ asset('assets/img/shape/fact-counter-v2-shape1.png') }}" alt=""></div>
                    </div>
                    <div class="fact-counter-two__single-inner">
                        <h2 class="count"><span class="plus">+</span><span class="odometer" data-count="1200"></span>
                        </h2>
                        <div class="text">
                            <p>Company We Help</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Fact Counter Two Single-->
        </div>
    </div>
</section>
<!--End Fact Counter Two-->



@endforeach
@section('footer')
@endsection
@endsection