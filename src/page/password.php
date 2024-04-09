<?php

require 'sql/password.sql.php';

Granted();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //var_dump($_POST); exit;
    
    // Vérification de la validité de l'ancien mot de passe
    if (!password_verify($_POST['old_password'], $_SESSION['user']['password'])) {
        set_flash_message('blog', 'Mot de passe actuel incorrect !','danger');
        header('Location: ?page=password');
        exit;
    }

    // Vérification de la similitude des 2 nouveaux mots de passe
    if ($_POST['new1_password'] != $_POST['new2_password']) {
        set_flash_message('blog', 'Les nouveaux mots de passe ne sont pas identiques !','danger');
        header('Location: ?page=password');
        exit;
    }
    
    $hashPassword = password_hash($_POST['new1_password'], PASSWORD_DEFAULT);
    $_POST['new1_password'] = $hashPassword;

    $isUpdated = updatePassword($_POST['new1_password']);

    if (!$isUpdated) {
        set_flash_message('blog', 'Le mot de passe n\a pas pu être modifié !','danger');
    } else {
        $_SESSION['user']['password'] = $_POST['new1_password'];
        set_flash_message('blog', 'Le mot de passe a bien été modifié !','success');
    }
    
    header('Location: index.php?page=login');
    exit;
}

$headerTitle = 'Modifiez votre mot de passe !';

require 'template/password.tpl.php';
