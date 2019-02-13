<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 3:18 PM
 */

if ( of_get_option( 'ss_enable_sidebar' ) ) :
	dynamic_sidebar( 'right_1' );
endif;