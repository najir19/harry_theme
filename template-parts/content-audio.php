<?php
$format_gallery = function_exists('get_field') ? get_field('blog_post_audio_f') : null;


?>


<article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-audio postbox__item format-audio mb-50 transition-3'); ?>>
    <?php if (has_post_thumbnail()): ?>
        <?php if (!empty($format_audio)): ?>
            <div class="postbox__thumb postbox__audio w-img p-relative">
                <?php echo wp_oembed_get($format_audio); ?>
            </div>
        <?php endif; ?>
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