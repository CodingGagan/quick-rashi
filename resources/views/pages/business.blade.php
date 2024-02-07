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
                    
                        A businessloan is a financial tool that provides entrepreneurs with the necessary capital to start, expard, orsustain their business operations. In the dynamic world of business, the need for quickk access to funds is often critical, and this is where quickk loans come into play. Quickkloans for businesses, also knownas quickk busness oans, offer a swift and streamlined application process, enabling entrepreneurs to secure the funds they need in a timely manner. These loans are designed to provide fast aporcva and disbursement, allowing business owners to seize opportunities, address urgent financial needs, or navigate unforeseen challenges with agility. Quickk loans are typically characterized by minimal documentation requirements and a straightforward approval process, making them an attractive option for those who require rapid access to capital Whether a business is looking to invest in new equipment, manage cash flow fluctuations, or capitalize on growth opportunities, quickk loans provide a valuable financial solution to support entrepreneurial endeavorsin today&#039;s fast-paced business landscape.
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
