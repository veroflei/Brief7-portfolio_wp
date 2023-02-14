<?php

/*
 * Ajoute des éléments au thème 
 */
function portfolio_support_theme(){
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails');

    // Ajout le sous menu menu dans apparence
    add_theme_support('menus');
    register_nav_menu( 'header', 'Menu du header');
    register_nav_menu( 'footer', 'Menu du footer');

}
add_action('after_setup_theme', 'portfolio_support_theme');


/* Enqueue scripts and styles Bootstrap */ 

function portfolio_style_bootstrap() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css%27');
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js%27');
}
add_action('wp_enqueue_scripts', 'portfolio_style_bootstrap');

/* Chargement feuile de style css */
 
function portfolio_my_style() {
    wp_enqueue_style( 'mon-style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'portfolio_my_style');

/**
 * Enqueue mon style css
 */
function portfolio_wp_my_style() {
    wp_enqueue_style( 'portfolio', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'portfolio_my_style',11);

?>