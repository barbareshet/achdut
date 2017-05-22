<?php

$page_title = get_post_meta($post->ID, 'page title', true);
if ( is_home() && ! is_front_page() ) : ?>
<section id="hero" class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-wrap text-center">
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<?php elseif( is_singular('events') ) :
    $e_bg = get_the_post_thumbnail_url();?>
    <?php if($e_bg):?>
        <section id="hero" class="page-hero event-hero" style="background: url('<?php echo $e_bg;?>') no-repeat center center; background-size: cover;">
    <?php else:?>
        <section id="hero" class="page-hero">

    <?php endif;?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-wrap text-center">
                <h1 id="page-title">
                    <?php echo $page_title ? $page_title : get_the_title();?>
                </h1>
                <div class="row inner-row" id="event-information">
                    <div class="col-md-4 col-xs-4 location">
                        <i class="fa fa-map-marker fa-3x"></i>
                        <!-- /.fa fa-map-marker fa-x5 -->
                        <div>
                            <?php the_field('event_location');?>
                        </div>
                    </div>
                    <!-- /.col-md-3 location -->
                    <div class="col-md-4 col-xs-4 time">
                        <i class="fa fa-clock-o fa-3x"></i>
                        <!-- /.fa fa-map-marker fa-x5 -->
                        <div>
                            <?php the_field('event_date');?>
                        </div>
                    </div>
                    <!-- /.col-md-3 location -->
                    <div class="col-md-4 col-xs-4 directions">
                        <i class="fa fa-location-arrow fa-3x"></i><br>
                        <!-- /.fa fa-map-marker fa-x5 -->
                        <a href="<?php the_field('event_get_directions');?>" target="_blank">
                            Get Directions
                        </a>
                    </div>
                    <!-- /.col-md-3 location -->
                </div>
                <!-- /.row inner-row -->
            </div>
        </div>
    </div>
</section>
    <?php elseif( is_singular('gallery') ) :?>
    <?php $page_title = get_field('gallery_title');?>
    <?php if( has_post_thumbnail() ):?>
        <?php $hero_bg = get_the_post_thumbnail_url();?>
        <section id="hero" class="page-hero page-hero-with-thumbnail" style="background: url('<?php echo $hero_bg;?>') center center no-repeat; background-size: cover;">
    <?php else:?>
        <section id="hero" class="page-hero">
    <?php endif;?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-wrap text-center">
                <h1 id="page-title">
                    <?php echo $page_title ? $page_title : get_the_title();?>
                    <small class="under-title"><?php the_field('secondary_title');?></small>
                </h1>

            </div>
        </div>
    </div>
    </section>
<?php else: ?>
    <?php if( has_post_thumbnail() ):?>
        <?php $hero_bg = get_the_post_thumbnail_url();?>
<section id="hero" class="page-hero page-hero-with-thumbnail" style="background: url('<?php echo $hero_bg;?>') center center no-repeat; background-size: cover;">
    <?php else:?>
<section id="hero" class="page-hero">
    <?php endif;?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-wrap text-center">
                <h1 id="page-title">
                    <?php echo $page_title ? $page_title : get_the_title();?>
                    <small class="under-title"><?php the_field('secondary_title');?></small>
                </h1>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>