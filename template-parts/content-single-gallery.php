<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */



;?>
<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div id="grid-gallery" class="grid">
        <?php
        the_content( );
        ?>

    </div>
</article><!-- #post-## -->




