<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Mine
 * @subpackage BootSTheme
 * @since 1.0
 * @version 1.0
 */
function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'themename', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );
?>
