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
	<h1><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h1>
	<h1>Event</h1>
</header>

<article id="post-<?php the_ID(); ?>" style="background-color: white;" <?php post_class(); ?>>

	<div class="archive">

	<?php

		$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
		if( $related ) foreach( $related as $post ) {
		setup_postdata($post); ?>
		<ul> 
			<li>
				<p><?php the_field('date'); ?></p>
				<span><a href="<?php the_permalink(); ?>"><p class="event-title"><?php the_field('event1_title'); ?></p></a></span>
				<span class="event-author"><a href="<?php the_permalink(); ?>"><?php the_field('event1_author'); ?></a></span>
				<span><a href="<?php the_permalink(); ?>"><p class="event-title"><?php the_field('event2_title'); ?></p></a>
				<span class="event-author"><a href="<?php the_permalink(); ?>"><?php the_field('event2_author'); ?></a></span>
			</li>
		</ul>   
		<?php }
		wp_reset_postdata(); ?>
		
	</div>

	<div class="event-thumbnail">
		<?php anicon_post_thumbnail(); ?>
		<p><?php the_field('image_caption'); ?></p>
	</div>

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
				<p><?php the_field('date'); ?></p></a>
				<a href="<?php echo $next_permalink; ?>">
					<span class="meta-nav">></span>
				</a>
			</div>
			<div class="event-time">
				<span><?php the_field('time_start'); ?>:00</span> &mdash; <span><?php the_field('time_end'); ?>:00</span>
			</div>
		</div>
		<div class="event-type">
			<h1>Seminar of Philosophy of Image</h1>
		</div>
		<div class="first-event-title">
			<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
			<span style="text-decoration: underline;"><?php the_field('event1_author'); ?>,</span>
			<span style="text-decoration: none;"><?php the_field('event1_authoraffiliation'); ?></span>
		</div>
		<div class="first-event-description"><?php the_field('event1_description'); ?></div>

		<div class="second-event-title">
			<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
			<span style="text-decoration: underline;"><?php the_field('event2_author'); ?>,</span>
			<span style="text-decoration: none;"><?php the_field('event2_authoraffiliation'); ?></span>
		</div>
		<div class="second-event-description"><?php the_field('event2_description'); ?></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php anicon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
