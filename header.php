<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anicon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<svg id="logotype" width="173" height="56" viewBox="0 0 173 56">
				<text id="An-Iconology:_History_Theory_and_Practices_of_Environmental_Images" data-name="An-Iconology: History,
				Theory, and Practices of
				Environmental Images" transform="translate(0 12)" fill="blue" font-size="16" font-family="Helvetica"><tspan x="0" y="0">An-Iconology: History,</tspan><tspan x="0" y="20">Theory, and Practices of</tspan><tspan x="0" y="40">Environmental Images</tspan></text>
			</svg>
			<img id="logo" src="http://r26.031.myftpupload.com/wp-content/uploads/2020/09/throbber.png" alt="">
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'anicon' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
