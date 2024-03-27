<?php

function loginUser($email) {
    global $pdo;

    try {
        $query = 
        "SELECT `id`, `lastName`, `firstName`, `password`, `role`, `email` 
            FROM `users` 
            WHERE `email` = :email";
        $cursor = $pdo->prepare($query);
        $cursor->bindValue(':email', $email, PDO::PARAM_STR);
        $cursor->execute();
        
        $user = $cursor->fetch();
        return $user;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}

function registerUser($user) {
    global $pdo;

    try {
        $query = 
        "INSERT INTO `users`
            (`lastName`, `firstName`, `email`, `phone`, `password`, `role`)
        VALUES
            (:lastName, :firstName, :email, :phone, :password, 'ROLE_USER')";

        $cursor = $pdo->prepare($query);
        $cursor->bindParam(':lastName', $user['lastName'], PDO::PARAM_STR);
        $cursor->bindParam(':firstName', $user['firstName'], PDO::PARAM_STR);
        $cursor->bindParam(':email', $user['email'], PDO::PARAM_STR);
        $cursor->bindParam(':phone', $user['phone'], PDO::PARAM_STR);
        $cursor->bindParam(':password', $user['password'], PDO::PARAM_STR);
        $cursor->execute();
        
        return TRUE;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}