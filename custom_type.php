<?php
/*
Plugin Name: UUI Products Custom Post Type
Plugin URI: http://hollycunningham.com/
Description: Declares a plugin that will create a custom post type and associated taxonomy to display UUI's products.
Version: 1.0
Author: Holly Cunningham
Author URI: http://hollycunningham.com
License: GPLv2
*/

add_action( 'init', 'create_post_type' );

function create_post_type() {

	register_post_type( 'uui_product', 
	array(
	   	 'labels' => array( 
	        'name' => _x( 'Products', 'product' ),
	        'singular_name' => _x( 'Product', 'product' ),
	        'add_new' => _x( 'Add New', 'product' ),
	        'add_new_item' => _x( 'Add New Product', 'product' ),
	        'edit_item' => _x( 'Edit Product', 'product' ),
	        'new_item' => _x( 'New Product', 'product' ),
	        'view_item' => _x( 'View Product', 'product' ),
	        'search_items' => _x( 'Search Products', 'product' ),
	        'not_found' => _x( 'No products found', 'product' ),
	        'not_found_in_trash' => _x( 'No products found in Trash', 'product' ),
	        'parent_item_colon' => _x( 'Parent Product:', 'product' ),
	        'menu_name' => _x( 'Products', 'product' ),
    ),
        'hierarchical' => false,
        'description' => 'United Universal Industries Products',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'Type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post'
        )
    );
    
}

add_action( 'init', 'create_my_taxonomies', 0 );

function create_my_taxonomies() {
    register_taxonomy(
        'standard',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Standards',
                'add_new_item' => 'Add New Standard Tag',
                'new_item_name' => "New Standard Name"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => false
        )
    );
    
    register_taxonomy(
        'orientation',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Orientation',
                'add_new_item' => 'Add New Orientation Tag',
                'new_item_name' => "New Orientation Name"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => false
        )
    );
    
    register_taxonomy(
        'plug_tag',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Identifier',
                'add_new_item' => 'Add New Identifier',
                'new_item_name' => "New Identifier Name"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => false
        )
    );
    
    register_taxonomy(
        'connector_type',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Function Type',
                'add_new_item' => 'Add New Function Type',
                'new_item_name' => "New Function Type Name"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
    
    register_taxonomy(
        'connector_geography',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Geography',
                'add_new_item' => 'Add New Geography Tag',
                'new_item_name' => "New Geography Name"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => false
        )
    );
    
    register_taxonomy(
        'certifications',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Certifications',
                'add_new_item' => 'Add New Certification',
                'new_item_name' => "New Certification Name"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => true
        )
    );
    
    register_taxonomy(
        'amperage',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Max Amperage',
                'add_new_item' => 'Add New Max Amperage',
                'new_item_name' => "New Max Amperage"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => true
        )
    );
    
    register_taxonomy(
        'voltage',
        'uui_product',
        array(
            'labels' => array(
                'name' => 'Max Voltage',
                'add_new_item' => 'Add New Max Voltage',
                'new_item_name' => "New Max Voltage"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => true
        )
    );
   
}



?>