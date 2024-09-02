<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>document.cookie="login=my_login"</script>
    <script>document.cookie="password=my_password"</script>
</head>
<body>
    <?php
        //var_dump($_POST);
        if (isset($_POST["keyword"]) && !empty($_POST["keyword"])) {
            echo '<h2>Site non sécurisé</h2>';
            echo "Résultat(s) pour le mot-clé : " . $_POST["keyword"];
        }

        if (isset($_POST["keyword2"]) && !empty($_POST["keyword2"])) {
            echo '<h2>Site sécurisé</h2>';
            $_POST["keyword2"] = htmlspecialchars($_POST["keyword2"], ENT_QUOTES);
            echo "Résultat(s) pour le mot-clé : " . $_POST["keyword2"];
        }
?>
    <h1>La faille XSS</h1>

    <h2>Non sécurisé</h2>
    <form method="post" action="">
        <textarea name="keyword"></textarea>
        <input type="submit" value="Rechercher">
    </form>

    <h2>Sécurisé</h2>
    <form method="post" action="">
        <textarea name="keyword2"></textarea>
        <input type="submit" value="Rechercher">
    </form>

</body>
</html>