<?php
/**
 * template Name: About Page
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="container" id="about">
                <div class="row">
                    <div class="col-sm-12 text-center section-title-wrap">
                        <h2 class="section-title"><?php the_field('about_section_title');?></h2>
                    </div>
                <?php if( have_posts() ){
                        while ( have_posts() ) : the_post();
                        get_template_part('template-parts/content', 'page-about');
                        endwhile;
                };?>
                </div>
            </div><!--/#about-->
            <hr class="divider">
            <div class="container" id="founders">
                <div class="row">
                    <div class="col-sm-12 text-center section-title-wrap">
                        <h2 class="section-title"><?php the_field('founders_section_title');?></h2>
                    </div>
                    <div class="col-sm-12 text-wrap">
                        <div class="row inner-row">
                            <div class="col-md-6 col-sm-12 image">
                                <img src="http://placehold.it/450x450" alt="founder">
                            </div>
                            <!-- /.col-md-6 col-sm-12 image -->
                            <div class="col-md-6 col-sm-12 text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum delectus doloribus libero molestias quia veniam voluptates. Laudantium possimus quis reprehenderit similique. Adipisci aliquam beatae consectetur culpa dignissimos, doloremque eligendi, enim explicabo fuga fugit ipsam iure laudantium possimus suscipit tenetur. At consectetur cumque cupiditate dicta dignissimos doloribus dolorum, enim exercitationem, magni odio quam ratione reprehenderit, ullam velit veniam vitae voluptatem? Beatae commodi, dicta dolores eveniet fuga fugiat impedit ipsa ipsum modi, mollitia natus nostrum, officia optio qui quis quos rerum veritatis voluptas! Aliquid amet aperiam atque commodi debitis, delectus dolore dolores eligendi ex impedit in laboriosam maiores maxime minima, nam natus odit perspiciatis provident quas quis unde, voluptatem voluptatibus. Alias eveniet ipsa ipsam libero necessitatibus nihil officia officiis omnis pariatur quis. Commodi delectus ipsum provident?</p>
                            </div>
                            <!-- /.col-md-6 col-sm-12 image -->
                        </div>
                        <!-- /.row inner-row -->
                    </div>
                </div>
            </div><!--/#founders-->
            <hr class="divider">
            <div class="container" id="management">
                <div class="row">
                    <div class="col-sm-12 text-center section-title-wrap">
                        <h2 class="section-title"><?php the_field('management_section_title');?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row inner-row slider-row" id="team">
                            <?php
                            $args = array(
                                'post_type'         =>  'members',
                                'posts_per_page'    =>  get_field('management_section_members') ? get_field('management_section_members') : -1 ,
                                'orderby'           => 'title',
                                'order'             => 'DESC'
                            );
                            $tm_query = new WP_Query($args);
                                if( $tm_query->have_posts() ){
                                    while ( $tm_query->have_posts() ) : $tm_query->the_post();
                                    get_template_part('template-parts/content', 'page-about-team');
                                    endwhile;
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!--/#management-->
            <hr class="divider">
            <div class="container" id="future-plans">
                <div class="row">
                    <div class="col-sm-12 text-center section-title-wrap">
                        <h2 class="section-title"><?php the_field('future_section_title');?></h2>
                    </div>
                    <div class="col-sm-12 text-wrap">
                        <div class="row inner-row">
                            <div class="col-md-6 col-sm-12 image">
                                <img src="http://placehold.it/450x450" alt="founder">
                            </div>
                            <!-- /.col-md-6 col-sm-12 image -->
                            <div class="col-md-6 col-sm-12 text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum delectus doloribus libero molestias quia veniam voluptates. Laudantium possimus quis reprehenderit similique. Adipisci aliquam beatae consectetur culpa dignissimos, doloremque eligendi, enim explicabo fuga fugit ipsam iure laudantium possimus suscipit tenetur. At consectetur cumque cupiditate dicta dignissimos doloribus dolorum, enim exercitationem, magni odio quam ratione reprehenderit, ullam velit veniam vitae voluptatem? Beatae commodi, dicta dolores eveniet fuga fugiat impedit ipsa ipsum modi, mollitia natus nostrum, officia optio qui quis quos rerum veritatis voluptas! Aliquid amet aperiam atque commodi debitis, delectus dolore dolores eligendi ex impedit in laboriosam maiores maxime minima, nam natus odit perspiciatis provident quas quis unde, voluptatem voluptatibus. Alias eveniet ipsa ipsam libero necessitatibus nihil officia officiis omnis pariatur quis. Commodi delectus ipsum provident?</p>
                            </div>
                            <!-- /.col-md-6 col-sm-12 image -->
                        </div>
                        <!-- /.row inner-row -->
                    </div>
                </div>
            </div><!--/#founders-->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
