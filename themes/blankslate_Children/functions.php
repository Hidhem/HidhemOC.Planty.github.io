<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function blankslate_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'blankslate_support');

add_action('wp_enqueue_scripts', 'planty_enqueue_fonts');
function planty_enqueue_fonts() {
    wp_enqueue_style(
        'planty-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&display=swap',
        false
    );
}

?>

