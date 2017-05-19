<div class="container" id="activities">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-12 text-center section-title-wrap">
			<h2 class="section-title"><?php the_field('activities_section_title');?></h2>
			<hr class="divider">
		</div>
	</div>
	<div class="row">
        <?php $activities = get_field('home_page_activities');?>
            <?php if($activities):?>
	        <?php $a = 0; $a_max = 3;
	            foreach ( $activities as $activity ) :?>
		<div class="col-md-3 col-sm-6 col-xs-12 event" id="activity-<?php echo $a;?>">
			<div class="thumbnail">
				<h4 class="event-title"><?php the_field('ceremony_name', $activity->ID);?></h4>
				<ul class="event-info">
					<li class="date"><?php the_field('next_ceremony');?></li>
					<li class="place">Place</li>
					<li class="time">20:00</li>
				</ul>
				<a href="" class="btn btn-default btn-event">See More</a>
			</div>
		</div><!--/.event-->
		            <?php $a++;
		            if($a == $a_max) break;?>
	            <?php endforeach;?>
        <?php endif?>
	</div>
	<div class="row">
		<div class="col-sm-12 text-center btn-wrap">
			<a href="<?php the_field('ceremonies_content_btn_link');?>" class="btn btn-default btn-readmore"><?php the_field('ceremonies_content_btn_text');?></a>
		</div>
		<!-- /.col-sm-12 text-center btn-wrap -->
	</div>
	<!-- /.row -->
</div><!--/#activities-->