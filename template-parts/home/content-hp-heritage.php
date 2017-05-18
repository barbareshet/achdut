<div class="container" id="heritage">
	<div class="row">
		<div class="col-sm-12 text-center section-title-wrap">
			<h2 class="section-title"><?php the_field('heritage_section_title');?></h2>
			<hr class="divider">
		</div>
		<div class="col-md-6 col-sm-12 image-wrap">
            <?$heritage_image = get_field('heritage_image');?>
			<img src="http://placehold.it/450x450" alt="synagouge" class="img-responsive">
		</div><!-- /.col- md-6 col-sm-12 image-wrap -->
		<div class="col-md-6 col-sm-12 text">
            <?php the_field('heritage_content');?>
            <div class="readmore-btn-wrap">
				<a href="<?php the_field('heritage_content_btn_link');?>" class="btn btn-default btn-read,pre">
                    <?php the_field('heritage_content_btn_text');?>
                </a>
			</div>
		</div>  <!-- /.col-md-6 col-sm-12 text -->
	</div>
</div><!--/#heritage-->