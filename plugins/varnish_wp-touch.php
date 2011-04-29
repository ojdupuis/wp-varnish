<?php
/*
 * Support for purges for the ajax calendar widget 
 * Url http://urbangiraffe.com/plugins/ajax-calendar/
 * Version: 2.5.1
 */


class WPVarnish_WPTouch extends WPVarnishAbstract {
   
   function mustActivate(){
      return $this->is_plugin_active('wptouch/wptouch.php');       
   }
     
   function addActions(){
      remove_all_actions( 'wpvarnish_purgeobject',99);
      add_action('wpvarnish_purgeobject', array(&$this, 'WPtouchPurgeObject'), 99);             
   }
   
   // We need to purge the normal and the mobile version of the page
   function WPtouchPurgeObject($wpv_url){
      echo "\n WPTOUCH $wpv_url";
      foreach (array('Android','Windows NT 6.0') as $useragent){
         $this->_WPVarnishPurgeObject($wpv_url,$useragent);
      }
   }
}

$wpvarnishWPTouch = & new WPVarnish_WPTouch();