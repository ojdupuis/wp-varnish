<?php

class WPVarnish_WPAjaxCalendar extends WPVarnish {
   const NAME="Wp-Cumulus";
   const SITE_PLUGIN_NAME="wp-cumulus/wp-cumulus.php";
   
   function is_activated(){
      return array_key_exists('ajax-calendar/ajax-calendar.php', get_site_option( 'active_sitewide_plugins') ); 
   }
   
   function addActions(){
        add_action('edit_post', array(&$this, 'WPVarnishPurgePostDependencies'), 99);     
   }
   
   // Purge Ajax Calendar for a post
   function WPVarnishPurgeAjaxCalendar($wpv_postid){     
        $month=str_replace(get_bloginfo('wpurl'),"",get_month_link(get_post_time('Y',false,$wpv_postid), get_post_time('m',true,$wpv_postid)));
        $this->WPVarnishPurgeObject($month.'?ajax=true');     
  }
}
