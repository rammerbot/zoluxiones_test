<?php


function agregar_estilos_personalizados() {
    wp_enqueue_style('estilo-personalizado', get_stylesheet_directory_uri() . '/css/custom-style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'agregar_estilos_personalizados');