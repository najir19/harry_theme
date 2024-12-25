<?php

// harry js css enqueue
function harry_enqueue_theme_scripts() {
    // CSS calling
    wp_enqueue_style('harry-fonts', harry_fonts_url(), array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0.0', 'all');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all');
    wp_enqueue_style('hover-reveal', get_template_directory_uri() . '/assets/css/hover-reveal.css', array(), '1.0.0', 'all');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('nouislider', get_template_directory_uri() . '/assets/css/nouislider.css', array(), '1.0.0', 'all');
    wp_enqueue_style('backtotop', get_template_directory_uri() . '/assets/css/backtotop.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '1.0.0', 'all');
    wp_enqueue_style('elegant-icon', get_template_directory_uri() . '/assets/css/elegant-icon.css', array(), '1.0.0', 'all');
    wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0', 'all');
    wp_enqueue_style('harry-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    // JavaScript
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array(), '1.0.0', true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), '1.0.0', true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), '1.0.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0.0', true);
    wp_enqueue_script('nouislider', get_template_directory_uri() . '/assets/js/nouislider.js', array(), '1.0.0', true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), '1.0.0', true);
    wp_enqueue_script('backtotop', get_template_directory_uri() . '/assets/js/backtotop.js', array(), '1.0.0', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array(), '1.0.0', true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array(), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), '1.0.0', true);
    wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array('imagesloaded'), '1.0.0', true);
    wp_enqueue_script('charming', get_template_directory_uri() . '/assets/js/charming.js', array(), '1.0.0', true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), '1.0.0', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.js', array(), '1.0.0', true);
    wp_enqueue_script('hover-reveal', get_template_directory_uri() . '/assets/js/hover-reveal.js', array(), '1.0.0', true);
    wp_enqueue_script('jarallax', get_template_directory_uri() . '/assets/js/jarallax.js', array(), '1.0.0', true);
    wp_enqueue_script('tween-max', get_template_directory_uri() . '/assets/js/tween-max.js', array(), '1.0.0', true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), '1.0.0', true);
    wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array(), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array(), '1.0.0', true);
    wp_enqueue_script('harry-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

}

add_action('wp_enqueue_scripts', 'harry_enqueue_theme_scripts');

/*
Register Fonts
 */
function harry_fonts_url() {
    $font_url = '';

/*
Translators: If there are characters in your language that are not supported
by chosen font(s), translate this to 'off'. Do not translate into your own language.
 */
    if ('off' !== _x('on', 'Google font: on or off', 'harry')) {
        $font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&family=Space+Grotesk:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap');
    }

    return $font_url;
}
