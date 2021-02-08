<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anicon
 */

get_header();
?>

<div class="progress-indicator">
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
</div>

<div id="backgroundMenu"></div>

<main id="primary" class="site-main">

	<section id="intro">
		<div class="intro-text">
			<?php the_field('intro_text'); ?>
		</div>
	</section>

	<section id="seminars">
		<div class="section-title">
			<p>Seminars</p>
		</div>
		<div class="inside">
			<div class="left">
				<div class="section-intro">
					<?php the_field('seminars_intro'); ?>
				</div>
				<!-- Tab links -->
				<div>
					<div class="tab">
						<button class="tablinks" style="display: none;" onclick="openSeminar(event, '20242025')"><?php the_field('seminar_title', 2626); ?> <?php the_field('seminar_year', 2626); ?></button>
					</div>
					<div class="tab">
						<button class="tablinks" style="display: none;" onclick="openSeminar(event, '20232024')"><?php the_field('seminar_title', 2624); ?> <?php the_field('seminar_year', 2624); ?></button>
					</div>
					<div class="tab">
						<button class="tablinks" style="display: none;" onclick="openSeminar(event, '20222023')"><?php the_field('seminar_title', 2622); ?> <?php the_field('seminar_year', 2622); ?></button>
					</div>
					<div class="tab">
						<button class="tablinks" style="display: none;" onclick="openSeminar(event, '20212022')"><?php the_field('seminar_title', 2620); ?> <?php the_field('seminar_year', 2620); ?></button>
					</div>
					<div class="tab">
						<span class="arrowEffectUp" id="tabMinus1"></span>
						<span class="arrowEffectDown" id="tabMinus2"></span>
						<button class="tablinks active" onclick="openSeminar(event, '20202021b')"><?php the_field('seminar_title', 3187); ?> <?php the_field('seminar_year', 3187); ?></button>
					</div>
					<div class="tab">
						<span id="tabMinus1"></span>
						<span id="tabMinus2"></span>
						<button class="tablinks" onclick="openSeminar(event, '20202021a')"><?php the_field('seminar_title', 2618); ?> <?php the_field('seminar_year', 2618); ?></button>
					</div>
					<div class="tab">
						<span id="tabMinus1"></span>
						<span id="tabMinus2"></span>
						<button class="tablinks" onclick="openSeminar(event, '20192020')"><?php the_field('seminar_title', 660); ?> <?php the_field('seminar_year', 660); ?></button>
					</div>
					<div class="tab">
						<span id="tabMinus1"></span>
						<span id="tabMinus2"></span>
						<button class="tablinks" onclick="openSeminar(event, '20182019')"><?php the_field('seminar_title', 663); ?> <?php the_field('seminar_year', 663); ?></button>
					</div>
					<div class="tab">
						<span id="tabMinus1"></span>
						<span id="tabMinus2"></span>
						<button class="tablinks" onclick="openSeminar(event, '20162017')"><?php the_field('seminar_title', 664); ?> <?php the_field('seminar_year', 664); ?></button>
					</div>
					<div class="tab">
						<span id="tabMinus1"></span>
						<span id="tabMinus2"></span>
						<button class="tablinks" onclick="openSeminar(event, '20152016')"><?php the_field('seminar_title', 665); ?> <?php the_field('seminar_year', 665); ?></button>
					</div>
				</div>
			</div>

			<div class="center">

				<!-- Tab content -->
				<div id="20242025" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 2626); ?></h3>
						<?php
						$args = array(
							'posts_per_page'	=> 20,
							'post_type'		=> 'post',
							'category_name' => 'newseminar',
							'orderby'			=> 'meta_value',
							'meta_key'			=> 'date',
							'order'				=> 'DESC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
					
							<article class="latestpost fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info">
											<li>
												<?php the_title(); ?>
												<p>
												<?php if( get_field('main_title') ): ?>
													<span><p class="overall-event-title"><?php the_field('main_title'); ?></p></span>
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
										</div>
									</div>
								</div>
							</article>

						<?php endforeach; 
						?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 660);
						$description = get_field_object('seminar_description', 660);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20232024" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 2624); ?></h3>
						<?php
						$args = array(
							'posts_per_page'	=> 20,
							'post_type'		=> 'post',
							'category_name' => 'newseminar',
							'orderby'			=> 'meta_value',
							'meta_key'			=> 'date',
							'order'				=> 'DESC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
					
							<article class="latestpost fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info">
											<li>
												<?php the_title(); ?>
												<p>
												<?php if( get_field('main_title') ): ?>
													<span><p class="overall-event-title"><?php the_field('main_title'); ?></p></span>
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
										</div>
									</div>
								</div>
							</article>

						<?php endforeach; 
						?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 660);
						$description = get_field_object('seminar_description', 660);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20222023" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 2622); ?></h3>
						<?php
						$args = array(
							'posts_per_page'	=> 20,
							'post_type'		=> 'post',
							'category_name' => 'newseminar',
							'orderby'			=> 'meta_value',
							'meta_key'			=> 'date',
							'order'				=> 'DESC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
					
							<article class="latestpost fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info">
											<li>
												<?php the_title(); ?>
												<p>
												<?php if( get_field('main_title') ): ?>
													<span><p class="overall-event-title"><?php the_field('main_title'); ?></p></span>
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
										</div>
									</div>
								</div>
							</article>

						<?php endforeach; 
						?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 660);
						$description = get_field_object('seminar_description', 660);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20212022" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 2620); ?></h3>
						<?php
						$args = array(
							'posts_per_page'	=> 20,
							'post_type'		=> 'post',
							'category_name' => 'newseminar',
							'orderby'			=> 'meta_value',
							'meta_key'			=> 'date',
							'order'				=> 'DESC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
					
							<article class="latestpost fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info">
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
										</div>
									</div>
								</div>
							</article>

						<?php endforeach; 
						?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 660);
						$description = get_field_object('seminar_description', 660);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20202021b" class="tabcontent" style="display: grid;">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 3187); ?></h3>
						<?php
						$args = array(
							'posts_per_page'	=> -1,
							'post_type'		=> 'post',
							'category_name' => 'zoom-in',
							'orderby' 		=> 'date',
							'order'				=> 'ASC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
					
							<article class="latestpost fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info">
											<li>
												<?php the_title(); ?>
												<p>
												<?php if( get_field('main_title') ): ?>
													<span><p class="overall-event-title"><?php the_field('main_title'); ?></p></span>
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
										</div>
									</div>
								</div>
							</article>

						<?php endforeach; 
						?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 3187);
						$description = get_field_object('seminar_description', 3187);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20202021a" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 2618); ?></h3>
						<?php
						$args = array(
							'posts_per_page'	=> -1,
							'post_type'		=> 'post',
							'category_name' => 'interactivity',
							'orderby' 		=> 'date',
							'order'				=> 'DESC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
					
							<article class="latestpost fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info">
											<li>
												<?php the_title(); ?>
												<p>
												<?php if( get_field('main_title') ): ?>
													<span><p class="overall-event-title"><?php the_field('main_title'); ?></p></span>
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
										</div>
									</div>
								</div>
							</article>

						<?php endforeach; 
						?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 2618);
						$description = get_field_object('seminar_description', 2618);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20192020" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 660); ?></h3>
						<?php
						$args = array(
							'posts_per_page'	=> -1,
							'post_type'		=> 'post',
							'category_name' => 'illusion',
							'orderby' 		=> 'date',
							'order'				=> 'ASC'
						);
						$my_posts = get_posts( $args );
						foreach ($my_posts as $post) :  setup_postdata($post); 
						?> 
					
							<article class="latestpost fade" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info">
											<li>
												<?php the_title(); ?>
												<p>
												<?php if( get_field('main_title') ): ?>
													<span><p class="overall-event-title"><?php the_field('main_title'); ?></p></span>
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
										</div>
									</div>
								</div>
							</article>

						<?php endforeach; 
						?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 660);
						$description = get_field_object('seminar_description', 660);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20182019" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 663); ?></h3>
						<?php if( have_rows('repeater_seminar', 663) ): ?>
							<?php while( have_rows('repeater_seminar', 663) ): the_row(); 
								$date = get_sub_field('date');
								$main_title = get_sub_field('main_title');
								$event1_title = get_sub_field('event1_title');
								$event1_author = get_sub_field('event1_author');
								$event2_title = get_sub_field('event2_title');
								$event2_author = get_sub_field('event2_author');
							?>
							<article class="latestpost fade">
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info" style="pointer-events: none;">
											<li>
												<?php if( get_sub_field('date') ): ?>
													<p class="overall-event-title"><?php the_sub_field('date'); ?></p>
												<?php endif; ?>
												<?php if( get_sub_field('main_title') ): ?>
													<p class="overall-event-title"><?php the_sub_field('main_title'); ?></p>
												<?php endif; ?>
												<?php if( get_sub_field('event1_title') ): ?>
													<span>
														<p class="event-title"><?php the_sub_field('event1_title'); ?></p>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event1_author') ): ?>
													<span class="event-author" style="margin-right: 20px;">
														<?php the_sub_field('event1_author'); ?>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event2_title') ): ?>
													<span>
														<p class="event-title"><?php the_sub_field('event2_title'); ?></p>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event2_author') ): ?>
													<span class="event-author">
														<?php the_sub_field('event2_author'); ?>
													</span>
												<?php endif; ?>
											</li>
										</div>
									</div>
								</div>
							</article>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 663);
						$description = get_field_object('seminar_description', 663);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20162017" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 664); ?></h3>
						<?php if( have_rows('repeater_seminar', 664) ): ?>
							<?php while( have_rows('repeater_seminar', 664) ): the_row(); 
								$date = get_sub_field('date');
								$main_title = get_sub_field('main_title');
								$event1_title = get_sub_field('event1_title');
								$event1_author = get_sub_field('event1_author');
								$event2_title = get_sub_field('event2_title');
								$event2_author = get_sub_field('event2_author');
							?>
							<article class="latestpost fade">
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info" style="pointer-events: none;">
											<li>
												<?php if( get_sub_field('date') ): ?>
													<p class="overall-event-title"><?php the_sub_field('date'); ?></p>
												<?php endif; ?>
												<?php if( get_sub_field('main_title') ): ?>
													<p class="overall-event-title"><?php the_sub_field('main_title'); ?></p>
												<?php endif; ?>
												<?php if( get_sub_field('event1_title') ): ?>
													<span>
														<p class="event-title"><?php the_sub_field('event1_title'); ?></p>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event1_author') ): ?>
													<span class="event-author" style="margin-right: 20px;">
														<?php the_sub_field('event1_author'); ?>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event2_title') ): ?>
													<span>
														<p class="event-title"><?php the_sub_field('event2_title'); ?></p>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event2_author') ): ?>
													<span class="event-author">
														<?php the_sub_field('event2_author'); ?>
													</span>
												<?php endif; ?>
											</li>
										</div>
									</div>
								</div>
							</article>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 664);
						$description = get_field_object('seminar_description', 664);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>
				</div>

				<!-- Tab content -->
				<div id="20152016" class="tabcontent">
					<div class="post-list">
						<h3 class="subsection-title fade"><?php the_field('seminar_year', 665); ?></h3>
						<?php if( have_rows('repeater_seminar', 665) ): ?>
							<?php while( have_rows('repeater_seminar', 665) ): the_row(); 
								$date = get_sub_field('date');
								$main_title = get_sub_field('main_title');
								$event1_title = get_sub_field('event1_title');
								$event1_author = get_sub_field('event1_author');
								$event2_title = get_sub_field('event2_title');
								$event2_author = get_sub_field('event2_author');
							?>
							<article class="latestpost fade">
								<div class="event-details">
									<div class="event-header">
										<div class="entry-info" style="pointer-events: none;">
											<li>
												<?php if( get_sub_field('date') ): ?>
													<p class="overall-event-title"><?php the_sub_field('date'); ?></p>
												<?php endif; ?>
												<?php if( get_sub_field('main_title') ): ?>
													<p class="overall-event-title"><?php the_sub_field('main_title'); ?></p>
												<?php endif; ?>
												<?php if( get_sub_field('event1_title') ): ?>
													<span>
														<p class="event-title"><?php the_sub_field('event1_title'); ?></p>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event1_author') ): ?>
													<span class="event-author" style="margin-right: 20px;">
														<?php the_sub_field('event1_author'); ?>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event2_title') ): ?>
													<span>
														<p class="event-title"><?php the_sub_field('event2_title'); ?></p>
													</span>
												<?php endif; ?>
												<?php if( get_sub_field('event2_author') ): ?>
													<span class="event-author">
														<?php the_sub_field('event2_author'); ?>
													</span>
												<?php endif; ?>
											</li>
										</div>
									</div>
								</div>
							</article>
							<?php endwhile; ?>
						<?php endif; ?>

					</div>

					<div class="seminar-description fade">
						<?php
						$title = get_field_object('seminar_title', 665);
						$description = get_field_object('seminar_description', 665);
						?>
						<h3><?php echo $title['value']; ?></h3>
						<?php echo $description['value']; ?>
					</div>

				</div>
			</div>

		</div>
	</section>

	<section id="events">

		<!-- Swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">

			<?php
				$args = array(
					'numberposts'	=> -1,
					'post_type'		=> 'post',
					'orderby'			=> 'meta_value',
					'meta_key'			=> 'date',
					'order'				=> 'ASC',
					'cat' => '15, 23'
				);
				$my_posts = get_posts( $args );
				foreach ($my_posts as $post) :  setup_postdata($post); 
				?> 
					<article class="latestpost--archive swiper-slide event-<?php the_field('date'); ?>" data-date="<?php the_field('date'); ?>" style="background-color:<?php the_field('color'); ?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-image' );?>
						<div class="event-thumbnail" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'); background-color:<?php the_field('color'); ?>" id="post-<?php the_ID(); ?>"></div>
						<div class="event-details">
							<div class="event-header">
								<h1>Event</h1>
								<div class="entry-info">
									<div class="slider-nav">
										<span class="swiper-button-prev"></span>
										<span><?php the_title(); ?></span>
										<span class="swiper-button-next"></span>
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
										<span><a href="<?php the_permalink(); ?>"><h1><?php the_field('main_title'); ?></h1></a></span>
									<?php endif; ?>
								</div>
								<div class="event-title">
									<?php if( get_field('event1_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h2><?php the_field('event1_title'); ?></h2></a>
									<?php endif; ?>
									<?php if( get_field('event1_author') ): ?>
										<span class="event-author" style="margin-right: 6px;"><?php the_field('event1_author'); ?></span>
									<?php endif; ?>
									<?php if( get_field('event1_authoraffiliation') ): ?>
										<span class="event-author-affiliation"><?php the_field('event1_authoraffiliation'); ?></span>
									<?php endif; ?>
								</div>
								<div class="event-title">
									<?php if( get_field('event2_title') ): ?>
										<a href="<?php the_permalink(); ?>"><h2><?php the_field('event2_title'); ?></h2></a>
									<?php endif; ?>
									<?php if( get_field('event2_author') ): ?>
										<span class="event-author" style="margin-right: 6px;"><?php the_field('event2_author'); ?></span>
									<?php endif; ?>
									<?php if( get_field('event2_authoraffiliation') ): ?>
										<span class="event-author-affiliation"><?php the_field('event2_authoraffiliation'); ?></span>
									<?php endif; ?>
								</div>
							</div>
							<?php echo do_shortcode('[clndr id=test]'); ?>
						</div>
					</article>

				<?php endforeach; 
			?>
			</div>
			<!-- Add Arrows -->
			
		</div>


	</section>

	<section id="publications">
		<div class="section-title">
			<p>Publications</p>
		</div>
		<div class="inside">
			<div class="one">
			<button class="accordion" id="accordionButtonMonographs">
				<div class="circle-plus closed">
					<div class="circle">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</div>
				<h6 class="accordion active accordion-publications" id="#accordionMonographs">MONOGRAPHS, EDITED BOOKS, JOURNAL ISSUES & CONFERENCE PROCEEDINGS</h6>
			</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('monographs', 2120) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('monographs', 2120) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>		
			<div class="two">
				<button class="accordion" id="accordionButtonJournalarticles">
					<div class="circle-plus closed">
						<div class="circle">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</div>
					<h6 class="accordion active accordion-publications" id="#accordionJournalarticles">JOURNAL ARTICLES & BOOK CHAPTERS</h6>
				</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('journalarticles', 2122) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('journalarticles', 2122) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>		
			<div class="three">
				<button class="accordion" id="accordionButtonExhibitionscatalogues">
					<div class="circle-plus closed">
						<div class="circle">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</div>
					<h6 class="accordion active accordion-publications" id="#accordionExhibitionscatalogues">EXHIBITIONS & CATALOGUES</h6>
				</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('exhibitionscatalogues', 2123) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('exhibitionscatalogues', 2123) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>		
			<div class="four">
				<button class="accordion" id="accordionButtonOther">
					<div class="circle-plus closed">
						<div class="circle">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</div>
					<h6 class="accordion active accordion-publications" id="#accordionOther">REVIEWS, INTERVIEWS, WEB PAPERS & OTHER</h6>
				</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('other', 2124) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('other', 2124) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>		
		</div>
	</section>

	<section id="recommended">
		<div class="section-title">
			<p>Recommended</p>
		</div>
		<div class="inside">
			<div class="publications">
				<button class="accordion" id="accordionButtonPublications">
					<div class="circle-plus closed">
						<div class="circle">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</div>
					<h6 class="accordion active accordion-recommended" id="#accordionPublications">PUBLICATIONS</h6>
				</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('publications', 2128) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('publications', 2128) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>	
			<div class="callforpapers">
				<button class="accordion" id="accordionButtonCallforpapers">
					<div class="circle-plus closed">
						<div class="circle">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</div>
					<h6 class="accordion active accordion-recommended" id="#accordionCallforpapers">CALL FOR PAPERS</h6>
				</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('callforpapers', 2130) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('callforpapers', 2130) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>		
			<div class="exhibitions">
				<button class="accordion" id="accordionButtonExhibitions">
					<div class="circle-plus closed">
						<div class="circle">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</div>
					<h6 class="accordion active accordion-recommended" id="#accordionExhibitions">EXHIBITIONS</h6>
				</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('exhibitions', 2131) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('exhibitions', 2131) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>		
			<div class="meetings">
				<button class="accordion" id="accordionButtonMeetings">
					<div class="circle-plus closed">
						<div class="circle">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</div>
					<h6 class="accordion active accordion-recommended" id="#accordionMeetings">MEETINGS</h6>
				</button>
				<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('meetings', 2132) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('meetings', 2132) ) : the_row();
								
								$reference = get_sub_field('reference');
							?>
							
				
								<?php the_sub_field('reference'); ?>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo '';

					endif;
					?>
					</div>
				</div>
			</div>		
		</div>
	</section>

	<section id="members">
		<div class="section-title">
			<p>Members</p>
		</div>
		<div class="inside">
			<button class="accordion" id="accordionButtonTeam">
				<div class="circle-plus opened">
					<div class="circle">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</div>
				<span>Team</span>
			</button>

			<div class="panel letmeseeit">
				<div class="within">
				<?php

					// check if the repeater field has rows of data
					if( have_rows('team', 2062) ):
						
						
						// loop through the rows of data for the tab header
						while ( have_rows('team', 2062) ) : the_row();
							
							$name = get_sub_field('name');
							$position = get_sub_field('position');
							$bio = get_sub_field('bio');
							$photo = get_sub_field('photo');
						?>
						
						
							<div class="top">
								<p class="name"><?php the_sub_field('name'); ?></p>
								<p class="position"><?php the_sub_field('position'); ?></p>
								<?php if( get_sub_field('photo') ){ ?>
									<img class="profile-photo" src="<?php the_sub_field('photo'); ?>" alt="">
								<?php } ?>
							</div>
							<div class="bottom">
								<p class="bio"><?php the_sub_field('bio'); ?></p>
							</div>
							<hr>
						

						<?php
					endwhile; //End the loop 

				else :

					// no rows found
					echo 'Come back tomorrow';

				endif;
				?>
				</div>
			</div>

			<button class="accordion" id="accordionButtonAssociated">
				<div class="circle-plus closed">
					<div class="circle">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</div>
				<span>Associated</span>
			</button>

			<div class="panel">
					<div class="within">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('associated', 2062) ):
							
							
							// loop through the rows of data for the tab header
							while ( have_rows('associated', 2062) ) : the_row();
								
								$name = get_sub_field('name');
								$position = get_sub_field('position');
								$bio = get_sub_field('bio');
								$photo = get_sub_field('photo');
							?>
							
								<div class="top">
									<p class="name"><?php the_sub_field('name'); ?></p>
									<p class="position"><?php the_sub_field('position'); ?></p>
									<?php if( get_sub_field('photo') ){ ?>
										<img class="profile-photo" src="<?php the_sub_field('photo'); ?>" alt="">
									<?php } ?>
								</div>
								<div class="bottom">
									<p class="bio"><?php the_sub_field('bio'); ?></p>
								</div>
								<hr>
							

							<?php
						endwhile; //End the loop 

					else :

						// no rows found
						echo 'Come back tomorrow';

					endif;
				?>
				</div>
			</div>

			<button class="accordion" id="accordionButtonAffiliated">
				<div class="circle-plus closed">
					<div class="circle">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</div>
				<span>Affiliated</span>
			</button>

			<div class="panel">
				<div class="within">
				<?php

					// check if the repeater field has rows of data
					if( have_rows('affiliated', 2062) ):
						
						
						// loop through the rows of data for the tab header
						while ( have_rows('affiliated', 2062) ) : the_row();
							
							$name = get_sub_field('name');
							$position = get_sub_field('position');
							$bio = get_sub_field('bio');
							$photo = get_sub_field('photo');
						?>
						
							<div class="top">
								<p class="name"><?php the_sub_field('name'); ?></p>
								<p class="position"><?php the_sub_field('position'); ?></p>
								<?php if( get_sub_field('photo') ){ ?>
									<img class="profile-photo" src="<?php the_sub_field('photo'); ?>" alt="">
								<?php } ?>
							</div>
							<div class="bottom">
								<p class="bio"><?php the_sub_field('bio'); ?></p>
							</div>
							<hr>

						<?php
					endwhile; //End the loop 

				else :

					// no rows found
					echo 'Come back tomorrow';

				endif;
				?>
				</div>
			</div>

			<button class="accordion" id="accordionButtonScientificboard">
				<div class="circle-plus closed">
					<div class="circle">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</div>
				<span>Scientific Board</span>
			</button>

			<div class="panel">
				<div class="within">
				<?php

					// check if the repeater field has rows of data
					if( have_rows('scientific_board', 2062) ):
						
						
						// loop through the rows of data for the tab header
						while ( have_rows('scientific_board', 2062) ) : the_row();
							
							$name = get_sub_field('name');
							$position = get_sub_field('position');
							$bio = get_sub_field('bio');
							$photo = get_sub_field('photo');
						?>
						
							<div class="top">
								<p class="name"><?php the_sub_field('name'); ?></p>
								<p class="position"><?php the_sub_field('position'); ?></p>
								<?php if( get_sub_field('photo') ){ ?>
									<img class="profile-photo" src="<?php the_sub_field('photo'); ?>" alt="">
								<?php } ?>
							</div>
							<div class="bottom">
								<p class="bio"><?php the_sub_field('bio'); ?></p>
							</div>
							<hr>

						<?php
					endwhile; //End the loop 

				else :

					// no rows found
					echo 'Come back tomorrow';

				endif;
				?>
				</div>
			</div>

		</div>

	</section>
	
	<section id="contact">
		<div class="section-title">
			<p>Contact</p>
		</div>
		<div class="additional-mobile" style="display: grid; height: 100%;">
			<div class="inside">
				<div class="left" style="display: flex; flex-direction: column;">
					<p class="logos-text">This project has received funding from the European<br>
					Research Council (ERC) under the European Union’s Horizon<br>
					2020 research and innovation programme.<br>
					Grant agreement No. 834033 AN-ICON.<br>
					</p>
					<a href="https://www.unimi.it/it" target="_blank" rel="noopener noreferrer"><img src="/wp-content/uploads/2020/12/Unimi_dip_filo.png" alt="" style="width: 352px;"></a>
					<a href="https://erc.europa.eu/" target="_blank" rel="noopener noreferrer"><img src="/wp-content/uploads/2020/12/ERC_EU.png" alt="" style="width: 145px;"></a>
				</div>
				<div class="right">
					<div class="links">
						<p class="link">
							<?php 
							$link = get_field('email', 3269);
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="email" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<span style="margin: 0 10px">&#8725;</span>
							<?php endif; ?>
						</p>
						<p class="link">
							<?php 
							$link = get_field('facebook', 3269);
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="email" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</p>
					</div>
					<a class="address" href="https://g.page/Statale?share" target="_blank"><?php the_field('address', 3269); ?></a>
				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<script>
	// Scroll Indicator

	window.onscroll = function() {scrollIndicator()};

	function scrollIndicator() {
	var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	var scrolled = (winScroll / height) * 100;
	document.getElementById("myBar").style.width = scrolled + "%";
	}
</script>

<?php
get_footer();