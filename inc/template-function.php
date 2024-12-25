<?php
function harry_header()
{
    $harry_header_deafult = get_theme_mod('harry_deafault_header_select_setting', 'header-style-1');

    if ($harry_header_deafult == 'header-style-1') {
        get_template_part('template-parts/header/header1');
    } elseif ($harry_header_deafult == 'header-style-2') {
        get_template_part('template-parts/header/header2');
    } elseif ($harry_header_deafult == 'header-style-3') {
        get_template_part('template-parts/header/header3');
    } elseif ($harry_header_deafult == 'header-style-4') {
        get_template_part('template-parts/header/header4');
    } elseif ($harry_header_deafult == 'header-style-5') {
        get_template_part('template-parts/header/header5');
    }
}

// harry footer
function harry_footer()
{
    get_template_part('template-parts/footer/footer1');
}

// harry main logo
function harry_logo()
{
    $harry_header_logo = get_theme_mod('harry_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_header_logo); ?>" alt="<?php echo esc_attr__('logo', 'harry') ?>">
    </a>
<?php
}

// harry search logo
function harry_search_logo()
{
    $harry_search_logo = get_theme_mod('harry_search_logo', get_template_directory_uri() . '/assets/img/logo/logo.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_search_logo); ?>" alt="<?php echo esc_attr__('logo', 'harry') ?>">
    </a>
<?php
}

// harry sidebar logo
function harry_sidebar_logo()
{
    $harry_sidebar_logo = get_theme_mod('harry_sidebar_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_sidebar_logo); ?>" alt="<?php echo esc_attr__('logo', 'harry') ?>">
    </a>
<?php
}

// harry Main menu
function harry_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_class' => 'main-menu-class',
            'menu_id' => 'main-menu-id',
            'fallback_cb' => 'Harry_walker_Nav_Menu::fallback',
            'walker' => new Harry_Walker_Nav_Menu,
        )
    );
}

// harry side info menu
function harry_side_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'sidebar-menu',
            'menu_class' => 'sidebar-menu',
            'menu_id' => 'sidebar-menu',
            'fallback_cb' => 'Harry_walker_Nav_Menu::fallback',
            'walker' => new Harry_Walker_Nav_Menu,
        )
    );
}
// harry footer menu
function harry_footer_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => 'Harry_walker_Nav_Menu::fallback',
            'walker' => new Harry_Walker_Nav_Menu,
        )
    );
}

// harry social section
function harry_social()
{
    $harry_facebook = get_theme_mod('harry_facebook', __('#', 'harry'));
    $harry_twitter = get_theme_mod('harry_twitter', __('#', 'harry'));
    $harry_youtube = get_theme_mod('harry_youtube', __('#', 'harry'));
    $harry_linkedin = get_theme_mod('harry_linkedin', __('#', 'harry'));
?>
    <?php

    if (!empty($harry_facebook)): ?>
        <a href="<?php echo esc_url($harry_facebook) ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>
    <?php

    if (!empty($harry_twitter)): ?>
        <a href="<?php echo esc_url($harry_twitter) ?>"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>
    <?php

    if (!empty($harry_youtube)): ?>
        <a href="<?php echo esc_url($harry_youtube) ?>"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>
    <?php

    if (!empty($harry_linkedin)): ?>
        <a href="<?php echo esc_url($harry_linkedin) ?>"><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>

    <?php
}


// harry_blog_navigation 
function harry_navigation()
{
    $pages = paginate_links(array(
        'type' => 'array',
        'prev_text'    => __('<svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M14.3767 5.55249L1.75421 5.55249" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
     </svg>                                       
     Prev'),
        'next_text'    => __('Next
        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9.82422 1L14.3767 5.5525L9.82422 10.105" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
           <path d="M1.625 5.55249H14.2475" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> '),
    ));
    if ($pages) {
        echo '<nav><ul>';
        foreach ($pages as $page) {
            echo "<li>$page</li>";
        }
        echo '</ul></nav>';
    }
}

function harry_tags()
{
    // Get the tags for the current post
    $post_tags = get_the_tags();

    if ($post_tags) : // If tags exist, loop through them
        foreach ($post_tags as $tag) : ?>
            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                <?php echo esc_html($tag->name); ?>
            </a>
        <?php
        endforeach;
    else : // If no tags are found
        ?>
        <span>No Tags Found</span>
    <?php
    endif; // End if
}


function harry_social_share()
{
    // Get the current post's URL and title
    $post_url   = urlencode(get_permalink());
    $post_title = urlencode(get_the_title());
    ?>
    <!-- LinkedIn Share -->
    <a href="https://www.linkedin.com/shareArticle?/?url=<?php echo $post_url; ?>"
        target="_blank">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>

    <!-- Twitter Share -->
    <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>"
        target="_blank" rel="noopener noreferrer">
        <i class="fab fa-twitter"></i>
    </a>

    <!-- Facebook Share -->
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>"
        target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook-f"></i>
    </a>
<?php
}
