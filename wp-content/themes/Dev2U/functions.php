<?php 

#Custom Post Type UI

#Adicionar Suplementqação
add_action('init', 'lc_register_suplementacao_post_type');

function lc_register_suplementacao_post_type(){
    $labels = array(
        'name' => _x('Suplementação', 'post type general name'),
        'singular_name' => _x('Suplementação','post type singular name'),
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar nova suplementação',
        'edit' => 'Editar',
        'edit_item' => 'Editar Suplementação',
        'new_item' => 'Novo Suplementação',
    );
    $supports = array(
        'title',
        'post-thumbnails',
        'page-attributes',

    );
    $args = array(
        'labels'        => $labels,
        'description'   => "My custom post type",
        'public'        => true,
        'menu_icon'     => 'dashicons-welcome-write-blog',
        'supports'      => $supports,
    );

    register_post_type('suplementacao', $args);
}

#Adicionar Repositores
add_action('init', 'lc_register_respositores_post_type');

function lc_register_respositores_post_type(){
    $labels = array(
        'name' => _x('Repositores', 'post type general name'),
        'singular_name' => _x('Repositores','post type singular name'),
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar nova repositores',
        'edit' => 'Editar',
        'edit_item' => 'Editar Suplementação',
        'new_item' => 'Novo Suplementação',
    );
    $supports = array(
        'title',
        'post-thumbnails',
        'page-attributes',

    );
    $args = array(
        'labels'        => $labels,
        'description'   => "My custom post type",
        'public'        => true,
        'menu_icon'     => 'dashicons-welcome-write-blog',
        'supports'      => $supports,
    );

    register_post_type('repositores', $args);
}





/* Adiciona Imagem Destacada na Coluna da Listagem de Posts */
add_theme_support('post-thumbnails');




?>