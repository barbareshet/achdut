<?php


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
<?php elseif( is_singular('events') ) :?>
<section id="hero" class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-wrap text-center">
                <h1 id="page-title">
                    <?php the_title();?>
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
<?php else: ?>
<section id="hero" class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 title-wrap text-center">
                <h1 id="page-title">
                    <?php the_title();?>
                    <small class="under-title"><?php the_field('secondary_title');?></small>
                </h1>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>