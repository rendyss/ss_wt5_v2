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

echo $ssWT5template->render( 'footer', array(
	'foot_note' => of_get_option( 'ss_copyright', get_bloginfo( 'name' ) . " " . date( 'Y' ) )
) );