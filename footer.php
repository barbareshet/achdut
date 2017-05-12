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

            </div>
        </nav>
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <h4>Recent Posts</h4>
                    <div class="widget-content">
                        <ul id="recent-posts">
                            <li>post</li>
                            <li>post</li>
                            <li>post</li>
                            <li>post</li>
                            <li>post</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <h4>List Categories</h4>
                    <div class="widget-content">
                        <ul id="list-cat">
                            <li>cat</li>
                            <li>cat</li>
                            <li>cat</li>
                            <li>cat</li>
                            <li>cat</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <h4>Upcoming Events</h4>
                    <div class="widget-content">
                        <ul id="upcoming">
                            <li>event</li>
                            <li>event</li>
                            <li>event</li>
                            <li>event</li>
                            <li>event</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
                    <h4>Contact Info</h4>
                    <div class="widget-content">

                    </div>
                </div>
            </div>
        </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'achdut' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'achdut' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'achdut' ), 'achdut', '<a href="https://automattic.com/" rel="designer">Ido Barnea</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
