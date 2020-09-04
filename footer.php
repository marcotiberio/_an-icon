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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(74);} ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
