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

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a href="<?php echo home_url(); ?>">
			<svg id="logotype" xmlns="http://www.w3.org/2000/svg" width="184.934" height="73.669" viewBox="0 0 184.934 73.669">
				<g transform="translate(-599.787 -353.382)">
					<g id="Group_172" data-name="Group 172">
					</g>
					<g id="Raggruppa_41" data-name="Raggruppa 41">
					<path id="Tracciato_217" data-name="Tracciato 217" d="M605.126,353.684l-5.339,14.28h3.82l.894-2.558h4.988l.875,2.562h3.89l-5.345-14.284Zm1.862,3.96h.04l1.581,5h-3.241Z"/>
					</g>
					<g id="Raggruppa_42" data-name="Raggruppa 42">
					<path id="Tracciato_218" data-name="Tracciato 218" d="M625.52,353.684v8.8h-.04l-4.962-8.8H616.7v14.284h3.5v-8.907h.038l4.962,8.9h3.821V353.684Z"/>
					</g>
					<path id="Tracciato_219" data-name="Tracciato 219" d="M632.651,361.084h6.222v2.882h-6.222Z"/>
					<path id="Tracciato_220" data-name="Tracciato 220" d="M642.519,367.968h3.721V353.684h-3.721Z"/>
					<g id="Group_173" data-name="Group 173">
					<g id="Raggruppa_45" data-name="Raggruppa 45">
						<g id="Raggruppa_43" data-name="Raggruppa 43">
						<path id="Tracciato_221" data-name="Tracciato 221" d="M659.306,358.783a2.59,2.59,0,0,0-2.876-2.2c-2.4,0-3.321,2.126-3.321,4.24s.915,4.241,3.321,4.241a2.651,2.651,0,0,0,2.866-2.418c.006-.074.01-.148.01-.222h3.722c-.2,3.681-2.9,5.843-6.523,5.843a7.034,7.034,0,0,1-7.133-6.931q0-.257.012-.513a7.031,7.031,0,0,1,6.608-7.43c.171-.01.342-.013.513-.011,3.081,0,6.427,1.961,6.523,5.4Z"/>
						</g>
						<g id="Raggruppa_44" data-name="Raggruppa 44">
						<path id="Tracciato_222" data-name="Tracciato 222" d="M672.517,353.383c4.5,0,7.044,3.3,7.044,7.441s-2.542,7.439-7.044,7.439-7.041-3.3-7.041-7.444,2.54-7.436,7.041-7.436m0,11.684c2.4,0,3.321-2.126,3.321-4.243s-.92-4.239-3.321-4.239-3.321,2.12-3.321,4.239.922,4.243,3.321,4.243"/>
						</g>
					</g>
					</g>
					<g id="Raggruppa_46" data-name="Raggruppa 46">
					<path id="Tracciato_224" data-name="Tracciato 224" d="M691.372,353.684v8.8h-.041l-4.961-8.8h-3.82v14.284h3.5v-8.907h.039l4.96,8.9h3.823V353.684Z"/>
					</g>
				</g>
			</svg>

			</a>
			<a href="<?php echo home_url(); ?>">
			<svg id="logo" xmlns="http://www.w3.org/2000/svg" width="75.75" height="72.879" viewBox="0 0 75.75 72.879">
				<g id="throbber" data-name="Group 172" transform="translate(-708.971 -354.172)">
					<g id="Raggruppa_40" data-name="Raggruppa 40">
					<g id="Raggruppa_39" data-name="Raggruppa 39">
						<path id="Tracciato_215" data-name="Tracciato 215" d="M727.048,357.959a10,10,0,0,0-7.084,17.059l.014.014a10,10,0,0,0,14.155-14.125l-.014-.014a9.971,9.971,0,0,0-7.071-2.934m42.466,4.316a5.686,5.686,0,1,0,4.021,1.661,5.687,5.687,0,0,0-4.021-1.661m-51.266,17.64a9.276,9.276,0,0,0-9.277,9.274v0a9.288,9.288,0,1,0,18.577.006v-.006a9.279,9.279,0,0,0-9.28-9.278h-.015m60.055,2.865a6.412,6.412,0,1,0,6.413,6.413,6.411,6.411,0,0,0-6.413-6.413m-51.26,19.051a8.59,8.59,0,1,0,6.111,2.543l-.032-.031a8.565,8.565,0,0,0-6.079-2.512m42.462,1.463a7.131,7.131,0,1,0,7.131,7.131,7.131,7.131,0,0,0-7.131-7.131m-21.232,8.1a7.829,7.829,0,1,0,5.528,2.3,7.828,7.828,0,0,0-5.528-2.3m0-57.222a5.006,5.006,0,1,0,.009,0"/>
					</g>
					</g>
				</g>
			</svg>
			</a>

			<a data-scroll href="#seminars">
				<svg id="logotypeContact" xmlns="http://www.w3.org/2000/svg" width="294.581" height="68.224" viewBox="0 0 294.581 68.224">
					<g id="Group_174" data-name="Group 174" transform="translate(-204.934 -0.002)">
						<path id="Path_518" data-name="Path 518" d="M214.156,25.3v5.2h-4.9V25.3h-3.721V39.585h3.721V33.7h4.9v5.881h3.721V25.3Z" fill="#1d1d1b"/>
						<path id="Path_519" data-name="Path 519" d="M219.975,29.2h3.4V39.586h-3.4Zm3.4-1.3h-3.4V25.3h3.4Z" fill="#1d1d1b"/>
						<g id="Group_174-2" data-name="Group 174">
						<path id="Path_520" data-name="Path 520" d="M228.415,36.164a1.4,1.4,0,0,0,.56,1.16,2.13,2.13,0,0,0,1.26.361c.66,0,1.6-.281,1.6-1.1,0-.8-1.061-.961-1.661-1.1-2.14-.54-4.821-.6-4.821-3.4,0-2.5,2.7-3.181,4.741-3.181,2.28,0,4.661.66,4.781,3.361h-3.14a.978.978,0,0,0-.441-.9,2.006,2.006,0,0,0-1.08-.261c-.56,0-1.46.061-1.46.781,0,.98,2.281,1.16,3.841,1.5a2.943,2.943,0,0,1,2.64,2.8c0,2.781-2.64,3.7-4.981,3.7-2.46,0-4.981-.82-5.081-3.721Z" fill="#1d1d1b"/>
						<path id="Path_521" data-name="Path 521" d="M243.155,31.4h-2.1v4.721c0,.82.48,1,1.22,1,.28,0,.581-.039.88-.039v2.5c-.62.02-1.24.1-1.86.1-2.9,0-3.641-.841-3.641-3.661V31.4h-1.72V29.2h1.72v-3.14h3.4V29.2h2.1Z" fill="#1d1d1b"/>
						<path id="Path_522" data-name="Path 522" d="M249.635,37.284c1.581,0,2.081-1.561,2.081-2.881s-.5-2.9-2.081-2.9-2.061,1.58-2.061,2.9.48,2.881,2.061,2.881m0-8.382a5.323,5.323,0,0,1,5.481,5.5,5.471,5.471,0,1,1-10.942,0,5.307,5.307,0,0,1,5.461-5.5" fill="#1d1d1b"/>
						<path id="Path_523" data-name="Path 523" d="M256.215,29.2h3.3v1.821h.039A3.131,3.131,0,0,1,262.676,29a3.614,3.614,0,0,1,.8.08v3.1a4.764,4.764,0,0,0-1.3-.2,2.388,2.388,0,0,0-2.56,2.461v5.141h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_524" data-name="Path 524" d="M270.675,40.505c-.82,2.281-2.04,2.561-4.341,2.561h-1.6V40.305h1.18a1.207,1.207,0,0,0,1.361-1.16,14.27,14.27,0,0,0-.861-2.721l-2.68-7.222h3.6l1.961,6.762h.039L271.3,29.2h3.48Z" fill="#1d1d1b"/>
						<path id="Path_525" data-name="Path 525" d="M274.074,35.864H277.8v3.3a3.8,3.8,0,0,1-3.721,3.9v-1.6a1.924,1.924,0,0,0,1.64-1.88h-1.64Z" fill="#1d1d1b"/>
						</g>
						<path id="Path_526" data-name="Path 526" d="M296,28.5h-4.261V39.586h-3.72V28.5h-4.261V25.3H296Z" fill="#1d1d1b"/>
						<g id="Group_175" data-name="Group 175">
						<path id="Path_527" data-name="Path 527" d="M297.493,25.3h3.4v5.321h.04A3.622,3.622,0,0,1,304.1,28.9c3.46,0,3.741,2.521,3.741,4.021v6.661h-3.4V34.564c0-1.42.161-2.861-1.7-2.861-1.28,0-1.84,1.08-1.84,2.221v5.661h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_528" data-name="Path 528" d="M317.216,33.324A2.1,2.1,0,0,0,315.2,31.2a2.242,2.242,0,0,0-2.2,2.121Zm-4.221,1.9a2.216,2.216,0,0,0,2.32,2.361,2.028,2.028,0,0,0,1.94-1.141h3.181c-.62,2.4-2.84,3.441-5.161,3.441-3.381,0-5.681-2.04-5.681-5.521a5.449,5.449,0,0,1,5.6-5.462c3.721,0,5.581,2.8,5.422,6.322Z" fill="#1d1d1b"/>
						<path id="Path_529" data-name="Path 529" d="M327.275,37.284c1.58,0,2.08-1.561,2.08-2.881s-.5-2.9-2.08-2.9-2.061,1.58-2.061,2.9.481,2.881,2.061,2.881m0-8.382a5.323,5.323,0,0,1,5.481,5.5,5.471,5.471,0,1,1-10.942,0,5.307,5.307,0,0,1,5.461-5.5" fill="#1d1d1b"/>
						<path id="Path_530" data-name="Path 530" d="M334.254,29.2h3.3v1.821h.04A3.129,3.129,0,0,1,340.715,29a3.629,3.629,0,0,1,.8.08v3.1a4.776,4.776,0,0,0-1.3-.2,2.387,2.387,0,0,0-2.56,2.461v5.141h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_531" data-name="Path 531" d="M348.715,40.505c-.819,2.281-2.04,2.561-4.34,2.561h-1.6V40.305h1.18a1.206,1.206,0,0,0,1.36-1.16,14.266,14.266,0,0,0-.86-2.721L341.774,29.2h3.6l1.96,6.762h.04l1.96-6.762h3.482Z" fill="#1d1d1b"/>
						<path id="Path_532" data-name="Path 532" d="M352.114,35.864h3.721v3.3a3.8,3.8,0,0,1-3.721,3.9v-1.6a1.926,1.926,0,0,0,1.641-1.88h-1.641Z" fill="#1d1d1b"/>
						<path id="Path_533" data-name="Path 533" d="M368.035,37.785c1.62,0,2.16-.921,2.08-3.061a9.6,9.6,0,0,1-2.1.56c-.76.18-1.4.5-1.4,1.32,0,.841.661,1.181,1.421,1.181m-4.4-5.382a3.19,3.19,0,0,1,1.621-2.78,6.845,6.845,0,0,1,3.3-.72c2.46,0,4.841.54,4.841,3.48v4.541a6.027,6.027,0,0,0,.4,2.661h-3.421a4.016,4.016,0,0,1-.2-.98,4.687,4.687,0,0,1-3.421,1.28c-1.981,0-3.541-1-3.541-3.141,0-3.381,3.68-3.12,6.042-3.6.579-.121.9-.321.9-.961,0-.78-.94-1.08-1.64-1.08a1.522,1.522,0,0,0-1.7,1.3Z" fill="#1d1d1b"/>
						<path id="Path_534" data-name="Path 534" d="M375.634,29.2h3.3v1.421h.04a3.918,3.918,0,0,1,3.26-1.721c3.461,0,3.741,2.521,3.741,4.021v6.662h-3.4V34.564c0-1.421.16-2.861-1.7-2.861-1.281,0-1.84,1.08-1.84,2.22v5.662h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_535" data-name="Path 535" d="M391.134,34.284c0,1.42.52,3,2.08,3,1.661,0,2.021-1.58,2.021-2.9,0-1.5-.541-2.88-2.021-2.88-1.56,0-2.08,1.46-2.08,2.781m7.381,5.3h-3.24v-1.2h-.04a3.318,3.318,0,0,1-2.861,1.5c-3.26,0-4.641-2.8-4.641-5.721,0-2.7,1.44-5.262,4.381-5.262a3.475,3.475,0,0,1,2.961,1.421h.039V25.3h3.4Z" fill="#1d1d1b"/>
						<path id="Path_536" data-name="Path 536" d="M410.194,31.944h2.5c1.161,0,2-.481,2-1.781a1.759,1.759,0,0,0-2-1.881h-2.5ZM406.473,25.3h6.782c2.66,0,5.16,1.22,5.16,4.6,0,3.541-2.02,4.921-5.16,4.921h-3.061v4.761h-3.721Z" fill="#1d1d1b"/>
						<path id="Path_537" data-name="Path 537" d="M420.153,29.2h3.3v1.821h.04A3.13,3.13,0,0,1,426.614,29a3.623,3.623,0,0,1,.8.08v3.1a4.765,4.765,0,0,0-1.3-.2,2.388,2.388,0,0,0-2.56,2.461v5.141h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_538" data-name="Path 538" d="M432.815,37.785c1.62,0,2.161-.921,2.08-3.061a9.6,9.6,0,0,1-2.1.56c-.76.18-1.4.5-1.4,1.32,0,.841.661,1.181,1.421,1.181m-4.4-5.382a3.19,3.19,0,0,1,1.621-2.78,6.845,6.845,0,0,1,3.3-.72c2.46,0,4.841.54,4.841,3.48v4.541a6.027,6.027,0,0,0,.4,2.661h-3.421a4.016,4.016,0,0,1-.2-.98,4.687,4.687,0,0,1-3.421,1.28c-1.981,0-3.541-1-3.541-3.141,0-3.381,3.68-3.12,6.042-3.6.579-.121.9-.321.9-.961,0-.78-.94-1.08-1.64-1.08a1.522,1.522,0,0,0-1.7,1.3Z" fill="#1d1d1b"/>
						<path id="Path_539" data-name="Path 539" d="M447.175,33a1.6,1.6,0,0,0-1.66-1.5c-1.9,0-2.2,1.62-2.2,3.061,0,1.339.579,2.72,2.02,2.72a1.822,1.822,0,0,0,1.94-1.781h3.3c-.3,2.781-2.461,4.381-5.221,4.381a5.168,5.168,0,0,1-5.441-5.32c0-3.3,2.1-5.662,5.441-5.662,2.58,0,4.881,1.36,5.121,4.1Z" fill="#1d1d1b"/>
						<path id="Path_540" data-name="Path 540" d="M458.535,31.4h-2.1v4.721c0,.82.48,1,1.22,1,.28,0,.58-.039.88-.039v2.5c-.62.02-1.241.1-1.861.1-2.9,0-3.64-.841-3.64-3.661V31.4h-1.72V29.2h1.72v-3.14h3.4V29.2h2.1Z" fill="#1d1d1b"/>
						</g>
						<path id="Path_541" data-name="Path 541" d="M460.173,29.2h3.4V39.586h-3.4Zm3.4-1.3h-3.4V25.3h3.4Z" fill="#1d1d1b"/>
						<g id="Group_176" data-name="Group 176">
						<path id="Path_542" data-name="Path 542" d="M472.735,33a1.6,1.6,0,0,0-1.661-1.5c-1.9,0-2.2,1.62-2.2,3.061,0,1.339.58,2.72,2.02,2.72a1.823,1.823,0,0,0,1.941-1.781h3.3c-.3,2.781-2.461,4.381-5.22,4.381a5.168,5.168,0,0,1-5.442-5.32c0-3.3,2.1-5.662,5.442-5.662,2.579,0,4.88,1.36,5.121,4.1Z" fill="#1d1d1b"/>
						<path id="Path_543" data-name="Path 543" d="M484.954,33.324a2.1,2.1,0,0,0-2.02-2.121,2.242,2.242,0,0,0-2.2,2.121Zm-4.22,1.9a2.216,2.216,0,0,0,2.32,2.361,2.028,2.028,0,0,0,1.94-1.141h3.181c-.62,2.4-2.84,3.441-5.161,3.441-3.381,0-5.681-2.04-5.681-5.521a5.449,5.449,0,0,1,5.6-5.462c3.721,0,5.581,2.8,5.422,6.322Z" fill="#1d1d1b"/>
						<path id="Path_544" data-name="Path 544" d="M492.694,36.164a1.4,1.4,0,0,0,.56,1.16,2.131,2.131,0,0,0,1.26.361c.66,0,1.6-.281,1.6-1.1,0-.8-1.061-.961-1.661-1.1-2.14-.54-4.821-.6-4.821-3.4,0-2.5,2.7-3.181,4.741-3.181,2.28,0,4.661.66,4.781,3.361h-3.14a.978.978,0,0,0-.441-.9,2.006,2.006,0,0,0-1.08-.261c-.56,0-1.46.061-1.46.781,0,.98,2.281,1.16,3.841,1.5a2.943,2.943,0,0,1,2.64,2.8c0,2.781-2.64,3.7-4.981,3.7-2.46,0-4.981-.82-5.081-3.721Z" fill="#1d1d1b"/>
						<path id="Path_545" data-name="Path 545" d="M210.4,62.285c1.58,0,2.08-1.561,2.08-2.881s-.5-2.9-2.08-2.9-2.06,1.58-2.06,2.9.48,2.881,2.06,2.881m0-8.382a5.491,5.491,0,1,1-5.461,5.5,5.323,5.323,0,0,1,5.461-5.5" fill="#1d1d1b"/>
						<path id="Path_546" data-name="Path 546" d="M218.394,56.4h-1.641V54.2h1.641c0-2.98,1.04-3.9,3.941-3.9.539,0,1.1.039,1.64.059v2.4a7.355,7.355,0,0,0-.92-.06c-.781,0-1.26.1-1.26,1.041V54.2h2.04v2.2h-2.04v8.182h-3.4Z" fill="#1d1d1b"/>
						</g>
						<path id="Path_547" data-name="Path 547" d="M231.494,50.3h11.382v2.98h-7.661v2.5h7v2.881h-7v2.721h7.861v3.2H231.494Z" fill="#1d1d1b"/>
						<g id="Group_177" data-name="Group 177">
						<path id="Path_548" data-name="Path 548" d="M245.054,54.2h3.3v1.421h.04a3.921,3.921,0,0,1,3.261-1.721c3.461,0,3.74,2.521,3.74,4.021v6.663h-3.4V59.565c0-1.422.161-2.862-1.7-2.862-1.281,0-1.841,1.08-1.841,2.22v5.663h-3.4Z" fill="#1d1d1b"/>
						</g>
						<path id="Path_549" data-name="Path 549" d="M263.836,64.585h-3.921L256.454,54.2h3.541l1.9,6.862h.039l1.921-6.862h3.46Z" fill="#1d1d1b"/>
						<path id="Path_550" data-name="Path 550" d="M268.513,54.2h3.4V64.586h-3.4Zm3.4-1.3h-3.4V50.3h3.4Z" fill="#1d1d1b"/>
						<g id="Group_178" data-name="Group 178">
						<path id="Path_551" data-name="Path 551" d="M274.433,54.2h3.3v1.821h.04A3.13,3.13,0,0,1,280.9,54a3.626,3.626,0,0,1,.8.08v3.1a4.775,4.775,0,0,0-1.3-.2,2.388,2.388,0,0,0-2.561,2.462v5.141h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_552" data-name="Path 552" d="M287.435,62.285c1.581,0,2.081-1.561,2.081-2.881s-.5-2.9-2.081-2.9-2.06,1.58-2.06,2.9.48,2.881,2.06,2.881m0-8.382a5.491,5.491,0,1,1-5.46,5.5,5.324,5.324,0,0,1,5.46-5.5" fill="#1d1d1b"/>
						<path id="Path_553" data-name="Path 553" d="M294.694,54.2h3.3v1.421h.04A3.92,3.92,0,0,1,301.3,53.9c3.46,0,3.741,2.521,3.741,4.021v6.663h-3.4V59.565c0-1.422.161-2.862-1.7-2.862-1.28,0-1.84,1.08-1.84,2.22v5.663h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_554" data-name="Path 554" d="M307.293,54.2h3.3v1.421h.04a3.46,3.46,0,0,1,2.98-1.721,3,3,0,0,1,3.022,1.68,3.8,3.8,0,0,1,3.241-1.68c3.3,0,3.661,2.5,3.661,4.481v6.2h-3.4v-6.1c0-1.12-.54-1.78-1.42-1.78-1.462,0-1.6,1.12-1.6,2.8v5.082h-3.4v-5.9c0-1.22-.36-1.98-1.281-1.98-1.22,0-1.74.7-1.74,2.821v5.062h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_555" data-name="Path 555" d="M332.936,58.324a2.1,2.1,0,0,0-2.021-2.121,2.242,2.242,0,0,0-2.2,2.121Zm-4.221,1.9a2.217,2.217,0,0,0,2.32,2.361,2.029,2.029,0,0,0,1.941-1.141h3.18c-.619,2.4-2.839,3.441-5.16,3.441-3.382,0-5.683-2.04-5.683-5.521a5.45,5.45,0,0,1,5.6-5.461c3.721,0,5.582,2.8,5.422,6.321Z" fill="#1d1d1b"/>
						<path id="Path_556" data-name="Path 556" d="M338.034,54.2h3.3v1.421h.041a3.919,3.919,0,0,1,3.26-1.721c3.462,0,3.741,2.521,3.741,4.021v6.663h-3.4V59.565c0-1.422.16-2.862-1.7-2.862-1.28,0-1.841,1.08-1.841,2.22v5.663h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_557" data-name="Path 557" d="M356.9,56.4h-2.1v4.721c0,.82.48,1,1.22,1,.28,0,.58-.039.88-.039v2.5c-.62.02-1.24.1-1.861.1-2.9,0-3.64-.841-3.64-3.661V56.4h-1.72V54.2h1.72v-3.14h3.4V54.2h2.1Z" fill="#1d1d1b"/>
						<path id="Path_558" data-name="Path 558" d="M362.676,62.785c1.62,0,2.16-.921,2.079-3.061a9.571,9.571,0,0,1-2.1.56c-.76.18-1.4.5-1.4,1.32,0,.841.66,1.181,1.421,1.181m-4.4-5.382a3.194,3.194,0,0,1,1.621-2.78,6.849,6.849,0,0,1,3.3-.72c2.46,0,4.84.54,4.84,3.48v4.541a6.027,6.027,0,0,0,.4,2.661h-3.421a4.062,4.062,0,0,1-.2-.98,4.686,4.686,0,0,1-3.42,1.28c-1.981,0-3.541-1-3.541-3.141,0-3.381,3.68-3.12,6.041-3.6.58-.121.9-.321.9-.961,0-.78-.94-1.08-1.64-1.08a1.521,1.521,0,0,0-1.7,1.3Z" fill="#1d1d1b"/>
						</g>
						<rect id="Rectangle_130" data-name="Rectangle 130" width="3.401" height="14.283" transform="translate(370.394 50.302)" fill="#1d1d1b"/>
						<rect id="Rectangle_131" data-name="Rectangle 131" width="3.721" height="14.283" transform="translate(381.834 50.302)" fill="#1d1d1b"/>
						<g id="Group_179" data-name="Group 179">
						<path id="Path_559" data-name="Path 559" d="M387.993,54.2h3.3v1.421h.04a3.462,3.462,0,0,1,2.98-1.721,3,3,0,0,1,3.021,1.68,3.807,3.807,0,0,1,3.241-1.68c3.3,0,3.661,2.5,3.661,4.481v6.2h-3.4v-6.1c0-1.12-.54-1.78-1.421-1.78-1.46,0-1.6,1.12-1.6,2.8v5.082h-3.4v-5.9c0-1.22-.359-1.98-1.279-1.98-1.221,0-1.741.7-1.741,2.821v5.062h-3.4Z" fill="#1d1d1b"/>
						<path id="Path_560" data-name="Path 560" d="M410.774,62.785c1.62,0,2.161-.921,2.081-3.061a9.628,9.628,0,0,1-2.1.56c-.761.18-1.4.5-1.4,1.32,0,.841.66,1.181,1.42,1.181m-4.4-5.382a3.192,3.192,0,0,1,1.621-2.78,6.848,6.848,0,0,1,3.3-.72c2.461,0,4.841.54,4.841,3.48v4.541a6.027,6.027,0,0,0,.4,2.661h-3.421a4.062,4.062,0,0,1-.2-.98,4.686,4.686,0,0,1-3.421,1.28c-1.98,0-3.541-1-3.541-3.141,0-3.381,3.681-3.12,6.042-3.6.58-.121.9-.321.9-.961,0-.78-.939-1.08-1.639-1.08a1.521,1.521,0,0,0-1.7,1.3Z" fill="#1d1d1b"/>
						<path id="Path_561" data-name="Path 561" d="M423.155,56.5c-1.5,0-1.981,1.32-1.981,2.6,0,1.221.561,2.441,1.961,2.441,1.441,0,2.06-1.12,2.06-2.421,0-1.321-.52-2.621-2.04-2.621m5.261,6.822c0,1.7-.32,4.9-5.181,4.9-2.421,0-4.7-.54-5.1-3.32h3.4a1.108,1.108,0,0,0,.58.9,2.7,2.7,0,0,0,1.24.22c1.621,0,1.781-1.14,1.781-2.421v-.98H425.1a3.285,3.285,0,0,1-2.76,1.52c-3.141,0-4.563-2.24-4.563-5.161,0-2.761,1.622-5.082,4.563-5.082a3,3,0,0,1,2.78,1.6h.041V54.2h3.26Z" fill="#1d1d1b"/>
						<path id="Path_562" data-name="Path 562" d="M437.715,58.324a2.1,2.1,0,0,0-2.021-2.121,2.242,2.242,0,0,0-2.2,2.121Zm-4.221,1.9a2.216,2.216,0,0,0,2.321,2.361,2.028,2.028,0,0,0,1.94-1.141h3.18c-.62,2.4-2.84,3.441-5.161,3.441-3.38,0-5.68-2.04-5.68-5.521a5.448,5.448,0,0,1,5.6-5.461c3.721,0,5.582,2.8,5.422,6.321Z" fill="#1d1d1b"/>
						<path id="Path_563" data-name="Path 563" d="M445.454,61.164a1.393,1.393,0,0,0,.561,1.16,2.127,2.127,0,0,0,1.259.361c.661,0,1.6-.281,1.6-1.1,0-.8-1.06-.961-1.66-1.1-2.141-.54-4.821-.6-4.821-3.4,0-2.5,2.7-3.181,4.741-3.181,2.28,0,4.66.66,4.78,3.361h-3.14a.978.978,0,0,0-.44-.9,2.011,2.011,0,0,0-1.08-.261c-.561,0-1.461.061-1.461.781,0,.98,2.281,1.16,3.842,1.5a2.943,2.943,0,0,1,2.64,2.8c0,2.781-2.64,3.7-4.982,3.7-2.46,0-4.98-.82-5.08-3.721Z" fill="#1d1d1b"/>
						</g>
						<path id="Path_564" data-name="Path 564" d="M212.586,4.264h.041l1.579,5h-3.241ZM210.726.3l-5.342,14.283h3.822l.9-2.56h4.98l.881,2.56h3.88L214.507.3Z" fill="#1d1d1b"/>
						<path id="Path_565" data-name="Path 565" d="M222.285.3h3.821l4.961,8.8h.04V.3h3.5V14.585h-3.821l-4.96-8.9h-.041v8.9h-3.5Z" fill="#1d1d1b"/>
						<rect id="Rectangle_132" data-name="Rectangle 132" width="6.222" height="2.881" transform="translate(238.225 7.704)" fill="#1d1d1b"/>
						<rect id="Rectangle_133" data-name="Rectangle 133" width="3.721" height="14.283" transform="translate(248.085 0.302)" fill="#1d1d1b"/>
						<g id="Group_180" data-name="Group 180">
						<path id="Path_566" data-name="Path 566" d="M264.867,5.4a2.589,2.589,0,0,0-2.88-2.2c-2.4,0-3.321,2.12-3.321,4.241s.92,4.241,3.321,4.241a2.651,2.651,0,0,0,2.88-2.641h3.721c-.2,3.681-2.9,5.841-6.521,5.841-4.321,0-7.122-3.3-7.122-7.441S257.746,0,262.067,0c3.08,0,6.421,1.961,6.521,5.4Z" fill="#1d1d1b"/>
						<path id="Path_567" data-name="Path 567" d="M278.066,11.686c2.4,0,3.321-2.121,3.321-4.243s-.921-4.24-3.321-4.24-3.321,2.12-3.321,4.24.921,4.243,3.321,4.243m0-11.684c4.5,0,7.042,3.3,7.042,7.441s-2.541,7.443-7.042,7.443-7.042-3.3-7.042-7.443S273.566,0,278.066,0" fill="#1d1d1b"/>
						</g>
						<path id="Path_568" data-name="Path 568" d="M288.085.3h3.821l4.961,8.8h.04V.3h3.5V14.585h-3.821l-4.961-8.9h-.04v8.9h-3.5Z" fill="#1d1d1b"/>
						<g id="Group_181" data-name="Group 181">
						<path id="Path_569" data-name="Path 569" d="M310.447,11.686c2.4,0,3.321-2.121,3.321-4.243s-.921-4.24-3.321-4.24-3.321,2.12-3.321,4.24.921,4.243,3.321,4.243m0-11.684c4.5,0,7.042,3.3,7.042,7.441s-2.541,7.443-7.042,7.443-7.042-3.3-7.042-7.443S305.947,0,310.447,0" fill="#1d1d1b"/>
						</g>
						<path id="Path_570" data-name="Path 570" d="M320.505.3h3.721V11.385h6.661v3.2H320.505Z" fill="#1d1d1b"/>
						<g id="Group_182" data-name="Group 182">
						<path id="Path_571" data-name="Path 571" d="M340.227,11.686c2.4,0,3.32-2.121,3.32-4.243s-.92-4.24-3.32-4.24-3.321,2.12-3.321,4.24.92,4.243,3.321,4.243m0-11.684c4.5,0,7.043,3.3,7.043,7.441s-2.542,7.443-7.043,7.443-7.042-3.3-7.042-7.443S335.726,0,340.227,0" fill="#1d1d1b"/>
						<path id="Path_572" data-name="Path 572" d="M363.469,14.586h-2.4l-.22-1.56a4.867,4.867,0,0,1-3.981,1.86c-4.32,0-7.121-3.3-7.121-7.442S352.547,0,356.867,0c2.961,0,6.122,1.581,6.462,5.162h-3.721c-.12-1.22-1.32-1.96-2.82-1.96-2.4,0-3.321,2.12-3.321,4.24s.92,4.242,3.321,4.242c1.84,0,3.08-.86,3.28-2.161h-2.6V6.765h6Z" fill="#1d1d1b"/>
						</g>
						<path id="Path_573" data-name="Path 573" d="M374.108,9.264v5.321h-3.721V9.264L365.186.3h4.221l2.841,5.8,2.84-5.8h4.221Z" fill="#1d1d1b"/>
					</g>
					</svg>

			</a>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" id="buttonMenu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'anicon' ); ?></button>
			<div class="menu-main-container">
				<ul id="primary-menu" class="menu">
					<li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38"><a data-scroll href="#seminars">Seminars</a></li>
					<li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34"><a data-scroll href="#events">Events</a></li>
					<li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><a data-scroll href="#publications">Publications</a></li>
					<li id="menu-item-2073" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2073"><a data-scroll href="#recommended">Recommended</a></li>
					<li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37"><a data-scroll href="#members">Members</a></li>
					<li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><a data-scroll href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->

		
		<nav id="mobile-navigation" class="mobile-navigation">
		<button id="menuToggle" type="button">
			<span id="mobileMenuText">Menu</span>
			<img id="mobileMenuPlus" src="/wp-content/uploads/2021/01/plus.png">
		</button>
		<div class="menu-mobile-menu-container">
			<ul id="mobile-menu" class="menu">
				<li id="menu-item-2197" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2197"><a data-scroll href="#seminars" aria-current="page">Seminars</a></li>
				<li id="menu-item-2198" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2198"><a data-scroll href="#events" aria-current="page">Events</a></li>
				<li id="menu-item-2199" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2199"><a data-scroll href="#publications" aria-current="page">Publications</a></li>
				<li id="menu-item-2200" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2200"><a data-scroll href="#recommended" aria-current="page">Recommended</a></li>
				<li id="menu-item-2201" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2201"><a data-scroll href="#members" aria-current="page">Members</a></li>
				<li id="menu-item-2202" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2202"><a data-scroll href="#contact" aria-current="page">Contact</a></li>
			</ul>
		</div>
		</nav><!-- #mobile-navigation -->

	</header><!-- #masthead -->

	<div class="logos-top">
		<p style="font-size: 12px; line-height: 15px;">This project has received funding from the European<br>
		Research Council (ERC) under the European Union’s Horizon<br>
		2020 research and innovation programme.<br>
		Grant agreement No. 834033 AN-ICON.<br>
		</p>
		<img src="/wp-content/uploads/2020/12/Unimi_dip_filo.png" alt="">
		<img src="/wp-content/uploads/2020/12/ERC_EU.png" alt="">
	</div>
