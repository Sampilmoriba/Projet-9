<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/css/style.css' );
}

function theme_enqueue_scripts() {
    // Enregistrez jQuery depuis la bibliothèque WordPress
    wp_enqueue_script('jquery');

    // Animation des titres
    wp_enqueue_script('Titres-script', get_stylesheet_directory_uri() . '/js/title-animation-script.js', array('jquery'), '1.0.0', true);


    // Animation nuages
    wp_enqueue_script('nuage', get_stylesheet_directory_uri() . '/js/nuages-animation.js');

      // Enqueue the SwiperJS script
      wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

      // Enqueue slider script
      wp_enqueue_script('swiper-slider', get_stylesheet_directory_uri() . '/js/slider.js', array(), '0.1', true);

// Gestion du menu Burger
wp_enqueue_script('Burger-script', get_stylesheet_directory_uri() . '/js/menu_burger.js', array('jquery'), '1.0.0', true);


}

// Ajoutez le hook pour exécuter la fonction d'enregistrement des scripts
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');





