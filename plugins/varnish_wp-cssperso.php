<?php
/*
 * Support for personnalized css
 * Url none
 * Version 1
 */
class WPVarnishPurger_WPCssPerso extends WPVarnishPurgerCore {

   function mustActivate(){
      return true;
   }

   function addActions(){
        add_action('update_option_css_perso', array(&$this, 'WPVarnishPurgerPurgeCssPerso'), 99);

   }

   // Purge Ajax Calendar for a post
   function WPVarnishPurgerPurgeCssPerso(){
        $this->WPVarnishPurgerPurgeObject(get_bloginfo('wpurl').'wp-content/themes/common/css_perso.php');
  }

}
$WPVarnishPurgerCssPerso = & new WPVarnishPurger_WPCssPerso();

