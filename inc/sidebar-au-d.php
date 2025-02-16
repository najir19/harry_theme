<?php

class Sidebar_Author_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'sidebar_author_widget',
            __('Sidebar Author Widget', 'harry'),
            array('description' => __('Displays an author section in the sidebar.', 'harry'))
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        $author_name  = !empty($instance['author_name']) ? $instance['author_name'] : __('Author Name', 'harry');
        $author_desc  = !empty($instance['author_desc']) ? $instance['author_desc'] : __('Short author bio here.', 'harry');
        $author_img   = !empty($instance['author_img']) ? esc_url($instance['author_img']) : 'https://via.placeholder.com/150';
        $facebook_url = !empty($instance['facebook_url']) ? esc_url($instance['facebook_url']) : '#';
        $twitter_url  = !empty($instance['twitter_url']) ? esc_url($instance['twitter_url']) : '#';
        $linkedin_url = !empty($instance['linkedin_url']) ? esc_url($instance['linkedin_url']) : '#';

?>
        <div class="sidebar__author">
            <div class="sidebar__author-thumb">
                <img src="<?php echo esc_url($author_img); ?>" alt="<?php echo esc_attr($author_name); ?>">
            </div>
            <div class="sidebar__author-content">
                <h3 class="sidebar__author-title"><?php echo esc_html($author_name); ?></h3>
                <p><?php echo esc_html($author_desc); ?></p>

                <div class="sidebar__author-social d-flex align-items-center justify-content-center">
                    <a href="<?php echo esc_url($facebook_url); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?php echo esc_url($twitter_url); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    <?php

        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $author_name  = !empty($instance['author_name']) ? $instance['author_name'] : '';
        $author_desc  = !empty($instance['author_desc']) ? $instance['author_desc'] : '';
        $author_img   = !empty($instance['author_img']) ? $instance['author_img'] : '';
        $facebook_url = !empty($instance['facebook_url']) ? $instance['facebook_url'] : '';
        $twitter_url  = !empty($instance['twitter_url']) ? $instance['twitter_url'] : '';
        $linkedin_url = !empty($instance['linkedin_url']) ? $instance['linkedin_url'] : '';

    ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('author_name')); ?>"><?php _e('Author Name:', 'harry'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author_name')); ?>" name="<?php echo esc_attr($this->get_field_name('author_name')); ?>" type="text" value="<?php echo esc_attr($author_name); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('author_desc')); ?>"><?php _e('Author Description:', 'harry'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('author_desc')); ?>" name="<?php echo esc_attr($this->get_field_name('author_desc')); ?>"><?php echo esc_textarea($author_desc); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('author_img')); ?>"><?php _e('Author Image URL:', 'harry'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author_img')); ?>" name="<?php echo esc_attr($this->get_field_name('author_img')); ?>" type="text" value="<?php echo esc_url($author_img); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('facebook_url')); ?>"><?php _e('Facebook URL:', 'harry'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook_url')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook_url')); ?>" type="text" value="<?php echo esc_url($facebook_url); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('twitter_url')); ?>"><?php _e('Twitter URL:', 'harry'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter_url')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter_url')); ?>" type="text" value="<?php echo esc_url($twitter_url); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkedin_url')); ?>"><?php _e('LinkedIn URL:', 'harry'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin_url')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin_url')); ?>" type="text" value="<?php echo esc_url($linkedin_url); ?>">
        </p>
<?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['author_name']  = (!empty($new_instance['author_name'])) ? sanitize_text_field($new_instance['author_name']) : '';
        $instance['author_desc']  = (!empty($new_instance['author_desc'])) ? sanitize_text_field($new_instance['author_desc']) : '';
        $instance['author_img']   = (!empty($new_instance['author_img'])) ? esc_url_raw($new_instance['author_img']) : '';
        $instance['facebook_url'] = (!empty($new_instance['facebook_url'])) ? esc_url_raw($new_instance['facebook_url']) : '';
        $instance['twitter_url']  = (!empty($new_instance['twitter_url'])) ? esc_url_raw($new_instance['twitter_url']) : '';
        $instance['linkedin_url'] = (!empty($new_instance['linkedin_url'])) ? esc_url_raw($new_instance['linkedin_url']) : '';

        return $instance;
    }
}

function register_sidebar_author_widget()
{
    register_widget('Sidebar_Author_Widget');
}
add_action('widgets_init', 'register_sidebar_author_widget');
