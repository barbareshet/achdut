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
                <div class="row inner-row">
                    <div class="col-md-3 location">
                        <i class="fa fa-map-marker fa-5x"></i>
                        <!-- /.fa fa-map-marker fa-x5 -->
                        <div>Location</div>
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