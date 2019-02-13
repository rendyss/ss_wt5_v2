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

	// Test data
	$test_array = array(
		'one'   => __( 'One', 'theme-textdomain' ),
		'two'   => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four'  => __( 'Four', 'theme-textdomain' ),
		'five'  => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one'   => __( 'French Toast', 'theme-textdomain' ),
		'two'   => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four'  => __( 'Crepe', 'theme-textdomain' ),
		'five'  => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one'  => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color'      => '',
		'image'      => '',
		'repeat'     => 'repeat',
		'position'   => 'top center',
		'attachment' => 'scroll'
	);

	// Typography Defaults
	$typography_defaults = array(
		'size'  => '15px',
		'face'  => 'georgia',
		'style' => 'bold',
		'color' => '#bada55'
	);

	// Typography Options
	$typography_options = array(
		'sizes'  => array( '6', '12', '14', '16', '20' ),
		'faces'  => array( 'Helvetica Neue' => 'Helvetica Neue', 'Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal', 'bold' => 'Bold' ),
		'color'  => false
	);

	// Pull all the categories into an array
	$options_categories     = array();
	$options_categories_obj = get_categories();
	foreach ( $options_categories_obj as $category ) {
		$options_categories[ $category->cat_ID ] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags     = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[ $tag->term_id ] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages     = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ( $options_pages_obj as $page ) {
		$options_pages[ $page->ID ] = $page->post_title;
	}

	$options[] = array(
		'name' => __( 'Global' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Logo' ),
		'id'   => 'ss_logo',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Description' ),
		'id'   => 'ss_description',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'Footer' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Copyright content' ),
		'id'   => 'ss_copyright',
		'type' => 'textarea'
	);

	return $options;
}