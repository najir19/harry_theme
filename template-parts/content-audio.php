<?php
$format_gallery = function_exists('get_field') ? get_field('blog_post_audio_f') : null;


?>
<?php if (is_single()): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-audio'); ?>>
        <?php if (has_post_thumbnail()): ?>
            <?php if (!empty($format_audio)): ?>
                <div class="postbox__thumb postbox__audio w-img p-relative">
                    <?php echo wp_oembed_get($format_audio); ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php get_template_part('template-parts/blog/post-meta'); ?>
        <div class="postbox__details-content-wrapper mb-50">
            <?php the_content() ?>
        </div>
        <div class="postbox__share-wrapper mb-60">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="tagcloud tagcloud-sm">
                        <span><?php echo esc_html("Tags:", "harry") ?></span>
                        <?php harry_tags(); ?>
                    </div>


                </div>
                <div class="col-xl-5">
                    <div class="postbox__share text-xl-end">
                        <span><?php echo esc_html("Share On:", "harry") ?></span>
                        <?php harry_social_share(); ?>
                    </div>
                </div>
            </div>
        </div>
    </article>

<?php else : ?>

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
<?php endif ?>