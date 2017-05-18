<?php
/**
 * Template part for displaying ceremonies content in page-activities.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6 col-xs-12 text-center ceremony'); ?>>
    <div class="panel">
        <?php if(has_post_thumbnail()):?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('event-small');?>
            </div>
        <?php else:?>
            <div class="thumbnail">
                <img src="" alt="">
            </div>
        <?php endif;?>
            <h3 class="cer-title">
                <?php the_field('ceremony_name'); ?>
            </h3>

        <div class="cer-desc">
            <?php   the_field('ceremony_desc');  ?>
        </div>
        <div class="cer-btn-wrap">
            <a href="<?php the_permalink();?>" class="btn ntm-default btn-rradmore cer-btn">Read More</a>
        </div>

    </div>
</article><!-- #post-## -->
