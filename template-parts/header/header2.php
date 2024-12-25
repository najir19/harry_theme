<?php
$harry_header_email = get_theme_mod('harry_email', 'info@example.com');
$harry_header_phone = get_theme_mod('harry_phone', '+964 742 44 763');
$harry_header_timing = get_theme_mod('harry_timing', 'Sunday-Thures 10am-07pm');

?>

      <!-- header area start -->
      <header>
         <div class="header__area">
            <div class="header__bottom-9 header__sticky" id="header-sticky">
               <div class="container">
                  <div class="mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-4 col-sm-5 col-8">
                           <div class="logo">
                           <?php echo harry_logo() ?>;
                           </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                           <div class="main-menu main-menu-9 main-menu-ff-space">
                              <nav id="mobile-menu">
                              <?php harry_menu();?>
                              </nav>
                              <!-- for wp -->
                              <div class="header__hamburger ml-50 d-none">
                                 <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-sm-7 col-4">
                           <div class="header__bottom-right-8 d-flex justify-content-end align-items-center">
                              <div class="header__hamburger ml-50">
                                 <button type="button"  class="hamburger-btn-8 hamburger-btn-8-black offcanvas-open-btn">Menu</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__area-1">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__shape">
               <img class="offcanvas__shape-1" src="assets/img/shape/offcanvas-shape-1.png" alt="">
            </div>
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.html">
                        <img src="assets/img/logo/logo-black.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="mobile-menu fix d-lg-none"></div>
               <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
                  <nav>
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Service</a></li>
                        <li><a href="blog-grid-2.html">Blog</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="offcanvas__btn">
                  <a href="contact.html" class="tp-btn-offcanvas">Getting Started <i class="fa-regular fa-chevron-right"></i></a>
               </div>
               <div class="offcanvas__social">
                  <h3 class="offcanvas__social-title">Follow :</h3>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
               </div>
               <div class="offcanvas__contact">
                  <p class="offcanvas__contact-call"><a href="tel:+964-742-44-763">+964 742 44 763</a></p>
                  <p class="offcanvas__contact-mail"><a href="mailto:info@harry.com">info@harry.com</a></p>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <?php get_template_part('template-parts/header/side-info')?>