<?php

function Granted() {
    if (!isset($_SESSION['user'])) {
        set_flash_message('blog', 'Page protégée !','danger');
        // On redirige vers la page login
        header('Location: index.php?page=login');
        exit;
    }
}

function isGranted() {
    return isset($_SESSION['user']);
}