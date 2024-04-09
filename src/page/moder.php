<?php

if (!isset($_SESSION['user'])) {
    set_flash_message('blog', 'Page protégée !','danger');
    // On redirige vers la page login
    header('Location: index.php?page=login');
    exit;
} else {
    if ($_SESSION['user']['role'] != 'ROLE_MODER') {
        set_flash_message('blog', 'Page réservée aux modérateurs !','danger');
        // On redirige vers la page login
        header('Location: index.php?page=login');
        exit;
    }
}

require 'sql/moder.sql.php';

// Si une action est demandée
if (isset($_GET['action'])) {

    // S'il n'y a pas d'id dans l'url
    if (!isset($_GET['id'])) {
        set_flash_message('blog', 'Manque paramètre !','danger');
        header('Location: index.php?page=moder');
        exit;
    }

    // Si demande d'activation
    if ($_GET['action'] == 'activate') {
        $isActivated = activatePostById($_GET['id']);
        if ($isActivated) {
            set_flash_message('blog', 'Article activé !','success');
        } else {
            set_flash_message('blog', 'Problème d\'activation !','danger');
        }
    }

    // Si demande de suppression
    if ($_GET['action'] == 'delete') {
        $isDeleted = deletePostById($_GET['id']);
        if ($isDeleted) {
            set_flash_message('blog', 'Article supprimé !','success');
        } else {
            set_flash_message('blog', 'Problème de suppression !','danger');
        }
    }

    header('Location: index.php?page=moder');
    exit;
}

$posts = getAllPostsNotActive();

//var_dump($posts); exit;

$headerTitle = 'Modération des articles !';

require 'template/moder.tpl.php';
