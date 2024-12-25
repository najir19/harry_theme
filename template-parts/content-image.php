<article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-image postbox__item format-image mb-50 transition-3'); ?>>
    <?php if (has_post_thumbnail()): ?>
        <div class="postbox__thumb w-img">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
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