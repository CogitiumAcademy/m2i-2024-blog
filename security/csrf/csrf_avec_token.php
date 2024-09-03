<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_GET["token"])) {
        echo '<h2>Le token est absent !</h2>';
        exit;
    } 
    if ($_GET["token"] != $_SESSION["token"]) {
        echo '<h2>Le token est invalide !</h2>';
        exit;
    }
    ?>
    <h1>La page vulnérable</h1>
    <h2>Page avec protection CSRF, suppression du <?= $_GET["id"] ?></h2>
    <h2>Token de l'URL = <?= $_GET["token"] ?></h2>
    <h2>Token de la session = <?= $_SESSION["token"] ?></h2>
</body>
</html>