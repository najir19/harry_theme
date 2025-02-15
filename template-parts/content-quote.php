<?php if (is_single()): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-quote'); ?>>
        <?php if (has_post_thumbnail()): ?>
            <div class="postbox__thumb w-img mb-30">
                <?php the_post_thumbnail(); ?>
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


    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-quote postbox__item format-quote mb-50 transition-3'); ?>>
        <div class="postbox__quote postbox__quote-style-3">
            <div class="blog__grid-quote mb-30">
                <div class="blog__grid-quote-icon">
                    <span>
                        <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.1161 0C19.2516 0 20.1806 0.232258 20.9032 0.696775C21.6258 1.16129 22.2194 1.75484 22.6839 2.47742C23.2516 3.30323 23.6129 4.20646 23.7677 5.1871C23.9226 6.16775 24 6.96775 24 7.5871C24 10.1161 23.3548 12.4129 22.0645 14.4774C20.7742 16.5419 18.7613 18.2194 16.0258 19.5097L15.329 18.1161C16.929 17.4452 18.2968 16.3871 19.4323 14.9419C20.6194 13.4968 21.2129 12.0258 21.2129 10.529C21.2129 9.90968 21.1355 9.36774 20.9806 8.90323C20.1548 9.5742 19.2 9.90968 18.1161 9.90968C16.7742 9.90968 15.6129 9.47097 14.6323 8.59355C13.6516 7.71613 13.1613 6.50323 13.1613 4.95484C13.1613 3.50968 13.6516 2.32258 14.6323 1.39355C15.6129 0.464517 16.7742 0 18.1161 0ZM4.95484 0C6.09032 0 7.01936 0.232258 7.74194 0.696775C8.46452 1.16129 9.05807 1.75484 9.52258 2.47742C10.0903 3.30323 10.4516 4.20646 10.6065 5.1871C10.7613 6.16775 10.8387 6.96775 10.8387 7.5871C10.8387 10.1161 10.1935 12.4129 8.90323 14.4774C7.6129 16.5419 5.6 18.2194 2.86452 19.5097L2.16774 18.1161C3.76774 17.4452 5.13548 16.3871 6.27097 14.9419C7.45806 13.4968 8.05161 12.0258 8.05161 10.529C8.05161 9.90968 7.97419 9.36774 7.81936 8.90323C6.99355 9.5742 6.03871 9.90968 4.95484 9.90968C3.6129 9.90968 2.45161 9.47097 1.47097 8.59355C0.490323 7.71613 0 6.50323 0 4.95484C0 3.50968 0.490323 2.32258 1.47097 1.39355C2.45161 0.464517 3.6129 0 4.95484 0Z" fill="currentColor" />
                        </svg>
                    </span>
                </div>
                <div class="blog__grid-quote-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
<?php endif ?>