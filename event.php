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

	<div class="back">
		<svg onclick="window.location.href='http://vpp.921.myftpupload.com/#seminars'" width="38" height="65" viewBox="0 0 38 65">
			<defs>
				<filter id="_" x="0" y="0" width="38" height="65" filterUnits="userSpaceOnUse">
				<feOffset input="SourceAlpha"/>
				<feGaussianBlur stdDeviation="1.5" result="blur"/>
				<feFlood flood-opacity="0.6"/>
				<feComposite operator="in" in2="blur"/>
				<feComposite in="SourceGraphic"/>
				</filter>
			</defs>
			<g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#_)">
				<text id="_2" data-name="×" transform="translate(4.5 50.5)" font-size="48" font-family="HelveticaNeue, Helvetica Neue"><tspan x="0" y="0">×</tspan></text>
			</g>
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
