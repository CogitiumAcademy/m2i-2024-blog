<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["cookies"])) {
            echo "Les cookies piratés : " . $_GET["cookies"];
        }
    ?>
    <script>//window.location.replace("http://localhost/formation/m2i/CdaCergy2024/blog/security/xss.php")</script>
</body>
</html>