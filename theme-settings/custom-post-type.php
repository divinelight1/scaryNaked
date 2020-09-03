<?php
/**
 * custom post type intialization
 * here i use dummy custom post sqlite_fetch_column_types
 * if you don't need feel free to delete or change post type name how it fit for you
 */

// Function to add  custom post type for inspiration
function inspirations() {

    register_post_type( 'dummy',
    // CPT Options
        array(
            'supports' => array( 'thumbnail','title', 'editor' ),

            'labels' => array(
                'name' => __( 'Dummy' ),
                'singular_name' => __( 'Dummy Page' ),


            ),
            'supports' => array('thumbnail','title', 'editor'),
            'taxonomies'          => array( 'category' ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'dummy'),
            'menu_icon' => 'dashicons-format-status',
            'featured_image' => true
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'dummy' );
