<?php
/**
 * Template part for displaying ceremonies content in page-activities.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package achdut-israel
 */

$date = get_field('event_date');
$e_day = date('j', strtotime($date));
$e_month = date('F', strtotime($date));
$e_year = date('Y', strtotime($date));
$e_class = get_field('event_status');
$eclasses = array(
    'row',
    'inner-row',
    $e_class
);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($eclasses); ?>>
    <div class="col-md-3 col-sm-12 event-date">
        <span class="date"><?php echo $e_day;?></span><!-- /.day -->
        <span class="month"><?php echo $e_month;?></span>
        <span class="day">Sunday</span>
    </div><!-- /.col-md-3 col-sm-12 event-date -->
    <div class="col-md-6 col-sm-12 event-info">
        <h4 class="event-title">
            <?php the_field('event_title');?>
        </h4><!-- /.event-title -->
        <div class="event-excerpt">
            <?php the_field('event_desc');?>
        </div><!-- /.event-excerpt -->
    </div><!-- /.col-md-6 col-sm-12 event-info -->
    <div class="col-md-3 col-sm-12 event-readmore">
        <a href="" class="btn btn-default btn-readmore">See More Info</a>
    </div>
    <!-- /.col-md-3 col-sm-12 event-readmore -->
</article><!-- #post-## -->
<hr class="divider event-divider">