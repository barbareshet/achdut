<?php
/**
 * template Name: Home Page
 *
 * The template for displaying Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */

get_header(); ?>
<?php get_template_part('template-parts/home/content-hp', 'hero');?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

                get_template_part('template-parts/home/content-hp', 'about');
                get_template_part('template-parts/home/content-hp', 'heritage');
                get_template_part('template-parts/home/content-hp', 'breaker');
                get_template_part('template-parts/home/content-hp', 'activities');
                get_template_part('template-parts/home/content-hp', 'events');
                get_template_part('template-parts/home/content-hp', 'breaker');
                get_template_part('template-parts/home/content-hp', 'gallery');
                get_template_part('template-parts/home/content-hp', 'breaker');
                get_template_part('template-parts/home/content-hp', 'blog');
                get_template_part('template-parts/home/content-hp', 'contact');

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
