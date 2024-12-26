<?php
//get the post autor id
$author_id = get_the_author_meta('ID');

//get the author's avatar
$author_avatar = 70;

//get teh auhtor's bio/description
$author_bio = get_the_author_meta('description');

//get the autor's name
$author_name = get_the_author_meta('display_name');

$author_facebook = get_the_author_meta('facebook_url');
$author_twitter = get_the_author_meta('twitter_url');
$author_linkedin = get_the_author_meta('linkedin_url');



?>
<div class="postbox__author d-sm-flex align-items-start white-bg mb-95">
    <div class="postbox__author-thumb">
        <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
            <?php echo get_avatar(get_the_author_meta('user_email'), $author_avatar, '', '', ['class' => 'media-object img-circle']) ?>
        </a>
    </div>
    <div class="postbox__author-content">
        <h3 class="postbox__author-title">
            <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>"><?php echo esc_html($author_name); ?></a>
        </h3>
        <p><?php echo esc_html($author_bio); ?></p>

        <div class="postbox__author-social d-flex align-items-center">
            <?php if (!empty($author_facebook)): ?>
                <a target="_blank" <?php echo esc_url($author_facebook); ?>"><i class="fa-brands fa-facebook-f"></i></a>
            <?php endif ?>
            <?php if (!empty($author_twitter)): ?>
                <a target="_blank" <?php echo esc_url($author_twitter); ?>"><i class="fa-brands fa-twitter"></i></a>
            <?php endif ?>
            <?php if (!empty($author_linkedin)): ?>
                <a target="_blank" <?php echo esc_url($author_linkedin); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
            <?php endif ?>
        </div>
    </div>
</div>