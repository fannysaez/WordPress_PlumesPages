<?php

/**
 * Plugin Name: Custom Post Type Atelier
 * Description: Un plugin pour créer un type de publication personnalisé "Atelier".
 * Version: 1.0
 * Author: Fanny SAEZ
 */

// Déclaration du CPT "Atelier"
function create_atelier_cpt() {
    $labels = array(
        'name'               => 'Ateliers',
        'singular_name'      => 'Atelier',
        'menu_name'          => 'Ateliers',
        'name_admin_bar'     => 'Atelier',
        'add_new'            => 'Ajouter un atelier',
        'add_new_item'       => 'Ajouter un nouvel atelier',
        'new_item'           => 'Nouvel atelier',
        'edit_item'          => 'Modifier l\'atelier',
        'view_item'          => 'Voir l\'atelier',
        'all_items'          => 'Tous les ateliers',
        'search_items'       => 'Rechercher des ateliers',
        'not_found'          => 'Aucun atelier trouvé.',
    );
    
    $args = array(
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'ateliers'),
        'supports'           => array('title', 'editor', 'custom-fields'),
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-welcome-learn-more',
    );
    
    register_post_type('atelier', $args);
}
add_action('init', 'create_atelier_cpt');

