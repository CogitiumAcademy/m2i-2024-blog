<?php 

$layoutTitle = "Page d'accueil";
$headerTitle = SITE_NAME;
$layoutDescription = "Le meilleur blog de surf de la planète !!!";

require 'sql/post.sql.php';
$posts = getAllPosts();
//var_dump($posts);
//exit;

require 'template/index.tpl.php';

