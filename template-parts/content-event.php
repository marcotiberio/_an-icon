<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anicon
 */

?>

<header class="entry-header">
	<h1>2019/2020</h1>
	<h1>Event</h1>
</header>

<?php
the_post_navigation(
	array(
		'prev_text' => '<span class="nav-subtitle">' . esc_html__( '<', 'anicon' ) . '</span>',
		'next_text' => '<span class="nav-subtitle">' . esc_html__( '>', 'anicon' ) . '</span>',
	)
); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php anicon_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="entry-info">
			<p><?php the_time('j M Y') ?></p>
			<p>17:00 – 19:00</p>
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

	<footer class="entry-footer">
		<?php anicon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
