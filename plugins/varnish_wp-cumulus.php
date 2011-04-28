<?php

class WPVarnish_WPCumulus extends WPVarnish {
      
   function is_activated(){
      return array_key_exists('wp-cumulus/wp-cumulus.php', get_site_option( 'active_sitewide_plugins') ); 
   }
   
   function addActions(){
        add_action('wpcumulus_widget', array(&$this, 'WPVarnishPurgeAll'), 99);     
   }
   
}
