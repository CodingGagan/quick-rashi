 <!--header-section start-->

 <div class="container">
     <div class="row">
         <div class="col-12">
             <nav class="navbar navbar-expand-xl nav-shadow" id="#navbar">
                 <a class="navbar-brand" href="{{ route('/') }}"><img
                         src="{{ asset('assets/images/company/logo.png') }}" class="logo" alt="logo"></a>
                 <a class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                     aria-controls="offcanvasRight">
                     <i class="bi bi-list"></i>
                 </a>

                 <div class="collapse navbar-collapse ms-auto " id="navbar-content">
                     <div class="main-menu">
                         @if (!Auth::check())
                             <ul class="navbar-nav mb-lg-0 mx-auto">
                                 <li class="nav-item dropdown">
                                     <a class="nav-link" href="{{ route('/') }}" role="button"> Home </a>

                                 </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link" href="{{ route('about') }}" role="button"> About </a>

                                 </li>

                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle active" href="#" role="button"
                                         data-bs-toggle="dropdown" aria-expanded="false"> Services </a>
                                     <ul class="dropdown-menu">
                                         <li><a class="dropdown-item" href="{{ route('education') }}">Abroad Education
                                                 Loan</a></li>
                                         <li><a class="dropdown-item" href="{{ route('personal') }}">Personal Loan</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{ route('business') }}">Business Loan</a>
                                         </li>
                                         <li><a class="dropdown-item" href="{{ route('home_loan') }}">Home
                                                 Loan</a></li>
                                         <li><a class="dropdown-item" href="{{ route('loan_property') }}">Loan Against Property</a></li>
                                     </ul>
                                 </li>

                                 {{-- <li class="nav-item dropdown">
                                     <a class="nav-link" href="#" role="button"> Testimonials </a>

                                 </li> --}}
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                                 </li>
                             </ul>
                         @else
                             <ul class="navbar-nav mb-lg-0 mx-auto">
                                 <li class="nav-item">
                                     @if (isset($data['user_pending_loan']) && !$data['user_pending_loan'])
                                         <a class="nav-link" href="{{ route('user_dashboard') }}">Request new loan</a>
                                     @else
                                         <a class="nav-link" href="#" onclick="newLoanSwal()">Request new loan</a>
                                     @endif
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('user_loan_list') }}">See loan history</a>
                                 </li>
                             </ul>
                         @endif
                         <div class="nav-right d-none d-xl-block">
                             @if (!Auth::check())
                                 <div class="nav-right__search">

                                     <a href="{{ route('signin') }}" class="btn_theme btn_theme_active">Sign In <i
                                             class="bi bi-arrow-up-right"></i><span></span></a>
                                 </div>
                             @else
                                 <div class="nav-right__search">
                                     {{-- <button class="btn_theme_name"> {{ Auth::user()->firstname }} </button> --}}


                                     <a href="{{ route('user_dashboard') }}"
                                         class="btn_theme btn_theme_active">Dashboard <i
                                             class="bi bi-arrow-up-right"></i><span></span></a>
                                     <a href="{{ route('logout') }}" class="btn_theme btn_theme_active">Logout <i
                                             class="bi bi-arrow-up-right"></i><span></span></a>
                                 </div>
                             @endif
                             <div class="nav-right__search-inner">
                                 <div class="nav-search-inner__form">
                                     <form method="POST" id="search" class="inner__form">
                                         <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Search" required>
                                             <button type="submit" class="search_icon"><i
                                                     class="bi bi-search"></i></button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </nav>
         </div>
     </div>
 </div>
 <!-- Offcanvas More info-->
 <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
     <div class="offcanvas-body custom-nevbar">
         <div class="row">
             <div class="col-md-7 col-xl-8">
                 <div class="custom-nevbar__left">
                     <button type="button" class="close-icon d-md-none ms-auto" data-bs-dismiss="offcanvas"
                         aria-label="Close"><i class="bi bi-x"></i></button>
                     <ul class="custom-nevbar__nav mb-lg-0">
                         @if (Auth::check())
                             <li class="menu_item">
                                 <a class="menu_link" href="{{ route('user_dashboard') }}">Dashboard</a>
                             </li>
                             <li class="menu_item">
                                 @if (isset($data['user_pending_loan']) && !$data['user_pending_loan'])
                                     <a class="menu-link" href="{{ route('user_dashboard') }}">Request new loan</a>
                                 @else
                                     <a class="menu-link" href="#" onclick="newLoanSwal()">Request new loan</a>
                                 @endif
                             </li>
                             <li class="menu_item">
                                 <a class="menu_link" href="{{ route('user_loan_list') }}">Loan List</a>
                             </li>
                             <li class="menu_item">
                                 <a class="menu_link" href="{{ route('logout') }}">Logout</a>
                             </li>
                         @else
                             <li class="menu_item">
                                 <a class="menu_link" href="{{ route('/') }}"> Home </a>
                             </li>
                             <li class="menu_item">
                                 <a class="menu_link" href="{{ route('about') }}">About</a>
                             </li>
                             <li class="menu_item dropdown">
                                 <a class="menu_link dropdown-toggle" href="#" role="button"
                                     data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                                 <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="{{ route('education') }}">Abroad Education
                                             Loan</a></li>
                                     <li><a class="dropdown-item" href="{{ route('personal') }}">Personal Loan</a>
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('business') }}">Business Loan</a>
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('home_loan') }}">Home Loan</a>
                                     </li>
                                     <li><a class="dropdown-item" href="{{ route('loan_property') }}">Loan Against Property</a>
                                     </li>
                                 </ul>
                             </li>
                             <li class="menu_item">
                                 <a class="menu_link" href="{{ route('contact') }}">Contact us</a>
                             </li>
                             <li class="menu_item">
                                 <a class="menu_link" href="{{ route('signin') }}">Sign-in</a>
                             </li>
                         @endif
                     </ul>
                 </div>
             </div>
             <div class="col-md-5 col-xl-4">
                 <div class="custom-nevbar__right">
                     <div class="custom-nevbar__top d-none d-md-block">
                         <button type="button" class="close-icon ms-auto" data-bs-dismiss="offcanvas"
                             aria-label="Close"><i class="bi bi-x"></i></button>
                         <div class="custom-nevbar__right-thumb mb-auto">
                             <img src="{{ asset('assets/images/company/logo.png') }}" alt="logo">
                         </div>
                     </div>
                     <ul class="custom-nevbar__right-location">
                         <li>
                             <p class="mb-2">Phone: </p>
                             <a href="#" class="fs-4 contact"> +91 9871 773 053 </br> +91 8448 043 856</a>
                         </li>
                         <li class="location">
                             <p class="mb-2">Email: </p>
                             <a href="https://pixner.net/cdn-cgi/l/email-protection#e5ac8b838aa58288848c89cb868a88"
                                 class="fs-4 contact"><span class="__cf_email__"
                                     data-cfemail="efa6818980af88828e8683c18c8082">care@quickrashi.com</span></a>
                         </li>
                         <li class="location">
                             <p class="mb-2">Location: </p>
                             <p class="fs-4 contact">UG-60, Somdutt chamber-2, Bhikaji cama place, New Delhi - 110066
                             </p>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- header-section end -->
