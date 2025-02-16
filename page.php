<?php

get_header();
$post_col = is_active_sidebar('blog-sidebar') ? 'col-xxl-8 col-lg-8' : 'col-xxl-12 col-lg-12';
?>


<!-- postbox area start -->
<section class="page postbox__area grey-bg-4 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="<?php echo esc_attr($post_col); ?>">
                <div class="postbox__wrapper">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <?php echo get_template_part('template-parts/content', 'page'); ?>
                        <?php endwhile ?>
                    <?php else: ?>
                        <?php echo get_template_part('template-parts/content-none'); ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();

?>