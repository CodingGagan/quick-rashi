@extends('layout.default')
@section('content')
    <!-- Banner Start -->
    <section class="banner">
        <div class="container">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Education</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                {{-- <li class="breadcrumb-item">pages</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Abroad Education Loan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner__thumb text-end">
                        <img src="assets/images/about_banner.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="container">
        <div class="row gy-5 gy-lg-0 justify-content-between align-items-center section">
            <div class="col-12 col-md-8 col-lg-5 mx-auto mx-lg-0 order-1 order-lg-0">
                <div class="choose-us__thumb unset-xxl-left me-xl-4 me-xxl-0 wow fadeInDown" data-wow-duration="0.8s"
                    style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                    <img src="assets/images/educationAbroad.png" alt="images">
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xxl-6">
                <div class="section__content ms-lg-4 ms-xl-0">
                    <p class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;"><img
                            src="assets/images/title_vector.png" alt="vector">Abroad Education Loan</p>
                    <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Interest rates between 11% - 15% (T & C applied)</h2>
                    <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                    
                        <a href="https://quickkloans.com/">Quick Rashi</a>
                        for studying or investing abroad have become increasingly popular among
                        incividuals. seeking financial support for their aspirations. Abroad Icans, often
                        facilitated by financial institutions or specialized lenders, offer a convenient
                        sclution for those Icoking to pursue education, business opportunities orpersonal
                        development in foreign countries The appeal of Quick Rashi lies in their swift approval
                        processes, enabling applicants to access funds promptly, minimizing the bureaucratic
                        hurdles associated with traditional loan applications. These Icans cater to the urgency
                        and immediacy that individuals often encounter when planning to study or invest
                        overseas. As a result, Quick Rashi have emerged as a practical and efficient means to
                        bridge the financial gap and turn dreams of international education or business ventures
                        into reality. However, it is essential for borrowers to carefully consider terms,
                        interest rates, and repayment plans to ensure a well-informed financ al decision that
                        aligns with their long-term goals.
                    </p>
                    {{-- 
                    <a href="service-details.html" class="btn_theme btn_theme_active mt_40 wow fadeInDown"
                        data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">Read More <i
                            class="bi bi-arrow-up-right"></i><span></span></a> --}}
                </div>
            </div>
        </div>
    </div>


@endsection
