<?php
/** template name: Gallery Page
 * The template for displaying all galleries
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

get_header();
get_template_part('template-parts/globals/content', 'hero');
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row" role="main">
            <?php $gal_page_content = get_field('gallery_page_content');
                if($gal_page_content) :  ?>

            <div class="col-sm-12">
                <?php echo $gal_page_content; ;?>
            </div>
                <?php endif;?>
			<?php

            $args = array(
                'post_type'         =>  'gallery',
                'posts_per_page'    =>  -1,
                'orderby'           =>  'date',
                'order'             =>  'DESC'
            );
            $gal_loop = new WP_Query($args);
            if( $gal_loop->have_posts() ){


                while ( $gal_loop->have_posts() ) : $gal_loop->the_post();?>

              <?php get_template_part( 'template-parts/content', 'page-gallery' );



                endwhile; // End of the loop.
            }
            wp_reset_query();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
