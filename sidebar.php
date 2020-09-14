<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anicon
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
<?php 
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'illusion',
						'posts_per_page' => -1,
					);
					$arr_posts = new WP_Query( $args );
						
					if ( $arr_posts->have_posts() ) :
						
						
						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>
							<article class="latestpost--archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<p><?php the_time('j M Y') ?></p>
								<span><a href="<?php the_permalink(); ?>">
									<?php
									if ( is_singular() ) :
										the_title( '<p class="entry-title">', '</p>' );
									else :
										the_title( '<p class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></p>' );
									endif;?>
								</a></span><span>autore</span>
							</article>
							<?php
						endwhile;
					endif; ?>
</aside><!-- #secondary -->
