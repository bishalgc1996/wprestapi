<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    // wp_enqueue_style( 'child-style-font', 'https://fonts.googleapis.com/css?family=Raleway', array('parent-style'));
    // wp_enqueue_style( 'child-style-w3', 'https://www.w3schools.com/w3css/4/w3.css', array('parent-style'));
}