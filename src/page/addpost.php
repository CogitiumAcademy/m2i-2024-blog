<?php
require 'sql/category.sql.php';
require 'sql/post.sql.php';

Granted();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //var_dump($_POST); exit;

    $today = date("Y-m-d H:i:s");
    $slug = slug($_POST['title']);

    $isAdded = addPost($_POST, $today, $slug, $_SESSION['user']['id']);

    if ($isAdded) {
        set_flash_message('blog', 'Article enregistré !','success');
    } else {
        set_flash_message('blog', 'Problème technique !','danger');
    }
    
    header('Location: index.php');
    exit;
}

$categories = getAllCategories();
//var_dump($categories); exit;

$headerTitle = 'Proposez un article !';

require 'template/addpost.tpl.php';


