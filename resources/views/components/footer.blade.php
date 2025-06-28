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
                                <div class="footer-widget__contact-box">
                                    <ul>
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-pin"></span>
                                            </div>

                                            <div class="content-box">
                                                <p>Address</p>
                                                <h4>Sukojati, Blimbingsari, Banyuwangi</h4>
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
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget footer-widget__links">
                            <div class="title">
                                <h2>Quick Links</h2>
                            </div>

                            <div class="footer-widget__links-box">
                                <ul>
                                    <li><a href="{{ route('detail_about') }}">Mission & Vision</a></li>
                                    <li><a href="{{ route('detail_about') }}">Get Pricing Plan</a></li>
                                    <li><a href="{{ route('detail_about') }}">Meet The Team</a></li>
                                    <li><a href="{{ route('detail_about') }}">Our Clients</a></li>
                                    <li><a href="{{ route('detail_about') }}">Available Positions</a></li>
                                    <li><a href="{{ route('detail_about') }}">Job Application</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
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
                    </div>
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
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
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