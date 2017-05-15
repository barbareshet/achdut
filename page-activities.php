<?php
/**
 * template Name: Activities Page
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
<?php get_template_part('template-parts/globals/content', 'hero');?>
	<div id="primary" class="content-area ">
		<main id="main" class="site-main container" role="main">
            <div class="col-md-8 col-md-offset-2 col-sm-12 text-center section-title-wrap">
                <h2 class="section-title">Ceremonies</h2>
                <hr class="divider">
            </div>
            <div class="row" id="ceremonies">
	            <?php

	            $c_args = array(
		            'post_type'   => 'ceremonies',
		            'posts_per_page'    => 8,
		            'orderby'   => 'title',
		            'order'     =>'DESC'
	            );

	            $cer_loop = new WP_Query($c_args);
	            while ( $cer_loop->have_posts() ) : $cer_loop->the_post();

		            get_template_part( 'template-parts/content', 'ceremonies' );



	            endwhile; // End of the loop.

	            wp_reset_query();
	            ?>
            </div>
            <div class="row" id="events">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center section-title-wrap">
                    <h2 class="section-title">Upcoming Events</h2>
                    <hr class="divider">
                </div>
                <div class="col-sm-12">

				<?php

				$c_args = array(
					'post_type'   => 'events',
					'posts_per_page'    => 8,
					'orderby'   => 'date',
					'order'     =>'ASC'
				);

				$cer_loop = new WP_Query($c_args);
				while ( $cer_loop->have_posts() ) : $cer_loop->the_post();

					get_template_part( 'template-parts/content', 'events' );



				endwhile; // End of the loop.

				wp_reset_query();
				?>

                </div><!--col-sm-12-->
            </div><!--row-->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
