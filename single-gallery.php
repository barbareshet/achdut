<?php
/**
 * The template for displaying all single events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package achdut-israel
 */

get_header();
get_template_part('template-parts/globals/content','hero');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
            <?php $gal_content = get_field('gallery_description');
                if($gal_content):?>
            <div class="row" id="single-gallery-content">
                <div class="col-sm-12">
                    <?php echo $gal_content;?>
                </div>
            </div>
                <?php endif;?>
		<?php


		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single-gallery' );


		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_footer();
