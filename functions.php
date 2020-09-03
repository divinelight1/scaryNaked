<?php
/**
 * functions and definitions
 *
 */

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 * If you're building a theme based on scaryNaked, use a find and replace
 * to change 'scareNaked' to the name of your theme in all the template files.
 */
 load_theme_textdomain( 'scaryNaked', get_template_directory() . '/languages' );


 /*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
 add_theme_support( 'title-tag' );

 /*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
 add_theme_support( 'post-thumbnails' );

 /*
 * Initialize wp menus
 * Here i use three wp_nav_menu()'s you can add as much as u want, read more about menus on
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
 function register_my_menus() {
     register_nav_menus(
         array(
             'main-menu' => __( 'Main Menu' ),
             'footer-menu' => __( 'Footer Menu' ),
             'mobile-menu' => __( 'Mobile Menu' )
         )
     );
 }
 add_action( 'init', 'register_my_menus' );


// Add custom logo support
add_theme_support( 'custom-logo' );


/*
*
* Function to add .active class to menu item (usable if you have to have diferent style on current page menu item)
*
*/
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/*
* Disable Gutenberg editor
*/
add_filter( 'use_block_editor_for_post', '__return_false' );


//add support for uploading svg in Media
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
add_filter('upload_mimes', 'add_file_types_to_uploads');


// extern files includings
// acf setup file
include('theme-settings/acf-fields-setup.php');

// custom post type setup file
include('theme-settings/custom-post-type.php');
