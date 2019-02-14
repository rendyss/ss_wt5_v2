<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$options[] = array(
	'name' => __( 'Logo' ),
	'id'   => 'ss_logo',
	'type' => 'upload'
);

$options[] = array(
	'name' => __( 'Enable sidebar' ),
	'id'   => 'ss_enable_sidebar',
	'desc' => __( 'Enable' ),
	'std'  => '1',
	'type' => 'checkbox'
);

$options[] = array(
	'name'    => __( 'Number of posts in front page', 'theme-textdomain' ),
	'id'      => 'ss_nop',
	'std'     => '8',
	'type'    => 'select',
	'class'   => 'mini', //mini, tiny, small
	'options' => array( '4' => '4', '8' => '8', '12' => '12' ),
);

return $options;