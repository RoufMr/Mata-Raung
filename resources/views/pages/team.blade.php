@extends('layouts.layout')

@php
$title='Our Team';
$subTitle = 'Our Team';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Team Three-->
        <section class="team-three team-three--team">
            <div class="container">
                <div class="row">
                    <!--Start Team Three Single-->
                    @foreach ($teams as $item)
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-three__single">
                            <div class="team-three__single-img">
                                <img src="{{ asset('storage/team/'.$item->image) }}" alt="{{ $item->nama }}">                            </div>
                            <div class="team-three__single-content text-center">
                                <h3><a href="/detail_team/{{ $item->slug }}">{{ Str::limit($item->nama, 15) }}</a></h3>
                                <p>{{ $item->jabatan }}</p>
                                <div class="social-links">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-instagram"></span></a>
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </div>
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