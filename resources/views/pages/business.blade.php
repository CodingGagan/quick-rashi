@extends('layout.default')
@section('content')
    <section class="banner">
        <!-- Banner Start -->
        <div class="container ">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">Business</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                {{-- <li class="breadcrumb-item">pages</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">Business</li>
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
            <div class="col-12 col-md-8 col-lg-6 mx-auto mx-lg-0 order-1 order-lg-0">
                <div class="choose-us__thumb unset-xxl-left me-xl-4 me-xxl-0 wow fadeInDown text-center" data-wow-duration="0.8s"
                    style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                    <img src="assets/images/businessloan.png" alt="images">
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xxl-6">
                <div class="section__content ms-lg-4 ms-xl-0">
                    <p class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;"><img
                            src="assets/images/title_vector.png" alt="vector">Business Loan</p>
                    <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Interest rates between 10.5% - 22.5% (T & C applied)</h2>
                    <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                        A business loan is a financial tool that enables entrepreneurs and companies to
                        obtain capital to start, operate, or expand their ventures. These loans are
                        typically acquired from banks, credit unions, or alternative lenders and are crucial
                        for businesses to cover various expenses such as inventory purchases,
                        equipment upgrades, marketing campaigns, or hiring additional staff. Business
                        loans come in various forms, including term loans, lines of credit, and SBA loans,
                        each with its own terms, interest rates, and repayment schedules. For
                        businesses, securing the right loan can provide the necessary funds to fuel
                        growth and achieve long-term success, while also helping to establish
                        creditworthiness and financial stability. However, it's essential for borrowers to
                        carefully consider their needs, financial capabilities, and the terms of the loan to
                        ensure it aligns with their business goals and doesn't become a burden on their
                        operations.
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
    <!-- service-details end -->
@endsection
