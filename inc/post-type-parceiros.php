<?php

/**
 * Avives post type parceiros
 * @package Avives
 */

// Register Custom Post Type
function custom_post_type_parceiro()
{

    $labels = array(
        'name'                  => _x('Parceiros', 'Post Type General Name', 'parceiro'),
        'singular_name'         => _x('Parceiro', 'Post Type Singular Name', 'parceiro'),
        'menu_name'             => __('Parceiros', 'parceiro'),
        'name_admin_bar'        => __('Parceiros', 'parceiro'),
        'archives'              => __('Item Archives', 'parceiro'),
        'attributes'            => __('Item Attributes', 'parceiro'),
        'parent_item_colon'     => __('Parent Item:', 'parceiro'),
        'all_items'             => __('All Items', 'parceiro'),
        'add_new_item'          => __('Add New Item', 'parceiro'),
        'add_new'               => __('Add New', 'parceiro'),
        'new_item'              => __('New Item', 'parceiro'),
        'edit_item'             => __('Edit Item', 'parceiro'),
        'update_item'           => __('Update Item', 'parceiro'),
        'view_item'             => __('View Item', 'parceiro'),
        'view_items'            => __('View Items', 'parceiro'),
        'search_items'          => __('Search Item', 'parceiro'),
        'not_found'             => __('Not found', 'parceiro'),
        'not_found_in_trash'    => __('Not found in Trash', 'parceiro'),
        'featured_image'        => __('Featured Image', 'parceiro'),
        'set_featured_image'    => __('Set featured image', 'parceiro'),
        'remove_featured_image' => __('Remove featured image', 'parceiro'),
        'use_featured_image'    => __('Use as featured image', 'parceiro'),
        'insert_into_item'      => __('Insert into item', 'parceiro'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'parceiro'),
        'items_list'            => __('Items list', 'parceiro'),
        'items_list_navigation' => __('Items list navigation', 'parceiro'),
        'filter_items_list'     => __('Filter items list', 'parceiro'),
    );
    $args = array(
        'label'                 => __('Parceiro', 'parceiro'),
        'description'           => __('Parceiros post type', 'parceiro'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor'),
        'taxonomies'            => array('parceiro'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => false,
    );
    register_post_type('parceiro', $args);
}
add_action('init', 'custom_post_type_parceiro', 0);
