<div class="container" id="events-option-2">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-12 text-center section-title-wrap">
			<h2 class="section-title"><?php the_field('events_section_title');?></h2>
			<hr class="divider">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
            <?php $events = get_field('home_page_events');?>
            <?php if($events) :?>
                <?php $e = 0; $e_max = 4;
                    foreach ( $events as $event ) :?>
                    <?php
                        $date = get_field('event_date');
                        $e_day = date('j', strtotime($date));
                        $e_month = date('F', strtotime($date));
                        $e_year = date('Y', strtotime($date));
                    ?>

			<div class="row inner-row" id="<?php echo 'event-'.$e;?>">
				<div class="col-md-3 col-sm-12 event-date">
					<span class="date"><?php echo $e_day;?></span><!-- /.day -->
					<span class="month"><?php echo $e_month;?></span>

				</div><!-- /.col-md-3 col-sm-12 event-date -->
				<div class="col-md-6 col-sm-12 event-info">
					<h4 class="event-title">
						<?php the_field('event_title', $event->ID);?>
					</h4><!-- /.event-title -->
					<div class="event-excerpt">
						<?php the_field('event_desc', $event->ID);?>
					</div><!-- /.event-excerpt -->
				</div><!-- /.col-md-6 col-sm-12 event-info -->
				<div class="col-md-3 col-sm-12 event-readmore">
					<a href="<?php echo get_permalink( $event->ID ); ?>" class="btn btn-default btn-readmore">See More Info</a>
				</div>
				<!-- /.col-md-3 col-sm-12 event-readmore -->
			</div>
			<!-- /.row inner-row -->
			<hr class="divider event-divider">
                        <?php $e++;
                        if($e == $e_max) break;?>
                <?php endforeach;?>
            <?php endif;?>
		</div><!-- /.col-sm-12 -->
		<div class="col-sm-12 text-center">
			<a href="" class="btn btn-default btn-readmore">See All Events</a>
		</div>
		<!-- /.col-sm-12 text-center -->
	</div>
	<!-- /#evets-option-2.row -->
</div>
<!-- /.container -->