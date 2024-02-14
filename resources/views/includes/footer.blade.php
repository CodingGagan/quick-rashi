   <!-- Footer Area Start -->

   <div class="container">
       <div class="row section gy-5 gy-xl-0">
           <div class="col-12 col-sm-6 col-xl-3">
               <div class="about-company wow fadeInLeft" data-wow-duration="0.8s">
                   <div class="footer__logo mb-4">
                       <a href="{{ route('/') }}">
                           <img src="{{ asset('assets/images/company/logo.png') }}" alt="Logo">
                       </a>
                   </div>
                   <p>Welcome to Quick Rashi, your trusted resource for financial loan reviews and comparisons. Our
                       dedicated team of experts analyzes</p>
                   <div class="social mt_32">
                       {{-- <a href="#" class="btn_theme social_box"><i class="bi bi-facebook"></i><span></span></a>
                       <a href="#" class="btn_theme social_box"><i class="bi bi-twitter"></i><span></span></a>
                       <a href="#" class="btn_theme social_box"><i class="bi bi-pinterest"></i><span></span></a>
                       <a href="#" class="btn_theme social_box"><i class="bi bi-twitch"></i><span></span></a>
                       <a href="#" class="btn_theme social_box"><i class="bi bi-skype"></i><span></span></a> --}}
                   </div>
               </div>
           </div>
           <div class="col-12 col-sm-6 col-xl-3">
               <div class="footer__contact ms-sm-4 ms-xl-0 wow fadeInUp" data-wow-duration="0.8s">
                   <h4 class="footer__title mb-4">Contact</h4>
                   <div class="footer__content">
                       <a href="tel:+1-234-567-891"> <span class="btn_theme social_box"> <i
                                   class="bi bi-telephone-plus"></i> </span> +91 9871 773 053 </br> +91 8448 043 856  <span></span> </a>
                       <a href="https://pixner.net/cdn-cgi/l/email-protection#ec85828a83ac89948d819c8089c28f8381">
                           <span class="btn_theme social_box"> <i class="bi bi-envelope-open"></i> </span> <span
                               class="__cf_email__"
                               data-cfemail="c2abaca4ad82a7baa3afb2aea7eca1adaf">care@quickrashi.com</span>
                           <span></span> </a>
                           <a target="_blank" href="https://api.whatsapp.com/send/?phone=9871773053&text=Hi+there%21+Need+a+loan.+Let%27s+talk+on+WhatsApp+and+make+it+easy.&type=phone_number&app_absent=0">
                            <span class="btn_theme social_box"> <svg class="what-app" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="WhatsAppIcon"><path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path></svg> </span> <span
                                class="__cf_email__"
                                data-cfemail="c2abaca4ad82a7baa3afb2aea7eca1adaf">WhatsApp</span>
                            <span></span> </a>
                       <a href="#"> <span class="btn_theme social_box"> <i class="bi bi-geo-alt"></i>
                           </span> UG-60, Somdutt chamber-2, Bhikaji cama place, New Delhi - 110066 <span></span> </a>
                   </div>
               </div>
           </div>
           <div class="col-12 col-sm-6 col-xl-3">
               {{-- <div class="newsletter wow fadeInDown" data-wow-duration="0.8s">
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
               </div> --}}
           </div>
           <div class="col-12 col-sm-6 col-xl-3">
               <div class="quick-link ms-sm-4 ms-xl-0 wow fadeInRight" data-wow-duration="0.8s">
                   <h4 class="footer__title mb-4">Quick Link</h4>
                   <ul>
                       <li><a href="{{ route('about') }}">About us</a></li>
                       <li><a href="{{ route('personal') }}">Personal Loan</a></li>
                       <li><a href="{{ route('education') }}">Abroad Education Loan</a></li>
                       <li><a href="{{ route('business') }}">Business Loan</a></li>
                       {{-- <li><a href="faq.html"></a></li> --}}
                       {{-- <li><a href="blog.html">Blog</a></li> --}}
                   </ul>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-12">
               <div class="footer__copyright">
                   <p class="copyright text-center">Copyright © <span id="copyYear"></span> <a href="#"
                           class="secondary_color">Quick Rashi</a>. Designed By <a href="#"
                           class="secondary_color">Straw Hat</a></p>
                   <ul class="footer__copyright-conditions">
                       {{-- <li><a href="contact.html">Help & Support</a></li>
                       <li><a href="#">Privacy policy</a></li>
                       <li><a href="#">Terms & Conditions</a></li> --}}
                   </ul>
               </div>
           </div>
       </div>
   </div>

   <!-- Footer Area End -->
