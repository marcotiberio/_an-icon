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
			<a href="<?php echo home_url(); ?>">
				<svg id="logotype" width="173" height="56" viewBox="0 0 173 56">
					<text id="An-Iconology:_History_Theory_and_Practices_of_Environmental_Images" data-name="An-Iconology: History,
					Theory, and Practices of
					Environmental Images" transform="translate(0 12)" fill="blue" font-size="16" font-family="Helvetica"><tspan x="0" y="0">An-Iconology: History,</tspan><tspan x="0" y="20">Theory, and Practices of</tspan><tspan x="0" y="40">Environmental Images</tspan></text>
				</svg>
			</a>
			<a href="<?php echo home_url(); ?>">
				<svg id="logo" width="60.55" height="58.251" viewBox="0 0 60.55 58.251">
					<path id="Throbber" d="M810.04,611.964a4.55,4.55,0,1,1,0-6.435A4.55,4.55,0,0,1,810.04,611.964Zm.813,34.754a5.7,5.7,0,1,0-8.061,0A5.7,5.7,0,0,0,810.853,646.718Zm-25.42,7.419a6.25,6.25,0,1,0,0-8.839A6.249,6.249,0,0,0,785.433,654.137Zm-17.413-6.588a6.875,6.875,0,1,0,0-9.722A6.875,6.875,0,0,0,768.02,647.549Zm-.8-44.459a8,8,0,1,0,11.313,0A8,8,0,0,0,767.225,603.09Zm51.752,22.627a5.125,5.125,0,1,0-5.125,5.125A5.126,5.126,0,0,0,818.977,625.717Zm-45.7,0a7.425,7.425,0,1,0-7.425,7.425A7.426,7.426,0,0,0,773.277,625.717Zm20.575-24a4,4,0,1,0-4,4A4,4,0,0,0,793.852,601.717Z" transform="translate(-758.427 -597.717)" fill="blue" style="mix-blend-mode: multiply;isolation: isolate"/>
				</svg>
			</a>
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
