    <?php
      $harry_footer_Copyright = get_theme_mod('harry_footer_copyright', 'harry');

      ?>
    <!-- footer area start -->
    <footer>
       <div class="footer__area" data-bg-color="footer-bg">
          <?php if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4')): ?>
             <div class="footer__top">
                <div class="container">
                   <div class="row">
                      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                         <?php

                           if (dynamic_sidebar('footer-1')) {;
                           }

                           ?>
                      </div>
                      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                         <?php

                           if (dynamic_sidebar('footer-2')) {;
                           }

                           ?>
                      </div>
                      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                         <?php

                           if (dynamic_sidebar('footer-3')) {;
                           }

                           ?>
                      </div>
                      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                         <?php

                           if (dynamic_sidebar('footer-4')) {;
                           }

                           ?>
                      </div>
                   </div>
                </div>
             </div>
          <?php endif; ?>
          <div class="footer__bottom">
             <div class="container">
                <div class="footer__bottom-inner">
                   <div class="row">
                      <div class="col-sm-6">
                         <div class="footer__copyright">
                            <p><?php echo $harry_footer_Copyright; ?></p>
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="footer__link text-sm-end">
                            <?php echo harry_footer_menu(); ?>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </footer>
    <!-- footer area end -->