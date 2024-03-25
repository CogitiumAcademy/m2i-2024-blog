<?php 

$layoutTitle = "Page d'accueil";
$layoutDescription = "Le meilleur blog de surf de la planète !!!";

require 'sql/post.sql.php';
$posts = getAllPosts();
var_dump($posts);


require 'template/index.tpl.php';

