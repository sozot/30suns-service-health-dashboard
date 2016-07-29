<?php

/*
    Plugin Name: 30suns Hosted Status Page
    Plugin URI: http://wordpress.org/plugins/30suns-service-health-dashboard/
    Description: 30suns makes it easy to start logging service incidents on a status page. To get started: 1) Click the "Activate" link to the left of this description, 2) <a target="_blank" href="https://30suns.com/register/">Sign up for a 30suns account</a>, 3) Click the "Settings" link to the left of this description and save your username and 4) Create a page or post and enter the shortcode <code>[thirtysuns]</code>
    Version: 1.2
    Author: Andy Sozot
    Author URI: https://sozot.com/
*/

if(!class_exists('ThirtySuns')) :

// DEFINE PLUGIN ID
define('THIRTYSUNSPLUGINOPTIONS_ID', 'thirtysuns-plugin');
// DEFINE PLUGIN NICK
define('THIRTYSUNSPLUGINOPTIONS_NICK', '30suns');

class ThirtySuns {
    public static function file_path($file) {
        return ABSPATH.'wp-content/plugins/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).$file;
    }
    public static function register() {
        register_setting(THIRTYSUNSPLUGINOPTIONS_ID.'_options', 'thirtysuns_username');
    }
    public static function menu() {
        add_options_page(THIRTYSUNSPLUGINOPTIONS_NICK.' Plugin Options', THIRTYSUNSPLUGINOPTIONS_NICK, 'manage_options', THIRTYSUNSPLUGINOPTIONS_ID.'_options', array('ThirtySuns', 'options_page'));
    }
    public static function options_page() { 
        if (!current_user_can('manage_options')) {
            wp_die( __('You do not have sufficient permissions to access this page.') );
        }
        $plugin_id = THIRTYSUNSPLUGINOPTIONS_ID;
        include(self::file_path('options.php'));
    }
    public static function content_with_quote($content) {
        $quote = '<p><blockquote>' . get_option('thirtysuns_username') . '</blockquote></p>';
        return $content . $quote;
    }
}
    
if ( is_admin() ) {
    add_action('admin_init', array('ThirtySuns', 'register'));
    add_action('admin_menu', array('ThirtySuns', 'menu'));
    add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ts_add_plugin_action_links' );
    function ts_add_plugin_action_links( $links ) {
        return array_merge(array('settings' => '<a href="' . get_bloginfo( 'wpurl' ) . '/wp-admin/options-general.php?page='.THIRTYSUNSPLUGINOPTIONS_ID.'_options'.'">Settings</a>'),$links);
    }
}

//add_filter('the_content', array('ThirtySuns', 'content_with_quote'));

endif;

add_shortcode('thirtysuns', 'thirtysuns_shortcode');
function thirtysuns_shortcode($atts) {
    $username = get_option('thirtysuns_username');
    return '<iframe height="700" width="100%" frameborder="0" scrolling="no" src="//30suns.com/'.$username.'/embed/"></iframe>';
}

?>
