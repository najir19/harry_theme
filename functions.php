<?php

/**
 * Essential harry theme supports
 * */
function harry_theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    // MENU REGISTER
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'harry'),
            'sidebar-menu' => __('Sidebar Menu', 'harry'),
            'footer-menu' => __('Footer Menu', 'harry'),
        )
    );
    remove_theme_support('widgets-block-editor');
}

add_action('after_setup_theme', 'harry_theme_setup');

function harry_widgets()
{
    register_sidebar(array(
        'name' => __('Footer One', 'harry'),
        'id' => 'footer-1',
        'description' => __('Widgets in this area will be shown on Footer', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Two', 'harry'),
        'id' => 'footer-2',
        'description' => __('Widgets in this area will be shown on Footer', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Three', 'harry'),
        'id' => 'footer-3',
        'description' => __('Widgets in this area will be shown on Footer', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Four', 'harry'),
        'id' => 'footer-4',
        'description' => __('Widgets in this area will be shown on Footer', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'harry_widgets');

// nessary files
function harry_preloader()
{
    get_template_part('template-parts/header/preloader');
}

// call enque
include_once 'inc/common/scripts.php';

// CALL PLUGIN
if (class_exists('Kirki')) {
    include_once 'inc/harry-kirki.php';
}



include_once 'inc/template-function.php';
include_once 'inc/breadcrumb.php';
include_once 'inc/nav-walker.php';
