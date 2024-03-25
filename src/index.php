<?php

// Chargement des paramètre du site
require 'config/param.inc.php';

// Connexion PDO
require 'sql/pdoConnect.inc.php';
$pdo = pdoConnect();

// Chargement des librairies
require 'lib/pluralize.lib.php';

// Router
$page = DEFAULT_PAGE;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$url = "page/$page.php";

if (file_exists($url)) {
    require $url;
} else {
    echo "404 File Not Found !!!";
}

