<?php
// Initialisation de le session
session_start();

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

require 'sql/category.sql.php';
$categories = getAllCategories();

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

if (ENV == 'DEV') {
    echo "<h2>Debug SESSION</h2>";
    var_dump($_SESSION);
}
