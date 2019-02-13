<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 2:25 PM
 */

global $ssWT5template;

get_header();

echo $ssWT5template->render( 'front-masthead', array( 'blog_desc' => of_get_option( 'ss_description','This is going to be default value if description is not available' ) ) );
echo $ssWT5template->render( 'front-team' );

get_footer();