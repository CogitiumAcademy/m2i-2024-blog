<?php

// Fonction pour définir un message flash
function set_flash_message($key, $message, $type = 'success') {
    $_SESSION[$key] = array(
        'message' => $message,
        'type' => $type
    );
}

// Fonction pour récupérer et afficher un message flash sous forme d'alerte Bootstrap
function get_flash_message($key) {
    if (isset($_SESSION[$key])) {
        $message = $_SESSION[$key]['message'];
        $type = $_SESSION[$key]['type'];
        unset($_SESSION[$key]); // Supprime le message flash après l'avoir récupéré
        return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">' . $message . '</div>';
    }
    return '';
}