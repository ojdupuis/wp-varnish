<?php
/*
 * Support for purges for wp-socializer plugin 
 * Url http://www.aakashweb.com/wordpress-plugins/wp-socializer/
 * 
 */


class WPVarnish_WPSocializer extends WPVarnishCore {
   
   function mustActivate(){
      return array_key_exists('wp-socializer/wp-socializer.php', get_site_option( 'active_sitewide_plugins') ); 
   }
     
   function addActions(){
        add_action('update_option_wpsr_addthis_data', array(&$this, 'WPVarnishPurgeAll'), 99);
        add_action('update_option_wpsr_buzz_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_retweet_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_digg_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_facebook_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_socialbt_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_custom_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_template1_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_template2_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_settings_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_buzz_data', array(&$this, 'WPVarnishPurgeAll'), 99);     
        add_action('update_option_wpsr_active', array(&$this, 'WPVarnishPurgeAll'), 99);             
   }
   
}

$wpvarnishWPSocializer = & new WPVarnish_WPSocializer();