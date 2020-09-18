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

<article style="background-color:<?php the_field('color'); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="archive">

	<?php
	get_sidebar('sidebar-1'); ?>
		
	</div>

	<div class="event-thumbnail" style="background-image: url('http://r26.031.myftpupload.com/wp-content/uploads/2020/09/Event.png');">
		
	</div>

	<div class="entry-content">
		<div class="entry-info">
		<?php
			global $wp_query;
			if ( $wp_query->max_num_pages > 1 ) { ?>
			<nav class="eo-events-nav">
				<div class="nav-next eo-events-nav-later"><?php next_posts_link( __( 'Later events <span class="meta-nav">&rarr;</span>' , 'eventorganiser' ) ); ?></div>
				<div class="nav-previous eo-events-nav-earlier"><?php previous_posts_link( __( ' <span class="meta-nav">&larr;</span> Newer events', 'eventorganiser' ) ); ?></div>
			</nav><!-- #nav-above -->
			<?php }; ?>
			<div class="event-time">
				<p>17:00 – 19:00</p>
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

	<footer class="entry-footer">
		<?php anicon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
