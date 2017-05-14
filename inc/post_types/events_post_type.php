<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:19 AM
 */
// Register Events Post Type
//Custom Post Types
function events_post_type() {
    $labels = array(
        'name'                  => _x( 'Events', 'Post Type General Name', 'achdut' ),
        'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'achdut' ),
        'menu_name'             => __( 'Events', 'achdut' ),
        'name_admin_bar'        => __( 'Events', 'achdut' ),
        'archives'              => __( 'Events Archives', 'achdut' ),
        'parent_item_colon'     => __( 'Parent Item:', 'achdut' ),
        'all_items'             => __( 'All Events', 'achdut' ),
        'add_new_item'          => __( 'Add New Event', 'achdut' ),
        'add_new'               => __( 'Add Event', 'achdut' ),
        'new_item'              => __( 'New Event', 'achdut' ),
        'edit_item'             => __( 'Edit Event', 'achdut' ),
        'update_item'           => __( 'Update Event', 'achdut' ),
        'view_item'             => __( 'View Event', 'achdut' ),
        'search_items'          => __( 'Search Event', 'achdut' ),
        'not_found'             => __( 'Event Not found', 'achdut' ),
        'not_found_in_trash'    => __( 'Event Not found in Trash', 'achdut' ),
        'featured_image'        => __( 'Featured Image', 'achdut' ),
        'set_featured_image'    => __( 'Set featured image', 'achdut' ),
        'remove_featured_image' => __( 'Remove featured image', 'achdut' ),
        'use_featured_image'    => __( 'Use as featured image', 'achdut' ),
        'insert_into_item'      => __( 'Insert into Event', 'achdut' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Event', 'achdut' ),
        'items_list'            => __( 'Event list', 'achdut' ),
        'items_list_navigation' => __( 'Event list navigation', 'achdut' ),
        'filter_items_list'     => __( 'Filter Event list', 'achdut' ),
    );
    $args = array(
        'label'                 => __( 'Events', 'achdut' ),
        'description'           => __( 'Event Description', 'achdut' ),
        'labels'                => $labels,
        'supports'              => array('title','thumbnail' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-calendar-alt',
        'capability_type'       => 'post',
    );
    register_post_type( 'events', $args );
}
add_action( 'init', 'events_post_type', 0 );