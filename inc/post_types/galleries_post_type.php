<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function gallery_post_type(){
    $labels = array(
        'name' => _x('Gallery', 'achdut'),
        'singular_name' => _x('Gallery', 'achdut'),
        'menu_name' => __('Gallery', 'achdut'),
        'name_admin_bar' => __('Image Gallery', 'achdut'),
        'archives' => __('Gallery  Archives', 'achdut'),
        'parent_item_colon' => __('Parent Item:', 'achdut'),
        'all_items' => __('All Galleries', 'achdut'),
        'add_new_item' => __('Add New Gallery', 'achdut'),
        'add_new' => __('Add Gallery', 'achdut'),
        'new_item' => __('New Gallery', 'achdut'),
        'edit_item' => __('Edit Gallery', 'achdut'),
        'update_item' => __('Update Gallery', 'achdut'),
        'view_item' => __('View Gallery', 'achdut'),
        'search_items' => __('Search a Gallery', 'achdut'),
        'not_found' => __('Gallery Not found', 'achdut'),
        'not_found_in_trash' => __('Gallery Not found in Trash', 'achdut'),
        'featured_image' => __('Featured Image', 'achdut'),
        'set_featured_image' => __('Set featured image', 'achdut'),
        'remove_featured_image' => __('Remove featured image', 'achdut'),
        'use_featured_image' => __('Use as featured image', 'achdut'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'achdut'),
        'items_list' => __('Galleries list', 'achdut'),
        'items_list_navigation' => __('Galleries list navigation', 'achdut'),
        'filter_items_list' => __('Filter Galleries list', 'achdut'),
    );
    $args = array(
        'label' => __('Image Gallery', 'achdut'),
        'description' => __('Image Gallery Description', 'achdut'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'taxonomies' => array('category'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 24,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'capability_type' => 'post',
    );
    register_post_type('gallery', $args);
}
add_action('init', 'gallery_post_type', 0);