@extends('layout.default')
@section('content')
    <!-- header-section end -->

    <!-- Banner Start -->
    <section class="banner">
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Sign In</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign In</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/signin_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- sign-up start -->
    <section class="sign-up section">
        <div class="container">
            <div class="row gy-5 gy-xl-0 justify-content-center justify-content-lg-between align-items-center">
                @if (Session::has('danger'))
                    <p class="alert alert-danger">{{ Session::get('danger') }}</p>
                @endif
                <div class="col-12 col-lg-7 col-xxl-6">
                    <form method="POST" autocomplete="off" id="frmContactus" class="sign-up__form me-lg-4 me-xxl-0">
                        <h3 class="sign-up__title">Welcome Back!</h3>
                        <p class="sign-up__sub-title mb_40">Sign in to your account and join us</p>
                        <div class="sign-up__form-part">
                            <div class="input-single">
                                <label class="label" for="email">Enter Your Email ID</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Enter Your Email..." required>
                            </div>
                        </div>
                        <div class="otp_verify_section mt-3 d-none">
                            <div class="input-single">
                                <label class="label" for="email">Enter OTP</label>
                                <input type="text" class="form-control" name="otp" id="otp"
                                    placeholder="Enter Your OTP" required>
                                <button type="button" class="btn_theme mt_32" name="submit" id="otp_verify">Verify OTP<i
                                        class="bi bi-arrow-up-right"></i><span></span></button>
                                <p class=" _rn_form_reverse-time">
                                    Resend OTP in <reverseTime>00:00</reverseTime>
                                    <a href="#!" class="js--resend_otp text-muted" title="Resend OTP">
                                        Resend OTP
                                    </a>

                                </p>
                            </div>
                        </div>
                        <span id="msg"></span>
                        <button type="button" class="btn_theme mt_32" name="submit" id="signin_button">Sign In<i
                                class="bi bi-arrow-up-right"></i><span></span></button>
                        <p class="have_account mt-3">Do you have an account? <a href="{{ route('signup') }}"
                                class="signin">Signup</a>
                        </p>
                    </form>
                </div>
                <div class="col-12 col-sm-7 col-lg-5 col-xxl-5">
                    <div class="sign-up__thumb previewShapeY unset-xxl">
                        <img src="assets/images/sign_up.png" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign-up end -->



@endsection
