<?php
/**
 * Template Name: Front Page
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

<main id="primary" class="site-main">

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>


	<section class="intro-text">
		<div></div>
		<div>
			<p>
				Recent developments in image-making techniques have resulted in a drastic blurring of the threshold
				between the world of the image and the real world. Immersive and interactive virtual environments (VEs)
				have enabled the production of pictures that elicit an unprecedented reality effect, creating in the
				perceiver a strong feeling of “being there”, namely of being incorporated into a quasi-real world. In
				doing so, they conceal their material mediateness (by simulating immediateness), their separateness (by
				aiming at unframedness), and their referentiality (by emphasizing presentness), paradoxically
				challenging their status as images, i.e. as icons: they are veritable “an-icons”. Subjects relating to
				an-icons are no longer visual observers of images isolated from the real world by a framing device (be
				it the pedestal of a statue, the frame of a painting, or the cinema screen); they are experiencers
				living in a quasi-real space-time that offers multisensory and synaesthetic stimuli and allows
				interactive sensorimotor affordances, promoting an environmentalization of the image.

				Nowadays, these experiencers are digital natives who grow up interacting with touch screens from their
				earliest years; but in relation to immersive VEs they are still “immigrants” who need to acquire
				familiarity with an-iconic transformations of sensibility. However, given the pace of technological
				development and the huge amount of economic and scientific investments in virtual reality (VR) on a
				global scale, digital aniconic natives are to be expected in a very near future. Head Mounted Displays
				(HMD) are already in use as new interfaces for personal computers (Oculus Rift and HTC Vive) and video
				game consoles (Sony PlayStation VR), or mimicked by low-budget smartphone wearables (Google Cardboard
				and Samsung Gear VR). Virtual Retinal Displays (VRD, like Magic Leap One) and increasingly cheaper and
				standalone devices (Oculus Go) have already been released in 2018.

				AN-ICON aims to develop “an-iconology” as a new paradigm able to address this challenging iconoscape.
				Because of the complexity of such an iconoscape, its approach needs to be articulated in a
				transdisciplinary way and to adopt a transmedial perspective. The project will be structured in three
				tightly interconnected Research Clusters: A) HISTORY: a media-historical investigation will provide a
				taxonomy of the manifold an-iconic strategies and dispositifs (e.g. illusionistic painting,
				pre-cinematic devices, 3D films, videogames, head mounted displays), taking at the same time into
				consideration significant countertendencies; B) THEORY: drawing on phenomenology, visual culture studies
				and techno-aesthetics, the research will clarify the specific nature of an-iconic involvements and
				identify the key concepts for their understanding; C) PRACTICES: a socio-cultural section will explore
				the impact of an-iconic environments on contemporary professional domains as well as on everyday life.
				An-iconic applications have become a cutting-edge topic, raising ethical, legal, and socio-political
				issues that will be specifically addressed by the project. Assuming the fundamental historicity of
				perception, AN-ICON will tackle this urgent challenge that is going to radically change human relations
				to images and to experience as a whole. The three clusters will converge towards the following
				overarching question: to what extent is this new iconoscape promoting a novel interplay between the body
				and technology, and so modifying human sensibility in its individual and social articulations?
			</p>
		</div>
	</section>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();