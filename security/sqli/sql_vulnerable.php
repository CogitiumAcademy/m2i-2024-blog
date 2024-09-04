<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page vulnérable</h1>
    <?php
    var_dump($_POST);

    define( 'DB_HOST', 'localhost' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_NAME', 'security_php' );
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    try {
        $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, $options);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        //return $dbh;
        var_dump($dbh);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }

    try {
        /*
        $query = "
        SELECT login, type, amount 
            FROM accounts AS A LEFT JOIN users AS B ON A.id_users = B.id
            WHERE B.login = '". $_POST["login"] . "' 
                AND B.pass = '" . $_POST["password"] . "'";
        */
        $query = "
        SELECT login, type, amount 
            FROM accounts AS A 
                JOIN users AS B ON A.id_users = B.id 
            WHERE B.login = '" . $_POST["login"] . "' AND B.pass = '" . $_POST["password"] . "'";
                
        echo($query);

        $cursor = $dbh->query($query);
        $data = $cursor->fetchAll();
        var_dump($data);
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }

    try {
        $query =
        "select login, type, amount from users u inner join accounts a on u.id = a.id_users where u.login= '".$_POST["login"]."' and u.pass='".$_POST["password"]."'";
        
        echo $query;

        $cursor = $dbh->query($query);
        $data = $cursor->fetchAll();
        var_dump($data);
        //return $data;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
    ?>

</body>
</html>