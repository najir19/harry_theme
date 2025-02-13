<?php

// Register Latest Posts Widget
function harry_register_latest_posts_widget()
{
    register_widget('Harry_Latest_Posts_Widget');
}
add_action('widgets_init', 'harry_register_latest_posts_widget');

// Create Latest Posts Widget Class
class Harry_Latest_Posts_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'harry_latest_posts', // Widget ID
            __('Harry Latest Posts', 'harry'), // Widget Name
            array('description' => __('Displays latest blog posts', 'harry'))
        );
    }

    // Frontend Display
    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        // Get the title from the widget settings
        $title = !empty($instance['title']) ? $instance['title'] : __('Latest Posts', 'harry');
        if ($title) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        }

        // Query latest posts
        $latest_posts = new WP_Query(array(
            'posts_per_page' => 3, // Adjust as needed
            'post_status'    => 'publish'
        ));

        if ($latest_posts->have_posts()) :
            while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                <div class="rc__post d-flex align-items-center">
                    <div class="rc__post-thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail', ['alt' => get_the_title()]);
                            } else {
                                // Default image if no thumbnail
                                echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/blog/sidebar/blog-sm-1.jpg') . '" alt="No image available">';
                            }
                            ?>
                        </a>
                    </div>
                    <div class="rc__post-content">
                        <h3 class="rc__post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="rc__meta">
                            <span>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5 3.59961V7.49961L10.1 8.79961" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <?php echo get_the_date(); ?>
                            </span>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;

        echo $args['after_widget'];
    }

    // Backend Widget Form (Title Input)
    public function form($instance)
    {
        $title = !empty($instance['title']) ? $instance['title'] : __('Latest Posts', 'harry');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:', 'harry'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                type="text"
                value="<?php echo esc_attr($title); ?>">
        </p>
<?php
    }

    // Save Widget Form
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = !empty($new_instance['title']) ? sanitize_text_field($new_instance['title']) : '';
        return $instance;
    }
}
