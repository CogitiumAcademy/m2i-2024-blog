<?php
require 'sql/user.sql.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_POST['password'] = $hashPassword;
    $isRegistered = registerUser($_POST);

    if ($isRegistered) {
        set_flash_message('blog', 'Inscription réussie !','success');
    } else {
        set_flash_message('blog', 'Inscription échouée !','danger');
    }
    
    header('Location: index.php');
    exit;
}

$headerTitle = 'Inscrivez-vous !';

//var_dump($_SERVER); exit;

require 'template/register.tpl.php';
