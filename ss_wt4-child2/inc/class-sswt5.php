<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 10:19 AM
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'SSWT5' ) ) {
	class SSWT5 {
		public static function Instance() {
			static $instance = null;
			if ( $instance === null ) {
				$instance = new SSWT5();
			}

			return $instance;
		}

		private function __construct() {
			$this->load_front_end_assets();
			$this->load_template();
		}

		function load_front_end_assets() {
			require get_stylesheet_directory() . '/inc/class-sswt5-front-assets.php';
			new SSWT5_Front_Assets();
		}

		function load_template() {
			require_once get_stylesheet_directory() . '/inc/class-sswt5-template.php';
		}
	}
}