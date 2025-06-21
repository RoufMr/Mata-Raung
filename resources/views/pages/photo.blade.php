@extends('layouts.layout')

@php
$title='Our Team';
$subTitle = 'Our Team';
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

                <div class="team-three--team__bottom">
                    <div class="text-box">
                        <p>We’re Experience. Become a team member!</p>
                    </div>

                    <div class="btn-box">
                        <a class="thm-btn" href="">
                            <span class="txt">Join Our Team</span> <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Team Three-->


        
@endsection