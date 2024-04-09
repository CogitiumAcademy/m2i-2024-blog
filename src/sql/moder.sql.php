<?php

function getAllPostsNotActive() {

    global $pdo;

    try {
        $query = 
        "SELECT 
            A.`id`, `image`, `updatedAt`, `title`, A.`slug` AS postSlug, 
            A.`content`, `name`, B.`slug` AS categorySlug, `lastName`, `firstName`, 
            COUNT(D.`id`) AS nbComments
        FROM posts A
        INNER JOIN categories B ON A.id_categories = B.id
        INNER JOIN users C ON id_users = C.id
        LEFT JOIN comments D ON D.id_posts = A.id
        WHERE active = FALSE
        GROUP BY A.id
        ORDER BY updatedAt DESC";

        $cursor = $pdo->query($query);
        $posts = $cursor->fetchAll();
        return $posts;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}

function activatePostById($id) {
    global $pdo;

    try {
        $query = 
        "UPDATE `posts` 
        SET 
            `active` = TRUE 
        WHERE `id` = :id";

        $cursor = $pdo->prepare($query);
        $cursor->bindParam(':id', $id, PDO::PARAM_INT);
        $cursor->execute();
        
        return TRUE;
    } catch (PDOException $e) {
        return FALSE;
    }
}

function deletePostById($id) {
    global $pdo;

    try {
        $query = 
        "DELETE FROM `posts` 
        WHERE `id` = :id";

        $cursor = $pdo->prepare($query);
        $cursor->bindParam(':id', $id, PDO::PARAM_INT);
        $cursor->execute();
        
        return TRUE;
    } catch (PDOException $e) {
        return FALSE;
    }
}