<?php
/**
 * Template part for displaying content for contact page template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<div class="col-sm-12" id="contact-form-wrap">
        <?php the_content();?>
    </div>
    <div class="col-sm-12" id="map">

    </div>
</article><!-- #post-## -->
