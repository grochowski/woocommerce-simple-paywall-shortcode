<?php

/*
Plugin Name: Simple Paywall Shortcode for WooCommerce
Description: Shortcode that checks whether user bought an item or not
Author: @grochowski
Version: 1.0.0
License: GNU GPL v.3.0.
Author URI: https://github.com/grochowski
*/

// If this file is called directly, abort

if ( ! defined( 'ABSPATH' ) ) {
   die ('Do not.');
}

//
// builder support
//
require_once('builders/wpbakery-visual-composer.php');

//
// helpers
//
require_once('lib.php');

//
// shortcode definition
//
function simple_paywall_shortcode($atts, $content = null) {
   $a = shortcode_atts( array(
      'products' => '',
	'not_bought' => false
   ), $atts );

   $productsArray = explode(',', $atts['products']);
   $user = 0;
   return (has_bought_items($user, $productsArray) != $atts['not_bought']) ? apply_filters( 'the_content', $content ) : '';
}

add_shortcode( 'simple-paywall', 'simple_paywall_shortcode');