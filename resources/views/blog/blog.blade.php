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
            <div class="col-xl-4 col-lg-4 col-md-6 dataTable">
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
            {{-- Previous Page Link --}}
            @if ($artikels->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                <li><a href="{{ $artikels->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($artikels->links()->elements[0] as $page => $url)
                @if ($page == $artikels->currentPage())
                    <li class="active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($artikels->hasMorePages())
                <li><a href="{{ $artikels->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>

        {{-- <ul class="styled-pagination text-center clearfix">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="arrow next active"><a href="#"><span class="icon-right-arrow1"></span></a>
            </li>
        </ul> --}}
    </div>
</section>
<!--End Blog Three-->



@endsection