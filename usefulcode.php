<section id="publications-test">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="wrapper-event">
					<div class="cover-event" 
					style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
					</div>
					<div class="info-event">
					<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'post' === get_post_type() ) :
							?>
					<?php endif; ?>
						<p>Test Text</p>
					</div>
				</div>
			</div>
		</article>
	</section>