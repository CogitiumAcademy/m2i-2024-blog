<?php

function pdoConnect() {
    global $options;
    try {
        $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, $options);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $dbh;
        //var_dump($dbh);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}