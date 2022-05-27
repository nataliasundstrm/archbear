<?php 

/**
 * Scripts & styles
 */

function archbear_scripts_and_styles() {

    // Styles 
    wp_enqueue_style( 'swiper-style', 'https://unpkg.com/swiper@8/swiper-bundle.min.css'); // Hämtar inställningarna för vår slider
    wp_enqueue_style('archbear-style', get_stylesheet_uri() ); // Hämtar style.css

    //Scripts 
    wp_enqueue_script( 'swiper-script', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), false, false ); // false - ligger i headern (syftar på den sist nämnda)
    wp_enqueue_script( 'archbear-slider', get_template_directory_uri() . '/js/slider.js', array(), false, true); // ture - ligger i footern (istället för defer) 
    wp_enqueue_script( 'archbear-scroll', get_template_directory_uri() . '/js/scroll.js', array(), false, true); 
    wp_enqueue_script( 'archbear-menu', get_template_directory_uri() . '/js/menu.js', array(), false, true); 
}

add_action('wp_enqueue_scripts', 'archbear_scripts_and_styles'); // Gör att våra js- och css filer körs igång samtidigt som WordPress egna filer



?>