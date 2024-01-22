@extends('layout.default')
@section('content')
    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/contact_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- contact start -->
    <section class="sign-up contact section">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-12 col-xxl-12">
                    <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form wow fadeInDown"
                        data-wow-duration="0.8s">
                        <h3 class="contact__title wow fadeInDown" data-wow-duration="0.8s">Get in touch with us.</h3>
                        <div class="sign-up__form-part">
                            <div class="input-group">
                                <div class="input-single">
                                    <label class="label" for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Your Name..." required>
                                </div>
                                <div class="input-single">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Enter Your Email..." required>
                                </div>
                            </div>

                            <div class="input-single">
                                <label class="label" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="8" placeholder="Enter Your Message..."
                                    required></textarea>
                            </div>
                        </div>
                        <span id="msg"></span>
                        <button type="submit" class="btn_theme btn_theme_active mt_40 " name="submit" id="submit">Send
                            Message <i class="bi bi-arrow-up-right"></i><span></span></button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- Footer Area Start -->
    <footer class="footer">
        <div class="container">
            <div class="row section gy-5 gy-xl-0">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="about-company wow fadeInLeft" data-wow-duration="0.8s">
                        <div class="footer__logo mb-4">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <p>Welcome to Finview, your trusted resource for financial loan reviews and comparisons. Our
                            dedicated team of experts analyzes</p>
                        <div class="social mt_32">
                            <a href="#" class="btn_theme social_box"><i class="bi bi-facebook"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-twitter"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-pinterest"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-twitch"></i><span></span></a>
                            <a href="#" class="btn_theme social_box"><i class="bi bi-skype"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer__contact ms-sm-4 ms-xl-0 wow fadeInUp" data-wow-duration="0.8s">
                        <h4 class="footer__title mb-4">Contact</h4>
                        <div class="footer__content">
                            <a href="tel:+1-234-567-891"> <span class="btn_theme social_box"> <i
                                        class="bi bi-telephone-plus"></i> </span> +1 234 567 891 <span></span> </a>
                            <a href="https://pixner.net/cdn-cgi/l/email-protection#1e777078715e7b667f736e727b307d7173">
                                <span class="btn_theme social_box"> <i class="bi bi-envelope-open"></i> </span> <span
                                    class="__cf_email__"
                                    data-cfemail="e980878f86a98c91888499858cc78a8684">[email&#160;protected]</span>
                                <span></span> </a>
                            <a href="#"> <span class="btn_theme social_box"> <i class="bi bi-geo-alt"></i> </span>
                                31 Brandy Way, Sutton, SM2 6SE <span></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="newsletter wow fadeInDown" data-wow-duration="0.8s">
                        <h4 class="footer__title mb-4">Newsletter</h4>
                        <p class="mb_32">Subscribe our newsletter to get our latest update & news</p>
                        <form method="POST" autocomplete="off" id="frmSubscribe" class="newsletter__content-form">
                            <div class="input-group">
                                <input type="email" class="form-control" id="sMail" name="sMail"
                                    placeholder="Email Address" required>
                                <button type="submit" class="emailSubscribe btn_theme btn_theme_active"
                                    name="emailSubscribe" id="emailSubscribe"><i class="bi bi-cursor"></i>
                                    <span></span></button>
                            </div>
                            <span id="subscribeMsg"></span>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="quick-link ms-sm-4 ms-xl-0 wow fadeInRight" data-wow-duration="0.8s">
                        <h4 class="footer__title mb-4">Quick Link</h4>
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="loan-reviews.html">Loan Reviews</a></li>
                            <li><a href="loan-comparison.html">Loan Comparison</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright">
                        <p class="copyright text-center">Copyright © <span id="copyYear"></span> <a href="#"
                                class="secondary_color">FINVIEW</a>. Designed By <a href="#"
                                class="secondary_color">Pixelaxis</a></p>
                        <ul class="footer__copyright-conditions">
                            <li><a href="contact.html">Help & Support</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>

@endsection
