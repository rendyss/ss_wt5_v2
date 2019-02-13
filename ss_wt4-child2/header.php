<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/12/2019
 * Time: 8:48 AM
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $ssWT5template;

echo $ssWT5template->render( 'header', array(
	'is_front_page' => is_front_page(),
	'head_logo'     => of_get_option( 'ss_logo' ) ? "<img src=\"" . of_get_option( 'ss_logo' ) . "\">" : get_bloginfo( 'name' )
) );