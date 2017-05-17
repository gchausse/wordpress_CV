<?php
/**
 * cv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cv2
 */

 function additional_custom_styles() {

     /*Enqueue The Styles*/
     wp_enqueue_style( 'cv2', get_template_directory_uri() . 'style.css' );

 }

 add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

 wp_enqueue_script( 'buttonnav', get_bloginfo('stylesheet_directory').'script.js', array( 'jquery' ), '1.0', true );

 ?>
