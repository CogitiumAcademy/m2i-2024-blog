<?php

require 'sql/post.sql.php';
//require 'sql/category.sql.php';

if (!isset($_GET['slug'])) {
    die('Paramètre slug absent !');
}

$layoutTitle = "Les article d'une catégorie";
$layoutDescription = "Le meilleur blog de surf de la planète !!!";

$headerTitle = SITE_NAME;

$posts = getPostsByCategory($_GET['slug']);
//$categories = getAllCategories();
//var_dump($categories); //exit;

$categoryName = FALSE;
//$i=0;
foreach ($categories as $category) {
    //$i++;
    if ($category['slug'] === $_GET['slug']) {
        $categoryName = $category['name'];
        break;
    }
}
//echo "$i - ";
//die($categoryName);
if ($categoryName === FALSE) {
    set_flash_message('blog', 'Problème slug !','danger');
    //var_dump($_SESSION); exit;
    header('Location: ?');
    exit;
}

$headerSubheading = "Catégorie : $categoryName";

require 'template/category.tpl.php';
