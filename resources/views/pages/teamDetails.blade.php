@extends('layouts.layout')

@php
$title='Team Details';
$subTitle = 'Team Details';
$css= '<link rel="stylesheet" href="' . asset('assets/css/color-3.css') . '" />';
$script='<script src="' . asset('assets/vendor/TweenMax.min.js') . '"></script>';  
@endphp

@section('content')

        <!--Start Team Details-->
        <section class="team-details">
            <div class="container">
                <!--Start Team Details Top-->
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="team-details__top-img">
                                <img src="{{ asset('storage/team/'.$team->image) }}" alt="">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="team-details__top-content">
                                <div class="team-details__top-content-progress">
                                    <div class="team-details__top-content-progress-single">
                                        <div class="title">
                                            <h4>Success Rate 80%</h4>
                                        </div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="80%">
                                                <div class="count-text">80%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-details__top-content-progress-single">
                                        <div class="title">
                                            <h4>Complete Work - 90%</h4>
                                        </div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%">
                                                <div class="count-text r123">90%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-details__top-content-progress-single mb0">
                                        <div class="title">
                                            <h4>Satisfied Client - 95%</h4>
                                        </div>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="95%">
                                                <div class="count-text r93">95%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="team-details__top-content-bottom">
                                    <div class="team-details__top-content-contact-info">
                                        <ul>
                                            <li>
                                                <div class="text-box">
                                                    <p>Name</p>
                                                    <h3>{{ $team->nama }}</h3>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="text-box">
                                                    <p>Position</p>
                                                    <h3>{{ $team->jabatan }}</h3>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="text-box">
                                                    <p>Email</p>
                                                    <h3>{{ $team->email }}</h3>
                                                </div>
                                            </li>
                                        </ul>

                                        <ul>
                                            <!-- <li>
                                                <div class="text-box">
                                                    <p>Email</p>
                                                    <h3><a href="mailto:yourmail@email.com">jennifer12@gmail.com</a>
                                                    </h3>
                                                </div>
                                            </li> -->

                                            <li>
                                                <div class="text-box">
                                                    <p>Phone</p>
                                                    <h3><a href="">{{ $team->notelp }}</a></h3>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="text-box">
                                                    <p>Address</p>
                                                    <h3>{{ $team->alamat }}</h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="team-details__top-content-social-links">
                                        <a href="{{ $team->facebook }}"><span class="icon-facebook"></span></a>
                                        <a href="{{ $team->tiktok }}"><span class="fab fa-tiktok"></span></a>
                                        <a href="{{ $team->instagram }}"><span class="icon-instagram"></span></a>
                                        <a href="{{ $team->youtube }}"><span class="fab fa-youtube"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Details Top-->

                <!--Start Team Details Bottom-->
                <div class="team-details__bottom">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="team-details__bottom-content">
                                <h2>About Me</h2>
                                <h4>{!! $team->deskripsi !!}</h4>
                                <!-- <p>It is a long established fact that a reader will be distracted more-or-less normal
                                    distribution of letters, as opposed to using content here content here, making it
                                    look readable English packages and web page editors now use Lorem of Ipsum as their
                                    default model.</p> -->
                            </div>
                        </div>

                        <!-- <div class="col-xl-6">
                            <div class="team-details__bottom-form">
                                <div class="title-box">
                                    <h2>Contact Us</h2>
                                </div>

                                <form id="contact-form" action="assets/inc/mail.php" method="POST">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Full Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="email" placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="number" placeholder="Mobile" name="number">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <input type="text" placeholder="Company" name="company">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="contact-page__input-box">
                                                <textarea name="message" placeholder="Messege"></textarea>
                                            </div>
                                            <div class="contact-page__btn">
                                                <button type="submit" class="thm-btn" data-loading-text="Please wait...">
                                                    <span class="txt">Sand Massage</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="ajax-response mb-0"></p>

                            </div>
                        </div> -->
                    </div>
                </div>
                <!--End Team Details Bottom-->
            </div>
        </section>
        <!--End Team Details-->

<!--Start Team Three-->
<section class="team-three team-three--team-details">
    <div class="team-three__shape1">
        <img src="{{ asset('assets/img/shape/team-v3-shape1.png') }}" alt="">
    </div>
    <div class="container">
        <div class="team-three__top">
            <div class="sec-title-style3">
                <div class="sub-title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/icon/title-marker-4.png') }}" alt="">
                    </div>
                    <h5>Team</h5>
                </div>
                <h2>Meet Our Staff</h2>
            </div>

            <div class="btn-box">
                <a class="thm-btn" href="#">
                    <span class="txt">Become a Member</span>
                </a>
            </div>
        </div>

        <div class="row">
            @foreach($otherTeams as $index => $otherTeam)
                <!--Start Team Three Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow {{ $index % 2 == 0 ? 'fadeInUp' : 'fadeInDown' }}" data-wow-delay=".3s">
                    <div class="team-three__single">
                        <div class="team-three__single-img">
                            <img src="{{ asset('storage/team/'.$otherTeam->image) }}" alt="{{ $otherTeam->nama }}">
                        </div>
                        <div class="team-three__single-content text-center">
                            <h3><a href="{{ route('detail_team', $otherTeam->slug) }}">{{Str::limit($otherTeam->nama,15) }}</a></h3>
                            <p>{{ $otherTeam->jabatan }}</p>
                            <div class="social-links">
                                <a href="{{ $otherTeam->facebook ?? '#' }}" class="{{ !$otherTeam->facebook ? 'disabled' : '' }}">
                                    <span class="icon-facebook"></span>
                                </a>
                                <a href="{{ $otherTeam->twitter ?? '#' }}" class="{{ !$otherTeam->twitter ? 'disabled' : '' }}">
                                    <span class="icon-twitter"></span>
                                </a>
                                <a href="{{ $otherTeam->instagram ?? '#' }}" class="{{ !$otherTeam->instagram ? 'disabled' : '' }}">
                                    <span class="icon-instagram"></span>
                                </a>
                                <a href="{{ $otherTeam->linkedin ?? '#' }}" class="{{ !$otherTeam->linkedin ? 'disabled' : '' }}">
                                    <span class="icon-linkedin"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Three Single-->
            @endforeach
        </div>
    </div>
</section>
<!--End Team Three-->



@endsection