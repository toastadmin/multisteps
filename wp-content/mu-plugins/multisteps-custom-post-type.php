<?php
/**
 * Plugin Name: Multisteps Custom Post Types
 * Description: This plugin adds the custom post type specific for this website template.
 * Version: 1.0.0
 * License: GPL2
 */

class multistepsACM {

    /**
     * Constructor. Called when plugin is initialised
     */
    function __construct() {
        add_action( 'init', array( $this, 'register_custom_post_type' ) );
    }

    function register_custom_post_type() {

        /**
         * Registers a Custom Post Type called Product
         */
        register_post_type('product', array(
            'labels' => array(
                'name'               => _x( 'Products', 'post type general name', 'sage' ),
                'singular_name'      => _x( 'Product', 'post type singular name', 'sage' ),
                'menu_name'          => _x( 'Products', 'admin menu', 'sage' ),
                'name_admin_bar'     => _x( 'Products', 'add new on admin bar', 'sage' ),
                'add_new'            => _x( 'Add New', 'Products', 'sage' ),
                'add_new_item'       => __( 'Add New Product', 'sage' ),
                'new_item'           => __( 'New Product', 'sage' ),
                'edit_item'          => __( 'Edit Product', 'sage' ),
                'view_item'          => __( 'View Product', 'sage' ),
                'all_items'          => __( 'All Products', 'sage' ),
                'search_items'       => __( 'Search Products', 'sage' ),
                'parent_item_colon'  => __( 'Parent Product:', 'sage' ),
                'not_found'          => __( 'No Products item found.', 'sage' ),
                'not_found_in_trash' => __( 'No Products item found in Trash.', 'sage' ),
            ),


            // Frontend
            'has_archive'        => true,
            'public'             => true,
            'hierarchical' => true,

            // Admin
            'capability_type' => 'post',
            'menu_icon'     => 'dashicons-store',
            'menu_position' => 5,
            'query_var'     => true,
            'show_in_menu'  => true,
            'show_ui'       => true,
            'supports' => array( 'title', 'editor', 'thumbnail'),
        ));
        register_taxonomy(
            'product-category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
            'product',        //post type name
            array(
                'hierarchical' => true, // true = category like, false = tag like
                'label' => __( 'Categories' ),
                'show_admin_column' => true, // display in admin column
                'public' => true, // false = make private
                'show_in_menu'  => true,
                'show_ui'       => true,
                //'rewrite'       => array('slug' => 'our-brands','with_front' => false),
                'labels' => array(
                    'add_new_item'       => __( 'Add New Category', 'sage' ),
                    'parent_item_colon'  => __( 'Parent Category:', 'sage' ),
                )
            )
        );

    }
}

$multistepsACM = new multistepsACM;
