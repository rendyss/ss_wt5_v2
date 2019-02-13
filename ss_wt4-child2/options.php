<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 12:32 PM
 */
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'ss_wt5_options';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

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
		'options' => array( '4' => '4', '8' => '8', '12' => '12'),
	);

	return $options;
}