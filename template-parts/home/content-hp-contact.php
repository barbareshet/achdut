<div class="container" id="contact">
    <div class="row">
        <div class="col-sm-12 text-center section-title-wrap">
            <h2 class="section-title"><?php the_field('contact_section_title');?></h2>
            <hr class="divider">
        </div>
    </div>
    <div class="row" id="contact-info">
        <?php if( have_rows( 'contact_info' ) ) : ?>
            <?php while ( have_rows( 'contact_info' ) ) : the_row();?>
        <div class="col-md-4 col-sm-12 text-center">
            <div class="icon">
                <i class="<?php the_sub_field('info_icon');?> fa-5x"></i>
            </div>
            <div class="info">
               <?php the_sub_field('info_text');?>
            </div>
        </div>
            <?php endwhile;?>
        <?php endif;?>

    </div>

</div>
<div class="container-fluid" id="hp-map">
    <div class="row">
        <div class="col-sm-12" id="map"></div>
    </div>
</div>