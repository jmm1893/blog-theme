<?php

add_action( 'wp_enqueue_scripts', 'maproulette_enqueue_styles' );

function maproulette_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();

    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        [],  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/theme.css', [$parenthandle], null);
}