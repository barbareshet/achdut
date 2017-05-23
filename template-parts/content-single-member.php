<?php
/**
 * Template part for displaying team members
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */



?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
<div class="row">
    <div class="col-sm-12">
        <?php the_title();?>
    </div>
</div>
<div class="row">
    <div class="entry-content col-md-6 col-sm-12">
        <?php the_content();?>
    </div><!-- .entry-content -->

    <div class="col-md-6 col-sm-12" id="member-img">
        <?php the_post_thumbnail('team-member');?>
    </div>
</div>
</article><!-- #post-## -->
