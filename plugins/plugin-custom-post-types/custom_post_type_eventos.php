<?php
/*
Plugin Name: Custom post type Eventos
Plugin URI:  https://serviexpo.rammerbot.com
Description: Un plugin que registra un Custom Post Type llamado "Eventos"
en WordPress.
Version: 1.0
Author: Rammer Gomez
Author URI: https://serviexpo.rammerbot.com
License: GPL2
*/


function registrar_post_type_eventos() {
    $args = array(
        'labels' => array(
            'name'          => __('Eventos'),
            'singular_name' => __('Evento')
        ),
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'eventos'),
        'supports'     => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'    => 'dashicons-calendar',
    );
    register_post_type('eventos', $args);
}
add_action('init', 'registrar_post_type_eventos');

?>