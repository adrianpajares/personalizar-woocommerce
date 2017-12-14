<?php
/*
Plugin Name: adrianpajares.com - Personalizador de WooCommerce
Pugin URI: 
Description: 
Version: 1.0
Author: 
Author URI: 
Licencense: GPL 2+
*/

add_action('after_setup_theme','personalizar_mi_cuenta');

  function personalizar_mi_cuenta() {
  
    function quitar_tabs( $items ) {
    
      unset( $items['downloads'] );
      unset( $items['orders'] );
      unset( $items['edit-address'] );
      unset( $items['edit-account'] );
      unset( $items['customer-logout'] );
      return $items;
    
    }
  
  add_filter('woocommerce_account_menu_items','quitar_tabs');
  
  }
