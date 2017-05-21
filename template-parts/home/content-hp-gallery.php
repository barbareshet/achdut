<div class="container" id="gallery">
    <div class="row">
        <div class="col-sm-12 text-center section-title-wrap">
            <h2 class="section-title"><?php the_field('gallery_section_title');?></h2>
            <div class="gallery-section-desc">
                <?php the_field('gallery_section_desc');?>
            </div>
            <hr class="divider">
        </div>
    </div>
    <div class="row" id="hp-gallery">

        <?php

        $images = get_field('home_page_gallery');

        if( $images ): ?>


                <?php  $i = 0; $imax = 9;
                    foreach( $images as $image ):
                       switch ($i){
                           case 0:
                               $class = 'col-md-6';
                               break;
                           case 1:
                               $class = 'col-md-6';
                               break;
                           case 2:
                               $class = 'col-md-4';
                               break;
                           case 3:
                               $class = 'col-md-4';
                               break;
                           case 4:
                               $class = 'col-md-4';
                               break;
                           case 5:
                               $class = 'col-md-3';
                               break;
                           case 6:
                               $class = 'col-md-3';
                               break;
                           case 7:
                               $class = 'col-md-3';
                               break;
                           case 8:
                               $class = 'col-md-3';
                               break;
                           case 9:
                               $i = 0;
                               break;

                       } ?>
                    <div class="<?php echo $class . ' count-'. $i;?> col-sm-12 hp-gallery-image-wrap">
                      <img class="img-responsive hp-gallery-image" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php $i++;
                        if($i == $imax) break;
                endforeach; ?>

        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center btn-wrap">
            <a href="<?php the_field('gallery_content_btn_link');?>" class="btn btn-default btn-readmore"><?php the_field('gallery_content_btn_text');?></a>
        </div>
        <!-- /.col-sm-12 text-center btn-wrap -->
    </div>
</div><!--/#gallery-->