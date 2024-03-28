<?php

// by ChatGPT ;)

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
        // Supprime le message flash après l'avoir récupéré
        unset($_SESSION[$key]); 
        // Retourne le html Bootstrap de l'alerte
        return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">' . $message . '</div>';
    }
    return '';
}
