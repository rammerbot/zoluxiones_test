<?php

function excluir_categoria_del_loop($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_home()) {
        $query->set('cat', '-5'); // Cambia "5" por el ID de la categoría a excluir
    }
}
add_action('pre_get_posts', 'excluir_categoria_del_loop');
