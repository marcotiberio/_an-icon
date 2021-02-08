<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package anicon
 */

get_header();
?>

	<div class="white-background"></div>
	
	<div class="back">
		<svg onclick="window.location.href='/#events'" xmlns="http://www.w3.org/2000/svg" id="Livello_1" data-name="Livello 1" viewBox="0 0 31.41421 31.41421">
			<g id="Raggruppa_172" data-name="Raggruppa 172">
				<g id="Raggruppa_173" data-name="Raggruppa 173">
				<line id="Linea_83" data-name="Linea 83" x1="0.70712" y1="30.70712" x2="30.70612" y2="0.70712" fill="none" stroke="#040405" stroke-width="2"></line>
				<line id="Linea_84" data-name="Linea 84" x1="30.70712" y1="30.70612" x2="0.70712" y2="0.70712" fill="none" stroke="#040405" stroke-width="2"></line>
				</g>
			</g>
		</svg>

		<svg width="38" height="65" viewBox="0 0 38 65">
			
		</svg>
	</div>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-event', get_post_type() );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
