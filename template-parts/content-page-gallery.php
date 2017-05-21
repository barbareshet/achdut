<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6 col-xs-12 gallery'); ?>>
    <a href="<?php the_permalink();?>" class="link-to-gallery panel text-center">

        <div class="entry-content">
            <?php	the_post_thumbnail(); ?>
            <h4>
                <?php the_title();?>
            </h4>
        </div><!-- .entry-content -->
    </a>


</article><!-- #post-## -->
