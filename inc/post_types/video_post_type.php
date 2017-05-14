<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function video_post_type(){
    $labels = array(
        'name' => _x('videos', 'achdut'),
        'singular_name' => _x('video', 'achdut'),
        'menu_name' => __('Video Gallery', 'achdut'),
        'name_admin_bar' => __('video gallery', 'achdut'),
        'archives' => __('video  Archives', 'achdut'),
        'parent_item_colon' => __('Parent Item:', 'achdut'),
        'all_items' => __('All videos', 'achdut'),
        'add_new_item' => __('Add New video', 'achdut'),
        'add_new' => __('Add video', 'achdut'),
        'new_item' => __('New video', 'achdut'),
        'edit_item' => __('Edit video', 'achdut'),
        'update_item' => __('Update video', 'achdut'),
        'view_item' => __('View video', 'achdut'),
        'search_items' => __('Search a video', 'achdut'),
        'not_found' => __('video Not found', 'achdut'),
        'not_found_in_trash' => __('video Not found in Trash', 'achdut'),
        'featured_image' => __('Featured Image', 'achdut'),
        'set_featured_image' => __('Set featured image', 'achdut'),
        'remove_featured_image' => __('Remove featured image', 'achdut'),
        'use_featured_image' => __('Use as featured image', 'achdut'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'achdut'),
        'items_list' => __('videos list', 'achdut'),
        'items_list_navigation' => __('videos list navigation', 'achdut'),
        'filter_items_list' => __('Filter videos list', 'achdut'),
    );
    $args = array(
        'label' => __('video Gallery', 'achdut'),
        'description' => __('video Gallery Description', 'achdut'),
        'labels' => $labels,
        'supports' => array('title'),
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
        'menu_icon' => 'dashicons-video-alt3',
        'capability_type' => 'post',
    );
    register_post_type('videos', $args);
}
add_action('init', 'video_post_type', 0);