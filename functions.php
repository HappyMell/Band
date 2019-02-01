

<!-- CSS, Fonts -->
<?php 

function band_css_files() {
    wp_enqueue_style('font-awesome-arial', '//fonts.googleapis.com/css?family=Source+Sans+Pro');
    wp_enqueue_style('band_main_styles', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'band_css_files');
?>

<!-- Nav Menu-->
<?php
function register_my_menu() {
    register_nav_menu('header-menu', __( 'Header Menu'));
}
add_action('init', 'register_my_menu');

?>

<!-- Images -->
<?php
if( !defined(THEME_IMG_PATH)){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images/' );
  }
?>  
