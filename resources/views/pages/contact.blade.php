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
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
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
                    <form method="POST" autocomplete="off" action="{{ route('submit_contact') }}" id="formContactus"
                        class="sign-up__form wow fadeInDown" data-wow-duration="0.8s">
                        @csrf
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
    <div class="mt-2 mb-2" >
        <iframe width="100%" height="250" id="gmap_canvas" rel="preconnect"
            src="https://maps.google.com/maps?q=UG+60%2C+Somdutt+chamber%2C+Bhikaji+Cama+place%2C+new+delhi+-+110066&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
            frameborder="0" scrolling="no" title="Quickk Loans, Fast Loans, Education Loan, Education Loan in India, Abroad"
            loading="lazy"></iframe>
    </div>
@endsection
