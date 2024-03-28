<?php
require 'sql/user.sql.php';

Granted();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // On update le user dans la BD avec les infos du form
    $user = updateUser($_POST);

    // On met à jour les données dans la SESSION
    $_SESSION['user']['firstName'] = $_POST['firstName'];
    $_SESSION['user']['lastName'] = $_POST['lastName'];

    set_flash_message('blog', 'Votre profil a été mis à jour !','success');
    // On redirige vers la page profil
    header('Location: index.php?page=profil');
    exit;
}

$headerTitle = 'Mon profil !';

// On retrouve dans la BD le user qui est dans la SESSION
$user = getOneUser($_SESSION['user']['id']);

// On affiche des données du user dans un form
require 'template/profil.tpl.php';
