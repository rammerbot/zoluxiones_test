<?php
/*
Plugin Name: Hola Mundo
Plugin URI:  https://serviexpo.rammerbot.com
Description: Un plugin que agrega un shortcode para mostrar "Hola Mundo".
Version: 1.0
Author: Rammer Gomez
Author URI: https://serviexpo.rammerbot.com
License: GPL2
*/

function mostrar_hola_mundo() {
    return "<p>Hola Mundo</p>";
}
add_shortcode('hola_mundo', 'mostrar_hola_mundo');
?>