<?php
// Initialisation de le session
session_start();

if (!isset($_SESSION["token"])) {
    $token = bin2hex(openssl_random_pseudo_bytes(6));
    $_SESSION["token"] = $token;
}

// Chargement des paramètre du site
require 'config/param.inc.php';

// Connexion PDO
require 'sql/pdoConnect.inc.php';
$pdo = pdoConnect();

// Chargement des librairies
require 'core/core.inc.php';
require 'lib/pluralize.lib.php';
require 'lib/flash.lib.php';
require 'lib/slugger.lib.php';

// Préchargement de la liste des catégories pour la sidebar
require 'sql/category.sql.php';
$categories = getAllCategories();

/************** Begin Router **************/ 
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
/************** End Router **************/ 

// Profiler (version simplifiée)
if (ENV == 'DEV') {
    echo '<h2>Debug $_SESSION</h2>';
    var_dump($_SESSION);
    echo '<h2>Debug $_REQUEST</h2>';
    var_dump($_REQUEST);
    echo '<h2>Debug $_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>Debug $_ENV</h2>';
    var_dump($_ENV);
    echo '<h2>Debug $_SERVER</h2>';
    var_dump($_SERVER);
}
