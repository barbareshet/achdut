<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 5/18/2017
 * Time: 7:05 AM
 */


function achdut_register_shortcode(){
    add_shortcode('upcoming_events','achdut_upcoming' );

}
function achdut_upcoming($atts, $content = null){

    global $post;

    //Create attributes and defaults
    $atts = shortcode_atts( array(
        'count' => 5,
        'category'  => 'all'
    ), $atts);

    //Query args
    $args = array(
        'post_type' => 'events',
        'orderby'   => 'date',
        'order' => 'ASC',
        'posts_per_page'    =>  $atts['count'],
        'post__not_in' => array( $post->ID )
    );

    //Fetch Upcoming events
    $upcoming_events = new WP_Query($args);

    if( $upcoming_events->found_posts > 0 ){
        $output = '';
        $output .= '<ul class="upcoming-list">';
        while ( $upcoming_events ->have_posts() ){
            $upcoming_events->the_post();
            //get events name

            $output .= '<li class="coming-event"><a href="'.get_permalink().'">' . get_field('event_title') .' <small>(' .get_field('event_date') . ')</small></a></li>';

        }

        $output .= '</ul>';
        wp_reset_postdata();
        return $output;
    }else{
        return 'no upcoming events';
    }
}

add_action('init', 'achdut_register_shortcode');