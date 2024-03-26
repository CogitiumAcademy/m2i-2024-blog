<?php

function loginUser($email) {
    global $pdo;

    try {
        $query = "SELECT id, lastName, firstName, password, role, email 
        FROM `users` 
        WHERE email = :email";
        $cursor = $pdo->prepare($query);
        $cursor->bindValue(':email', $email, PDO::PARAM_STR);
        $cursor->execute();
        
        $user = $cursor->fetch();
        return $user;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}