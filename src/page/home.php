<?php 
require 'sql/post.sql.php';
//require 'sql/category.sql.php';

// initialisation des variables de layout
$layoutTitle = "Page d'accueil";
$layoutDescription = "Le meilleur blog de surf de la planète !!!";

// initialisation des variables pour le header
$headerTitle = SITE_NAME;
$headerSubheading = SITE_SLOGAN;

// Détermination du numéro de la page demandée en fonction du paramètre présent/absent dans l'url
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 1;
}

// récupération des articles pour la page demandée
$posts = getAllPosts($p);
//var_dump($posts); exit;

//$categories = getAllCategories();

// récupération du nombre de posts actifs dans la BD
$nbPosts = nbPosts();

// Calcul du nombre de pages nécessaires pour la barre de pagination
$nbPages = ceil($nbPosts / NB_PAGINATE);

require 'template/index.tpl.php';

