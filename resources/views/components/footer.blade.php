<footer class="footer-one style3">
    <div class="footer-one__bg" style="background-image: url('{{ asset('assets/img/footer/111.jpg') }}');"></div>
    {{-- <!-- <div class="shape2 float-bob-y"><img src="{{ asset('assets/img/shape/footer-v2-shape2.png') }}" alt=""></div> --> --}}
    <!-- Start Footer Main -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-main__bottom">
                <div class="row">
                    <!--Start Single Footer Widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="single-footer-widget footer-widget__logo">
                            <div class="logo-box">
                                <a href="/"><img src="{{ asset('assets/img/resource/logo_nonbg.png') }}" width="300px" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="single-footer-widget footer-widget__about">
                            {{-- <div class="logo-box">
                                <a href="/"><img src="{{ asset('assets/img/resource/logo_nonbg.png') }}" width="300px" alt=""></a>
                            </div> --}}
                            <div class="footer-widget__about-inner">
                                {{-- @foreach($abouts as $about) --}}
                                <div class="footer-widget__contact-box">
                                    <ul>
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-pin"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Address</p>
                                                <h4><a href="{{route('home.contact')}}">
                                                    Jl. H. Arifin, Dusun Krajan, Sukojati, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461
                                                </a></h4>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-paper-plane"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Email</p>
                                                <h4><a href="mailto:mataraung@email.com">mataraung@gmail.com</a>
                                                </h4>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-out-call"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Phone</p>
                                                <h4><a href="https://wa.me/6282131819945">+62 821 3181 9945</a></h4>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="single-footer-widget footer-widget__about">
                            {{-- <div class="logo-box">
                                <a href="/"><img src="{{ asset('assets/img/resource/logo_nonbg.png') }}" width="300px" alt=""></a>
                            </div> --}}
                            <div class="footer-widget__about-inner">
                                {{-- @foreach($abouts as $about) --}}
                                <div class="footer-widget__contact-box">
                                    <div class="title">
                                        <h2>Quick Links</h2>
                                    </div>
                                  <ul>
                                    <li>
                                        <div class="content-box">
                                            {{-- <p>Phone</p> --}}
                                            <h4><a href="{{ route('detail_about') }}">About</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content-box">
                                            {{-- <p>Phone</p> --}}
                                            <h4><a href="{{ route('home.team') }}">Meet The Team</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content-box">
                                            {{-- <p>Phone</p> --}}
                                            <h4><a href="{{ route('home.blog') }}">All Blogs</a></h4>
                                        </div>
                                    </li><li>
                                        <div class="content-box">
                                            {{-- <p>Phone</p> --}}
                                            <h4><a href="{{ route('home.photo') }}">All Gallery</a></h4>
                                        </div>
                                    </li><li>
                                        <div class="content-box">
                                            {{-- <p>Phone</p> --}}
                                            <h4><a href="{{ route('services') }}">Services</a></h4>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </div>
                    <!--Start Single Footer Widget-->
                    {{-- <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget footer-widget__links">
                            <div class="title">
                                <h2>Quick Links</h2>
                            </div>

                            <div class="footer-widget__links-box">
                                <ul>
                                    <li><a href="{{ route('detail_about') }}">About</a></li>
                                    <li><a href="{{ route('home.team') }}">Meet The Team</a></li>
                                    <li><a href="{{ route('home.blog') }}">All Blogs</a></li>
                                    <li><a href="{{ route('home.photo') }}">All Gallery</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget footer-widget__links services">
                            <div class="title">
                                <h2>Our Services</h2>
                            </div>

                            <div class="footer-widget__links-box">
                                <ul>
                                    <li><a href="{{ route('roadTransport') }}">Air Freight</a></li>
                                    <li><a href="{{ route('roadTransport') }}">Ocean Freight</a></li>
                                    <li><a href="{{ route('roadTransport') }}">Railway Freight</a></li>
                                    <li><a href="{{ route('roadTransport') }}">Warehousing</a></li>
                                    <li><a href="{{ route('roadTransport') }}">Packaging</a></li>
                                    <li><a href="{{ route('roadTransport') }}">Distribution</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget single-footer__newsletter">
                            <div class="title">
                                <h2>Newsletter</h2>
                            </div>
                            <div class="single-footer__newsletter-box">
                                <div class="single-footer__newsletter-text1">
                                    <p>Subscribe to our newsletter!</p>
                                </div>
                                <form class="single-footer__newsletter-form">
                                    <div class="single-footer__newsletter-form-input">
                                        <input type="email" placeholder="Enter Your Email" name="email">
                                    </div>

                                    <div class="single-footer__newsletter-btn">
                                        <button class="thm-btn" type="submit">
                                            <span class="txt">Subscribe New</span>
                                            <i class="icon-right-arrow"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <!--End Single Footer Widget-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Main -->

    <!--Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__inner">
                <div class="copyright-text">
                    <p>© 2025 <a href="/">Mata Raung,</a> All Rights Reserved.</p>
                </div>
                <div class="social-links">
                    <a href=""><span class="fab fa-facebook"></span></a>
                    <a href="https://www.instagram.com/mataraung?igsh=MTJpaXMwdzE4MDhlaQ=="><span class="fab fa-instagram"></span></a>
                    <a href="https://www.tiktok.com/@mataraung?lang=id-ID&is_from_webapp=1&sender_device=mobile&sender_web_id=7510456609338148370">
                    <span class="fab fa-tiktok"></span>
                    </a>
                    <a href=""><span class="fab fa-youtube"></span></a>
                </div>
                <div class="copyright-menu">
                    <ul>
                        <li><a href="{{ route('detail_about') }}">Trams &amp; Condition</a></li>
                        <li><a href="{{ route('detail_about') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('detail_about') }}">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Bottom -->
</footer>