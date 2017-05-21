<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package achdut-israel
 */

?>

	</section><!-- #content -->

	<footer id="site-footer" class="site-footer" role="contentinfo">
        <nav class="navbar navbar-inverse">
            <div class="container">
                <?php get_template_part('template-parts/globals/content', 'nav-bottom');?>
            </div>
        </nav>
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <?php if(is_active_sidebar('sidebar-footer-left')){
                            dynamic_sidebar('sidebar-footer-left');
                        }
                    ?>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <?php if(is_active_sidebar('sidebar-footer-left-2')){
                        dynamic_sidebar('sidebar-footer-left-2');
                    }
                    ?>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <?php if(is_active_sidebar('sidebar-footer-right-2')){
                        dynamic_sidebar('sidebar-footer-right-2');
                    }
                    ?>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <?php if(is_active_sidebar('sidebar-footer-right')){
                        dynamic_sidebar('sidebar-footer-right');
                    }
                    ?>
                </div>
            </div>
        </div>
		<div class="site-info container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="<?php echo esc_url( __( home_url(), 'achdut' ) ); ?>" rel="nofollow"><?php printf( esc_html__( 'All Rights Reserved %s', 'achdut' ), 'Achdut Israel' ); ?></a>
                    <span class="sep"> | </span>
                    <?php if(is_front_page()):?>
                    <?php printf( esc_html__( '%1$s.', 'achdut' ), '<a href="http://www.barbareshet.co.il" rel="nofollow" target="_blank">Theme Design & Development by Ido Web Services</a>' ); ?>
                    <?php else:?>
                        <?php printf( esc_html__( '%1$s.', 'achdut' ), 'Theme Design & Development by Ido Web Services' ); ?>
                    <?php endif;?>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>


</body>
</html>
