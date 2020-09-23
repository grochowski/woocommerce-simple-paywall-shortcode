<?php

if ( ! defined( 'ABSPATH' ) ) {
	die ('Do not.');
}

add_action( 'vc_before_init', 'spfw_vc_before_init_actions' );

function spfw_vc_before_init_actions() {

	vc_map( array(
		"name" => __("Simple Paywall", "my-text-domain"),
		"base" => "simple-paywall",
		"as_parent" => array(), 
		"content_element" => true,
		"php_class_name" => 'WPBakeryShortCode_SimplePaywall',
		"show_settings_on_create" => true,
		"is_container" => true,
		"icon"=>"icon_simplepaywall",
		"params" => array(
			array(
				"type" => "textfield",
				"heading" => __("Product list (comma-separated)", "my-text-domain"),
				"admin_label" => true,
				"param_name" => "products",
				"description" => __("Product IDs", "my-text-domain")
			),
			array(
				"type" => "checkbox",
				"heading" => __("Show content when user did not buy items", "my-text-domain"),
				"admin_label" => true,
				"param_name" => "not_bought",
				"description" => __("If checked, content is shown if user did not buy these items. If not checked - show content if items were bought.", "my-text-domain")
			)
		),
		"js_view" => 'VcColumnView'
	) );
	
	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
		class WPBakeryShortCode_SimplePaywall extends WPBakeryShortCodesContainer {
		}
	}
		
	add_action('admin_head', 'custom_spfw_icon');

	function custom_spfw_icon() {
		echo '<style>
			.icon_simplepaywall.vc_element-icon {
				background-image: url('.plugins_url( '/img/icon-wpbakery.svg' , __FILE__ ).') !important;
			}
		</style>';
	}
	
	/** END **/

}