<?php
$format_gallery = function_exists('get_field') ? get_field('post_gallery_format') : null;
?>
<?php if (is_single()): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-gallery'); ?>>
        <?php if (!empty($format_gallery)): ?>
            <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
                <div class="swiper-wrapper">
                    <?php foreach ($format_gallery as $gallery_item_img): ?>
                        <div class="postbox__slider-item swiper-slide">
                            <img src="<?php echo esc_url($gallery_item_img["url"]); ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class=" postbox__nav">
                    <button class="postbox-slider-button-next"><i class="fa-regular fa-angle-right"></i></button>
                    <button class="postbox-slider-button-prev"><i class="fa-regular fa-angle-left"></i></button>
                </div>
            </div>
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

    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-gallery postbox__item format-gallery mb-50 transition-3'); ?>>
        <?php if (!empty($format_gallery)): ?>
            <div class="postbox__thumb postbox__slider swiper-container w-img p-relative">
                <div class="swiper-wrapper">
                    <?php foreach ($format_gallery as $gallery_item_img): ?>
                        <div class="postbox__slider-item swiper-slide">
                            <img src="<?php echo esc_url($gallery_item_img["url"]); ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class=" postbox__nav">
                    <button class="postbox-slider-button-next"><i class="fa-regular fa-angle-right"></i></button>
                    <button class="postbox-slider-button-prev"><i class="fa-regular fa-angle-left"></i></button>
                </div>
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
<?php endif ?>