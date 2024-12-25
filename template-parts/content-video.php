<?php
$format_gallery = function_exists('get_field') ? get_field('URL-of-Your-Video') : null;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-video postbox__item format-video mb-50 transition-3'); ?>>
    <?php if (has_post_thumbnail()): ?>
        <div class="postbox__thumb postbox__video w-img p-relative">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
            <?php if (!empty($format_url)): ?>
                <a href="<?php echo esc_url($format_url); ?>" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="postbox__content">
        <!-- blog meta -->
        <?php get_template_part('template-parts/blog/post-meta'); ?>
        <h3 class="postbox__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="postbox__text">
            <?php the_excerpt(); ?>
        </div>
        <div class="postbox__read-more">
            <a href="<?php the_permalink(); ?>" class="tp-btn"><?php echo esc_html("read more") ?></a>
        </div>
    </div>
</article>