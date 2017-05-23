<?php
/**
 * Template part for displaying content of managment slider in about page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */

?>


<div class="col-sm-6 col-xs-12 team-member">

    <div class="thumbnail no-border">
        <a href="<?php the_permalink($post->ID);?>">
            <?php if( has_post_thumbnail() ):?>
                <?php the_post_thumbnail('thumbnail', ['class' => 'img-circle'], $post->ID);?>
            <?php else:?>
                <div class="tm-image text-center">
                    <img src="http://placehold.it/150x150" alt="tm-1" class="img-circle">
                </div><!-- /.tm-image -->
            <?php endif;?>
        </a>
        <div class="tm-info">
            <h4 class="tm-title">
                <?php the_field('member_name');?>
                <small>
                    <?php the_field('member_position');?>
                </small>
                <div class="tm-text">
                    <?php the_field('member_desc');?>
                </div>
                <!-- /.tm-text -->
            </h4>

            <!-- /.tm-title -->
        </div>
        <!-- /.tm-info -->
    </div><!-- /.thumbnail -->
    <div class="tm-readmore-wrap">
        <a href="<?php the_permalink($post->ID);?>" class="btn btn-info btn-readmore">Read More</a>
    </div>
</div><!-- /.col-md-4 col-sm-6 col-xs-12 team-member -->