<?php
/*
 * Plugin Name: Custom Roles – Plumes & Pages
 * Description: Plugin personnalisé pour ajouter les rôles Organisateur, Intervenant, et Parent.
 * Version: 1.0
 * Author: Fanny SAEZ
 */

// Activation : création des rôles personnalisés
function plumes_custom_roles_add() {
    // Organisateur : même capacités qu'un éditeur
    $editorCaps = get_role('editor')->capabilities;
    add_role('organisateur', 'Organisateur', $editorCaps);

    // Intervenant : mêmes capacités qu'un auteur
    $authorCaps = get_role('author')->capabilities;
    add_role('intervenant', 'Intervenant', $authorCaps);

    // Parent : basé sur le rôle abonné, accès minimal
    $subscriberCaps = get_role('subscriber')->capabilities;
    add_role('parent', 'Parent', $subscriberCaps);
}
register_activation_hook(__FILE__, 'plumes_custom_roles_add');

// Désactivation : suppression des rôles
function plumes_custom_roles_remove() {
    remove_role('organisateur');
    remove_role('intervenant');
    remove_role('parent');
}
register_deactivation_hook(__FILE__, 'plumes_custom_roles_remove');
