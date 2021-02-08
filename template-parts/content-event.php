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
	<h1 class="page-category"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h1>
	<h1 class="page-label">Event</h1>
</header>

<article id="post-<?php the_ID(); ?>" style="background-color: white;" <?php post_class(); ?>>

	<div class="archive">
		<ul> 
			<?php

				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => -1, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
				
					<li>
						<a class="event-main-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php if( get_field('main_title') ): ?>
							<a href="<?php the_permalink(); ?>"><p class="overall-event-title"><?php the_field('main_title'); ?></p></a>
						<?php endif; ?>
						<?php if( get_field('event1_title') ): ?>
							<span>
								<a href="<?php the_permalink(); ?>">
									<p class="event-title"><?php the_field('event1_title'); ?></p>
								</a>
							</span>
						<?php endif; ?>
						<?php if( get_field('event1_author') ): ?>
							<span class="event-author" style="margin-right: 20px;">
								<?php the_field('event1_author'); ?>
							</span>
						<?php endif; ?>
						<?php if( get_field('event2_title') ): ?>
							<span>
								<a href="<?php the_permalink(); ?>">
									<p class="event-title"><?php the_field('event2_title'); ?></p>
								</a>
							</span>
						<?php endif; ?>
						<?php if( get_field('event2_author') ): ?>
							<span class="event-author">
								<?php the_field('event2_author'); ?>
							</span>
						<?php endif; ?>
					</li>
				
				<?php }
				wp_reset_postdata(); ?>
			</ul>   
		
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
					<span class="meta-nav">
						<svg xmlns="http://www.w3.org/2000/svg" id="Livello_1" data-name="Livello 1" viewBox="0 0 10.60693 18.38477">
							<g id="Event_PREV" data-name="Event PREV">
								<g id="Raggruppa_145" data-name="Raggruppa 145">
								<g id="Raggruppa_124" data-name="Raggruppa 124">
									<g id="Tracciato_372" data-name="Tracciato 372">
									<polygon points="9.193 18.385 0 9.192 9.193 0 10.607 1.414 2.828 9.192 10.607 16.971 9.193 18.385"></polygon>
									</g>
								</g>
								</g>
							</g>
						</svg>
					</span>
				</a>
				<p><?php the_title(); ?></p></a>
				<a href="<?php echo $next_permalink; ?>">
					<span class="meta-nav">
						<svg xmlns="http://www.w3.org/2000/svg" id="Livello_1" data-name="Livello 1" viewBox="0 0 10.60693 18.38477">
							<g id="Event_PREV" data-name="Event PREV">
								<g id="Raggruppa_145" data-name="Raggruppa 145">
								<g id="Raggruppa_124" data-name="Raggruppa 124">
									<g id="Tracciato_372" data-name="Tracciato 372">
									<polygon points="1.414 0 10.607 9.192 1.414 18.385 0 16.971 7.779 9.192 0 1.414 1.414 0"></polygon>
									</g>
								</g>
								</g>
							</g>
						</svg>
					</span>
				</a>
			</div>
			<div class="event-time">
				<span><?php the_field('time_start'); ?></span> &mdash; <span><?php the_field('time_end'); ?></span>
			</div>
		</div>
		<div class="event-type">
			<?php if( get_field('text_location') ): ?>
				<?php the_field('text_location'); ?>
			<?php endif; ?>
			<?php if( get_field('type_of_seminar') ): ?>
				<h1><?php the_field('type_of_seminar'); ?></h1>
			<?php endif; ?>
		</div>
		<div class="overall-event-title">
			<?php if( get_field('main_title') ): ?>
				<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
			<?php endif; ?>
		</div>
		<div class="first-event-title main-title">
			<?php if( get_field('event1_title') ): ?>
				<h2><?php the_field('event1_title'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('event1_author') ): ?>
				<span class="event-author" style="margin-right: 6px;"><?php the_field('event1_author'); ?></span>
			<?php endif; ?>
			<?php if( get_field('event1_authoraffiliation') ): ?>
				<span style="text-decoration: none; margin-left: 6px; font-style: italic;"><?php the_field('event1_authoraffiliation'); ?></span>
			<?php endif; ?>
		</div>
		<?php if( get_field('event1_description') ): ?>
			<div class="first-event-description main-description">
				<?php the_field('event1_description'); ?>
			</div>
		<?php endif; ?>
		<?php if( get_field('event1_keywords') ): ?>
			<div class="first-event-keywords main-description">
				<span style="font-variant: small-caps;">keywords</span>&#32;<?php the_field('event1_keywords'); ?>
			</div>
		<?php endif; ?>

		<div class="second-event-title main-title">
			<?php if( get_field('event2_title') ): ?>
				<h2><?php the_field('event2_title'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('event2_author') ): ?>
				<span class="event-author" style="margin-right: 6px;"><?php the_field('event2_author'); ?></span>
			<?php endif; ?>
			<?php if( get_field('event2_authoraffiliation') ): ?>
				<span style="text-decoration: none; margin-left: 6px; font-style: italic;"><?php the_field('event2_authoraffiliation'); ?></span>
			<?php endif; ?>
		</div>
		<?php if( get_field('event2_description') ): ?>
			<div class="second-event-description main-description">
				<?php the_field('event2_description'); ?>
			</div>
		<?php endif; ?>
		<?php if( get_field('event2_keywords') ): ?>
			<div class="first-event-keywords main-description">
				<span style="font-variant: small-caps;">keywords</span>&#32;<?php the_field('event2_keywords'); ?>
			</div>
		<?php endif; ?>

		<div class="event-bios">
			<?php if( get_field('event1_authorbio') ): ?>
				<div class="first-event-author-bio main-description">
					<?php the_field('event1_authorbio'); ?>
				</div>
			<?php endif; ?>
			<?php if( get_field('event2_authorbio') ): ?>
				<div class="first-event-author-bio main-description">
					<?php the_field('event2_authorbio'); ?>
				</div>
			<?php endif; ?>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php anicon_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
