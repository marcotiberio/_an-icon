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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
					
	<script>
		var scroll = new SmoothScroll('a[href*="#"]', {
			speed: 50
		});
	</script>

	<script>
		$(document).ready(function() {
			$("#menuToggle").click(function() {         
				$("#mobileMenuPlus").toggleClass("spinEffect");
			});
		});

		$(document).ready(function () {
			$("#mobile-menu .menu-item").click(function () {
				$(".menu-mobile-menu-container").toggle();
				$("#mobileMenuPlus").toggleClass("spinEffect");
			});
		});

		$(document).ready(function() {
			$(".tab").click(function() {         
				$(this).children('#tabMinus1').toggleClass("arrowEffectUp");
				$(this).children('#tabMinus2').toggleClass("arrowEffectDown");
				$('.tab').not(this).children('#tabMinus1').removeClass("arrowEffectUp");
				$('.tab').not(this).children('#tabMinus2').removeClass("arrowEffectDown");
			});
		});
	</script>

	<script>
		$(document).ready(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 0) {
				$('.home .logos-top').fadeOut();
				} else {
				  $('.home .logos-top').fadeIn();
				}
			});
		});

		$(document).ready(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 0) {
				$('.single .logos-top').fadeOut();
				} else {
				//   $('.single .logos-top').fadeIn();
				}
			});
		});
	</script>

	<script>
		// On reload always scroll top
		// $(document).ready(function(){
		// 	$(this).scrollTop(0);
		// });
	</script>

	<div class="footer-background"></div>
	<footer id="colophon" class="site-footer">

		<div class="site-info">

		<div class="ticker-wrap">
			<div class="ticker">
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
				<div class="ticker__item">
					<?php
							$args = array(
								'numberposts'	=> 1,
								'post_type'		=> 'post',
								'orderby'			=> 'date',
								'meta_key'			=> 'remove_from_news',
								'order'				=> 'DESC',
								'meta_query' => array(
									array(
										'key'   => 'remove_from_news',
										'value' => '0',
										'compare' => '='
									)
								)
							);
							$my_posts = get_posts( $args );
							foreach ($my_posts as $post) :  setup_postdata($post); 
							?> 
								<article class="latestpost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php if( get_field('main_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a>
									<?php endif; ?>
									<div class="event-title">
										<a class="event-title-date" href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>
										<?php if( get_field('event1_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event1_author') ): ?>
											<span class="event-author"><?php the_field('event1_author'); ?></span>
										<?php endif; ?>
										<?php if( get_field('event2_title') ): ?>
											<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
										<?php endif; ?>
										<?php if( get_field('event2_author') ): ?>
											<span class="event-author"><?php the_field('event2_author'); ?></span>
										<?php endif; ?>
									</div>
								</article>
							<?php endforeach; 
						?>
				</div>
			</div>
		</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
