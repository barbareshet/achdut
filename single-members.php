<?php
/**
 * The template for displaying all single team member
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package achdut-israel
 */

get_header();
//get_template_part('template-parts/globals/content','hero');
?>

	<div id="primary" class="content-area ">
		<main id="main" class="site-main" role="main">

		<?php


		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single-member' );



		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
