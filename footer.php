<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anicon
 */

?>

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<footer id="colophon" class="site-footer">
			
		<div class="site-info">
			<div class="ticker-tape-small">
				<div class="inside">
					<?php
						$args = array(
							'numberposts'	=> 20,
							'post_type'		=> 'post'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
							<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-title">
									<span><?php the_field('date'); ?></span>
									<a href="<?php the_permalink(); ?>"><h2><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h2></a>
									<span style="text-decoration: underline;"><?php the_field('author'); ?></span>
								</div>
							</article>
						<?php endforeach; 
					?>
				</div>
			</div>
			<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(74);} ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
