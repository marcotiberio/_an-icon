<?php
/**
 * The template for displaying a single event
 *
 * Please note that since 1.7, this template is not used by default. You can edit the 'event details'
 * by using the event-meta-event-single.php template.
 *
 * Or you can edit the entire single event template by creating a single-event.php template
 * in your theme. You can use this template as a guide.
 *
 * For a list of available functions (outputting dates, venue details etc) see http://codex.wp-event-organiser.com/
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. See http://docs.wp-event-organiser.com/theme-integration for more information
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */

//Call the template header
get_header(); ?>

<div class="back"><h1 onclick="goBack()">X</h1></div>

<div id="primary">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">

				<!-- Display event title -->
				<h1 class="entry-title"><?php the_title(); ?></h1>

			</header><!-- .entry-header -->
	
			<div class="entry-content">
		<div class="entry-info">
			<?php
				$prev_post = get_previous_post();
				$prev_id = $prev_post->ID;
				$prev_permalink = get_permalink($prev_id);
				$next_post = get_next_post();
				$next_id = $next_post->ID;
				$next_permalink = get_permalink($next_id);
			?>
			<div class="event-nav">
				<a href="<?php echo $prev_permalink; ?>" rel="prev">
					<span class="meta-nav"><</span>
				</a>
				<p><?php the_time('j M Y') ?></p>
				<a href="<?php echo $next_permalink; ?>">
					<span class="meta-nav">></span>
				</a>
			</div>
			<div class="event-time">
				<?php the_field('time'); ?>
			</div>
		</div>
		<div class="event-type">
			<h1>Seminar of Philosophy of Image</h1>
		</div>
		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
		<?php endif; ?>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'anicon' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'anicon' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


			</article><!-- #post-<?php the_ID(); ?> -->			

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<!-- Call template footer -->
<?php get_footer();
