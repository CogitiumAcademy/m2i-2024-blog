<?php

function updatePassword($new_password) {
    global $pdo;

    try {
        $query = 
        "UPDATE `users` 
        SET 
            `password` = :password
        WHERE `id` = :id";

        $cursor = $pdo->prepare($query);
        $cursor->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_INT);
        $cursor->bindParam(':password', $new_password, PDO::PARAM_STR);
        $cursor->execute();

        return TRUE;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}