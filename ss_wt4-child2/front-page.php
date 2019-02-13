<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 2:25 PM
 */

global $ssWT5template;

get_header();

//Masthead
echo $ssWT5template->render( 'front-masthead' );

//Front post
$posts_args  = array(
	'posts_per_page'   => of_get_option( 'ss_nop', 3 ),
	'offset'           => 0,
	'cat'              => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'           => '',
	'author_name'      => '',
	'post_status'      => 'publish',
	'suppress_filters' => true,
	'fields'           => '',
);
$posts_array = get_posts( $posts_args ); ?>
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="section-header">
                <h3 class="section-title">Latest Posts</h3>
                <p class="section-description">This section will be displaying some of latest posts</p>
            </div>

			<?php if ( $posts_array ): ?>
                <div class="row">
					<?php foreach ( $posts_array as $single_post ) {
						setup_postdata( $single_post );
						echo $ssWT5template->render( 'front-post-list', array(
							'permalink' => get_permalink(),
							'title'     => get_the_title(),
							'datetime'  => "<i class=\"fa fa-info-circle\"> " . get_the_date() . "</i>",
							'excerpt'   => get_the_excerpt()
						) );
					} ?>
                </div>
			<?php else:
				echo $ssWT5template->render( 'post-404' );
			endif; ?>
        </div>
    </section>

<?php get_footer();