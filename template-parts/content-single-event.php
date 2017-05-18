<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */



;?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

	<div class="entry-content">
		<?php

        the_content( );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php achdut_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<aside id="events-sidebar" class="col-md-4 col-sm-12">
    <?php get_sidebar();?>
</aside>
<!-- /#events-sidebar.col-md-4 col-sm-12 -->


