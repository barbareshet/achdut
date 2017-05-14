<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:19 AM
 */
// Register Ceremonies Post Type
//Custom Post Types
function ceremonies_post_type() {
    $labels = array(
        'name'                  => _x( 'Ceremonies', 'Post Type General Name', 'achdut' ),
        'singular_name'         => _x( 'Ceremony', 'Post Type Singular Name', 'achdut' ),
        'menu_name'             => __( 'Ceremonies', 'achdut' ),
        'name_admin_bar'        => __( 'Ceremonies', 'achdut' ),
        'archives'              => __( 'Ceremonies Archives', 'achdut' ),
        'parent_item_colon'     => __( 'Parent Item:', 'achdut' ),
        'all_items'             => __( 'All Ceremonies', 'achdut' ),
        'add_new_item'          => __( 'Add New Ceremony', 'achdut' ),
        'add_new'               => __( 'Add Ceremony', 'achdut' ),
        'new_item'              => __( 'New Ceremony', 'achdut' ),
        'edit_item'             => __( 'Edit Ceremony', 'achdut' ),
        'update_item'           => __( 'Update Ceremony', 'achdut' ),
        'view_item'             => __( 'View Ceremony', 'achdut' ),
        'search_items'          => __( 'Search Ceremony', 'achdut' ),
        'not_found'             => __( 'Ceremony Not found', 'achdut' ),
        'not_found_in_trash'    => __( 'Ceremony Not found in Trash', 'achdut' ),
        'featured_image'        => __( 'Featured Image', 'achdut' ),
        'set_featured_image'    => __( 'Set featured image', 'achdut' ),
        'remove_featured_image' => __( 'Remove featured image', 'achdut' ),
        'use_featured_image'    => __( 'Use as featured image', 'achdut' ),
        'insert_into_item'      => __( 'Insert into Ceremony', 'achdut' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Ceremony', 'achdut' ),
        'items_list'            => __( 'Ceremony list', 'achdut' ),
        'items_list_navigation' => __( 'Ceremony list navigation', 'achdut' ),
        'filter_items_list'     => __( 'Filter Ceremony list', 'achdut' ),
    );
    $args = array(
        'label'                 => __( 'Ceremonies', 'achdut' ),
        'description'           => __( 'Ceremony Description', 'achdut' ),
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
        'menu_icon'             => 'dashicons-shield-alt',
        'capability_type'       => 'post',
    );
    register_post_type( 'ceremonies', $args );
}
add_action( 'init', 'ceremonies_post_type', 0 );