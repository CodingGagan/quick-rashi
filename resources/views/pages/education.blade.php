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
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Empower Your Global Education Journey: Abroad Education Loan with Interest Rates 9.5% - 13% (T&C Apply)</h2>
                    <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">

                        <strong> Embark on a Global Academic Adventure with Abroad Study Loans!</strong>
                        <br />
                        Imagine immersing yourself in vibrant cultures, gaining new perspectives, and seizing exciting
                        opportunities—all while pursuing your academic dreams abroad. Sounds incredible, right? Well, it is!
                        However, the road to studying abroad isn't always smooth, especially when it comes to financing.
                        <br />

                        Enter abroad study loans—a lifeline for students yearning to explore the world of international
                        education. These loans aren't just about covering tuition fees; they're about empowering students to
                        embrace life-changing experiences without financial worries holding them back.
                        <br />

                        Picture this: With an abroad study loan, you can fund not only your tuition but also your living
                        expenses and other essential costs. It's more than just financial assistance; it's the key to
                        unlocking a world of possibilities and turning your academic dreams into reality.
                        <br />

                        But it doesn't stop there. Abroad study loans aren't just about individual success; they're
                        investments in global talent. By supporting students in their quest for international education,
                        these loans contribute to building a diverse and skilled workforce, enriching communities worldwide.
                        <br />

                        Think of abroad study loans as more than just financial aid; they're catalysts for personal and
                        academic growth. They enable students to broaden their horizons, expand their skill sets, and forge
                        lifelong connections across borders.
                        <br />

                        So, if you're ready to embark on a transformative journey of discovery and self-improvement,
                        consider the power of abroad study loans. With them, you're not just investing in your education;
                        you're investing in a brighter, more globally connected future for yourself and generations to come.
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
