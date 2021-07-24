<?php

/**
 * Avives post type associados
 * @package Avives
 */

// Register Custom Post Type
function custom_post_type_associado()
{

    $labels = array(
        'name'                  => _x('Associados', 'Post Type General Name', 'associado'),
        'singular_name'         => _x('Associado', 'Post Type Singular Name', 'associado'),
        'menu_name'             => __('Associados', 'associado'),
        'name_admin_bar'        => __('Associados', 'associado'),
        'archives'              => __('Item Archives', 'associado'),
        'attributes'            => __('Item Attributes', 'associado'),
        'parent_item_colon'     => __('Parent Item:', 'associado'),
        'all_items'             => __('All Items', 'associado'),
        'add_new_item'          => __('Add New Item', 'associado'),
        'add_new'               => __('Add New', 'associado'),
        'new_item'              => __('New Item', 'associado'),
        'edit_item'             => __('Edit Item', 'associado'),
        'update_item'           => __('Update Item', 'associado'),
        'view_item'             => __('View Item', 'associado'),
        'view_items'            => __('View Items', 'associado'),
        'search_items'          => __('Search Item', 'associado'),
        'not_found'             => __('Not found', 'associado'),
        'not_found_in_trash'    => __('Not found in Trash', 'associado'),
        'featured_image'        => __('Featured Image', 'associado'),
        'set_featured_image'    => __('Set featured image', 'associado'),
        'remove_featured_image' => __('Remove featured image', 'associado'),
        'use_featured_image'    => __('Use as featured image', 'associado'),
        'insert_into_item'      => __('Insert into item', 'associado'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'associado'),
        'items_list'            => __('Items list', 'associado'),
        'items_list_navigation' => __('Items list navigation', 'associado'),
        'filter_items_list'     => __('Filter items list', 'associado'),
    );
    $args = array(
        'label'                 => __('Associado', 'associado'),
        'description'           => __('Associados post type', 'associado'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor'),
        'taxonomies'            => array('associado'),
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
    register_post_type('associado', $args);
}
add_action('init', 'custom_post_type_associado', 0);
