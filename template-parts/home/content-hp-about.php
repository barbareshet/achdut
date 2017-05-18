<div class="container" id="about">
	<div class="row">
		<div class="col-sm-12 text-center section-title-wrap">
			<h2 class="section-title"><?php the_field('about_section_title');?></h2>
			<hr class="divider">
		</div>
		<div class="col-md-6 col-sm-12 text">
			<?php the_field('about_content');?>
			<div class="readmore-btn-wrap">
				<a href="<?php the_field('about_content_btn_link');?>" class="btn btn-default btn-read,pre">
                    <?php the_field('about_content_btn_text');?>
                </a>
			</div>
		</div>  <!-- /.col-md-6 col-sm-12 text -->
		<div class="col-md-6 col-sm-12 image-wrap">
            <?php $about_image = get_field('about_image');            ?>
			<img src="<?php echo $about_image['url'];?> " alt="<?php echo $about_image['alt'];?>" class="img-responsive">
		</div><!-- /.col- md-6 col-sm-12 image-wrap -->
	</div>
</div><!--/#about-->