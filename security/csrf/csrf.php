<?php 
    session_start();
    $token = bin2hex(openssl_random_pseudo_bytes(6));
    //unset($_SESSION["token"]);
    $_SESSION["token"] = $token;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faille CSRF</h1>
    <a href="csrf_sans_token.php?id=12">Supprimer 12 (sans token)</a>
    <br>

    <?php

    //echo $token;
    ?>
    <a href="csrf_avec_token.php?id=12&token=<?= $token ?>">Supprimer 12 (avec token)</a>
</body>
</html>

<?php
    var_dump($_SESSION);
?>