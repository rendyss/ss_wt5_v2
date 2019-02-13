<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 10:24 AM
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require get_stylesheet_directory() . '/inc/class-sswt5.php';
$ssWT5 = SSWT5::Instance();

//Declare as global variable
$ssWT5template = new SSWT5_Template( get_stylesheet_directory() . '/templates' );