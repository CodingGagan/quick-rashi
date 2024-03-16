@extends('layout.default')

@section('content')
    <!-- Banner Start -->
    <section class="banner">
        <div class="container">
            <div class="row gy-4 gy-sm-0 align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="banner__content">
                        <h1 class="banner__title display-4 wow fadeInLeft" data-wow-duration="0.8s">about us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb wow fadeInRight" data-wow-duration="0.8s">
                                <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                                {{-- <li class="breadcrumb-item">pages</li> --}}
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
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
                    <img src="assets/images/choose_us.png" alt="images">
                </div>
            </div>
            <div class="col-12 col-lg-7 col-xxl-6">
                <div class="section__content ms-lg-4 ms-xl-0">
                    <p class="section__content-sub-title headingFour wow fadeInDown" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;"><img
                            src="assets/images/title_vector.png" alt="vector"> Why Choose Us</p>
                    <h2 class="section__content-title wow fadeInUp" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInUp;">Discover Quick Rashi: Your Trusted Loan Partner - Learn More About Us!</h2>
                    <p class="section__content-text wow fadeInDown" data-wow-duration="0.8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeInDown;">
                        Welcome to Quick Rashi, your trusted destination for seamless loan solutions! Our dedicated team is committed to delivering top-notch financial services tailored to meet your needs. We prioritize customer satisfaction and strive to secure the best rates for you. Whether it's a Personal Loan, Abroad Loan, Domestic Loan, or Business Loan you require, Quick Rashi is here to provide personalized assistance every step of the way.
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
    <!-- service-details start -->
    <section class="service-details section">
        <div class="container ">
            <div class="row gy-4 gy-lg-0">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="card--secondary__content">
                        <div class="card--secondary__content-part wow fadeInUp" data-wow-duration="0.8s">
                            <h2>About us</h2>
                            <p style="margin-bottom: 10px">Quick Rashi, a trusted loan service provider, is dedicated to offering seamless and efficient financial solutions to its valued customers. With a keen emphasis on customer satisfaction, we prioritize delivering personalized services while negotiating competitive rates tailored to your needs. Whether you're seeking a Personal Loan, Abroad Loan, Domestic Loan, or Business Loan, Quick Rashi is your go-to partner for fulfilling your specific financial requirements.</p><br/>

                            <p style="margin-bottom: 10px">Our commitment to hassle-free experiences distinguishes Quick Rashi from other lenders. Recognizing the challenges often associated with loan applications, we've streamlined our procedures to minimize paperwork and waiting times, ensuring a smooth and convenient borrowing journey.</p><br/>
                            
                            <p style="margin-bottom: 10px">Understanding the importance of competitive interest rates, we actively negotiate with our lending partners to secure the most favorable terms for you. Our goal is to provide loans at competitive interest rates, empowering individuals and businesses to make financially prudent decisions without undue burden.</p><br/>
                            
                            <p style="margin-bottom: 10px">For those aspiring to pursue education or ventures abroad, our Abroad Loans offer essential financial support. Quick Rashi strives to turn your international aspirations into reality by providing competitive interest rates, removing financial barriers, and facilitating your overseas endeavors.</p><br/>
                            
                            <p style="margin-bottom: 10px">Within our domestic market, Quick Rashi stands ready to assist individuals with various financial needs. Whether it's medical expenses, debt consolidation, or wedding arrangements, our Domestic Loans come with flexible repayment options and competitive interest rates, ensuring your financial well-being.</p><br/>
                            
                            <p style="margin-bottom: 10px">Personal Loans form another cornerstone of our services, catering to diverse personal needs such as medical emergencies, home renovations, or education expenses. With flexible repayment plans and competitive interest rates, Quick Rashi ensures accessibility and manageability in personal financing.</p><br/>
                            
                            <p style="margin-bottom: 10px">Moreover, we specialize in Business Loans, recognizing the importance of financial support for business growth and sustainability. Whether it's expansion plans or inventory management, Quick Rashi offers tailored Business Loan solutions with attractive interest rates, designed to support entrepreneurs in achieving their goals.</p><br/>
                            
                            <p style="margin-bottom: 10px">At Quick Rashi, we prioritize customer satisfaction and foster long-term relationships with our clients. Our dedicated team provides personalized assistance throughout the loan process, ensuring transparent communication and addressing any queries or concerns promptly.</p><br/>
                            
                            <p style="margin-bottom: 10px">In conclusion, Quick Rashi is your trusted partner for hassle-free borrowing experiences and competitive rates. With a wide range of loan options and a commitment to streamlined processes, we cater to the diverse financial needs of individuals and businesses alike. Choose Quick Rashi for a convenient, reliable, and rewarding financial journey.</p>
                            
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
