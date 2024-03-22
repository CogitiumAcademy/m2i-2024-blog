<?php

require 'config/param.inc.php';

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

