<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 10:21 AM
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'SSWT5_Front_Assets' ) ) {
	class SSWT5_Front_Assets {
		function __construct() {
			$this->load_global_assets();
		}

		function load_global_assets() {
			//These assets is globally used in front-end
			add_action( 'wp_enqueue_scripts', array( $this, 'global_assets_callback' ) );
		}

		function global_assets_callback() {
			$path        = get_stylesheet_directory_uri();
			$parent_name = "sswt4";

			//Include parent's main stylesheet
			wp_enqueue_style( $parent_name, get_template_directory_uri() . "/style.css" );

			//include main stylesheet
			wp_enqueue_style( 'style.css', get_stylesheet_uri(), array( $parent_name ) );

			//Include custom stylesheet
			wp_enqueue_style( 'sswt5custom.css', $path . '/assets/css/custom.css', array( $parent_name ) );
		}
	}
}