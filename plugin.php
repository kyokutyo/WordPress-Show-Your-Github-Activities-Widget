<?php
/*
Plugin Name: Show Your GitHub Activities
Plugin URI: http://github.com/kyokutyo/WordPress-Show-Your-Github-Activities-Widget
Description: Generate widget to show your activities for lazy good neighbors. http://syga.kjirou.net/
Version: 0.1
Author: kyokutyo
Author URI: http://kyokutyo.com/
Author Email: kyokutyo@gmail.com
*/

class Show_Your_Github_Activities extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            false,
            'Show Your Github Activities',
            array(
                'description' => 'Generate widget to show your activities for lazy good neighbors.',
            )
        );
    }

    public function widget($args, $instance)
    {
        extract($instance, EXTR_SKIP);
        echo $before_widget;
        include plugin_dir_path(__FILE__) . 'view.php';
        echo $after_widget;
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        if (isset($new_instance['username'])) {
            $instance['username'] = strip_tags($new_instance['username']);
        }
        if (isset($new_instance['width'])) {
            $instance['width'] = strip_tags($new_instance['width']);
        }
        if (isset($new_instance['height'])) {
            $instance['height'] = strip_tags($new_instance['height']);
        }

        return $instance;
    }

    public function form($instance)
    {
        extract($instance);
        include plugin_dir_path( __FILE__ ) . 'option.php';
    }

}

add_action('widgets_init', 'register_syga_widget');
function register_syga_widget()
{
    register_widget('Show_Your_Github_Activities');
}
