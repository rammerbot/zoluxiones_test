<?php
/*
Plugin Name: Ultimos 3 Post Publicados
Plugin URI:  https://serviexpo.rammerbot.com
Description: Un Widget que muestra los ultimos tres post publicados en WordPress.
Version: 1.0
Author: Rammer Gomez
Author URI: https://serviexpo.rammerbot.com
License: GPL2
*/

class Ultimos_Posts_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'ultimos_posts_widget',
            __('Últimos Posts', 'text_domain'),
            array('description' => __('Muestra los últimos 3 posts', 'text_domain'))
        );
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo $args['before_title'] . 'Últimos Posts' . $args['after_title'];

        $query = new WP_Query(array('posts_per_page' => 3));
        if ($query->have_posts()) {
            echo '<ul>';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
        }
        wp_reset_postdata();

        echo $args['after_widget'];
    }
}

function registrar_widget_personalizado() {
    register_widget('Ultimos_Posts_Widget');
}
add_action('widgets_init', 'registrar_widget_personalizado');
?>