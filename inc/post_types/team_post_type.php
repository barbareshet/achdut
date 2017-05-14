<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:19 AM
 */
// Register Members Post Type
//Custom Post Types
function member_post_type() {
    $labels = array(
        'name'                  => _x( 'members', 'Post Type General Name', 'achdut' ),
        'singular_name'         => _x( 'member', 'Post Type Singular Name', 'achdut' ),
        'menu_name'             => __( 'members', 'achdut' ),
        'name_admin_bar'        => __( 'members', 'achdut' ),
        'archives'              => __( 'members Archives', 'achdut' ),
        'parent_item_colon'     => __( 'Parent Item:', 'achdut' ),
        'all_items'             => __( 'All members', 'achdut' ),
        'add_new_item'          => __( 'Add New member', 'achdut' ),
        'add_new'               => __( 'Add member', 'achdut' ),
        'new_item'              => __( 'New member', 'achdut' ),
        'edit_item'             => __( 'Edit member', 'achdut' ),
        'update_item'           => __( 'Update member', 'achdut' ),
        'view_item'             => __( 'View member', 'achdut' ),
        'search_items'          => __( 'Search member', 'achdut' ),
        'not_found'             => __( 'member Not found', 'achdut' ),
        'not_found_in_trash'    => __( 'member Not found in Trash', 'achdut' ),
        'featured_image'        => __( 'Featured Image', 'achdut' ),
        'set_featured_image'    => __( 'Set featured image', 'achdut' ),
        'remove_featured_image' => __( 'Remove featured image', 'achdut' ),
        'use_featured_image'    => __( 'Use as featured image', 'achdut' ),
        'insert_into_item'      => __( 'Insert into member', 'achdut' ),
        'uploaded_to_this_item' => __( 'Uploaded to this member', 'achdut' ),
        'items_list'            => __( 'member list', 'achdut' ),
        'items_list_navigation' => __( 'member list navigation', 'achdut' ),
        'filter_items_list'     => __( 'Filter member list', 'achdut' ),
    );
    $args = array(
        'label'                 => __( 'members', 'achdut' ),
        'description'           => __( 'member Description', 'achdut' ),
        'labels'                => $labels,
        'supports'              => array('title' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 22,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-id-alt',
        'capability_type'       => 'post',
    );
    register_post_type( 'members', $args );
}
add_action( 'init', 'member_post_type', 0 );

