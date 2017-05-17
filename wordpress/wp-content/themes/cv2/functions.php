<?php
/**
 * cv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cv2
 */

 // function additional_custom_styles() {
 //
 //     /*Enqueue The Styles*/
 //    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
 //    wp_enqueue_style( 'bootstrap');
 //
 // }

 wp_enqueue_script( 'buttonnav', get_bloginfo('stylesheet_directory').'/script.js', array( 'jquery' ), '1.0', true );

 add_action( 'wp_enqueue_scripts' );

 add_action('wp_head','load_css', 1);
function load_css() {
    echo '<link rel="stylesheet" id="bootstrap-css" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>'."\n";
    echo '<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/worpress_cv/wordpress/wp-content/themes/cv2/style.css"/>'."\n";
}

 ?>
