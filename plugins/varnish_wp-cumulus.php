<?php
/*
 * Support for wp-cumulus widget
 * Url http://www.roytanck.com/2008/03/06/wordpress-plugin-wp-cumulus-flash-based-tag-cloud/
 * 
 */
class WPVarnish_WPCumulus extends WPVarnishCore {
   
   function mustActivate(){
      return array_key_exists('wp-cumulus/p', get_site_option( 'active_sitewide_plugins') ); 
   }      
  
   function addActions(){      
        add_action('wpcumulus_widget', array(&$this, 'WPVarnishPurgeAll'), 99);     
   }
   
}
$wpvarnishCumulus = & new WPVarnish_WPCumulus();

