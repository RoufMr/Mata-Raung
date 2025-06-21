@extends('layouts.layout')

@php
$title='Blog Gride';
$subTitle = 'Blog';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

<!--Start Blog Three-->
<section class="blog-two blog-two--three blog-two--three--blog">
    <div class="container">
                        <div class="services-three--services__top">
                    <div class="title-box">
                        <h2>We Provide all Kinds of <br> Logistics Service</h2>
                    </div>

                    <div class="text-box">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> of tempor
                            incididunt ut labore et dolore magna</p>
                    </div>
                </div>
        <div class="row">


            <!--Start Services Three Single-->
            @foreach ($artikels as $item)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog-two__single services-three__single">
                    <div class="blog-two__single-img">
                        <div class="overlay-img__outer">
                            <div class="name">
                                <p>Harley Russle</p>
                            </div>
                            <div class="overlay-img">
                                <img src="{{ asset('assets/img/blog/blog-v3-img4.jpg') }}" alt="#">
                            </div>
                        </div>
                        <div class="inner">
                            <img src="{{ asset('storage/artikel/'.$item->image) }}" alt="{{ $item->judul }}">
                        </div>
                    </div>

                    <div class="services-three__single-content">
                        <div class="services-three__single-content-inner">
                        <!-- <ul class="meta-box">
                            <li>{{ $item->created_at->format('F d, Y') }}</li>
                        </ul> -->
                        <h2><a href="/detail/{{ $item->slug }}">{{ Str::limit($item->judul, 60) }}</a></h2>
                        {{ $item->created_at->format('F d, Y') }}
    
                        <!-- <p>{{ Str::limit(strip_tags($item->desc), 40, '...') }}</p> -->
                            
                            <div class="count-box">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </div>
                            <div class="btn-box">
                                <a href="/detail/{{ $item->slug }}">Read More <i class="icon-right-arrow-5"></i></a>
                                <div class="number-box">
                                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--End Services Three Single-->

            
        </div>

        <ul class="styled-pagination text-center clearfix">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="arrow next active"><a href="#"><span class="icon-right-arrow1"></span></a>
            </li>
        </ul>
    </div>
</section>
<!--End Blog Three-->

<!--Start Cta Three-->
<section class="cta-two style3 style4">
    <div class="container">
        <div class="cta-two__inner">
            <div class="shape1"><img src="{{ asset('assets/img/shape/cta-v3-shape1.png') }}" alt=""></div>
            <div class="shape2"><img src="{{ asset('assets/img/shape/cta-v3-shape2.png') }}" alt=""></div>
            <div class="shape3 float-bob-x"><img src="{{ asset('assets/img/shape/cta-v3-shape3.png') }}" alt=""></div>
            <div class="cta-two__inner-box">
                <div class="sec-title-style3">
                    <div class="sub-title">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon/title-marker-3.png') }}" alt="">
                        </div>
                        <h5>Get in touch</h5>
                    </div>
                    <h2>Looking for the best logistics <br>
                        transport services</h2>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="#">
                        <span class="txt">Request a Quote</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Cta Three-->

@endsection