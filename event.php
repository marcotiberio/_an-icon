<?php
/**
 * Template Name: Event
 * Template Post Type: post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package salonammoritzplatz
 */

get_header();
?>

<div id="myModal-<? the_ID(); ?>" class="modal hide fade" 
 tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
  aria-hidden="true">

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-event', get_post_type() );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

</div>

<?php
get_sidebar();
get_footer();
