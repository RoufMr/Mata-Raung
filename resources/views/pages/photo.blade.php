@extends('layouts.layout')

@php
$title='Our Gallery';
$subTitle = 'Our Gallery';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';
@endphp

@section('content')

        <!--Start Team Three-->
        <section class="photo-three photo-three--team">
            <div class="container">
                <div class="row">
                    <!--Start Team Three Single-->
                    @foreach ($photos as $item)
                    <div class="col-xl-3 col-lg-6 col-md-6" data-wow-delay=".3s">
                        <div class="photo-three__single">
                            <div class="photo-three__single-img">
                                <!-- <img src="{{ asset('storage/photo/'.$item->image) }}" alt="{{ $item->judul }}">-->
                                 <a class="photo-popup" href="{{ asset('storage/photo/'.$item->image) }}">
                                    <img src="{{ asset('storage/photo/'.$item->image) }}" class="img-fluid" alt="{{ $item->judul }}">
                                 </a>
                            </div>
                            <div class="photo-three__single-content text-center">
                            <a class="photo-popup" href="{{ asset('storage/photo/'.$item->image) }}">
                                <h3>{{ $item->judul }}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End Team Three Single-->

                </div>

                <ul class="styled-pagination text-center clearfix">
                    {{-- Previous Page Link --}}
                    @if ($photos->onFirstPage())
                        <li class="disabled"><span>&laquo;</span></li>
                    @else
                        <li><a href="{{ $photos->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($photos->links()->elements[0] as $page => $url)
                        @if ($page == $photos->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($photos->hasMorePages())
                        <li><a href="{{ $photos->nextPageUrl() }}" rel="next">&raquo;</a></li>
                    @else
                        <li class="disabled"><span>&raquo;</span></li>
                    @endif
                </ul>
            </div>
        </section>
        <!--End Team Three-->



@endsection