

<?php 
function band_files() {
    wp_enqueue_script('band_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), false);
    wp_enqueue_style('font-awesome-arial', '//fonts.googleapis.com/css?family=Source+Sans+Pro');
    wp_enqueue_style('band_main_styles', get_stylesheet_uri());
    wp_enqueue_style('band_animation', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
    wp_enqueue_script('band_scrollto', '//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js', false);
}
add_action('wp_enqueue_scripts', 'band_files');



function band_features() {
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}



add_action('after_setup_theme', 'band_features');





   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images/' );
  remove_action('shutdown', 'wp_ob_end_flush_all', 1);
?>  
