<?php 

/*add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
*/
add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 ); 
function add_admin_link( $items, $args ) { 
if (is_user_logged_in() && $args->theme_location == 'menu-1') { 
$items .= '<li><a href="'. 
get_admin_url() .'">Admin</a></li>'; 
} 
return $items; 
} 
add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');
function enqueue_child_theme_scripts() {
    // Skrollr.min.js
    

    // title-skrollr.js (dépend de skrollr)
            wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );
      
}