<?php

function getAllPosts() {
    global $pdo;

    try {
        $query = 
        "SELECT 
            `image`, `updatedAt`, `title`, A.`slug` AS postSlug, 
            LEFT(A.`content`, 150) AS content, `name`, B.`slug` AS categorySlug, `lastName`, `firstName`, 
            COUNT(D.`id`) AS nbComments
        FROM posts A
        INNER JOIN categories B ON A.id_categories = B.id
        INNER JOIN users C ON id_users = C.id
        LEFT JOIN comments D ON D.id_posts = A.id
        WHERE active = TRUE
        GROUP BY A.id
        ORDER BY updatedAt DESC
        LIMIT " . NB_PAGINATE;

        $cursor = $pdo->query($query);
        $posts = $cursor->fetchAll();
        return $posts;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}

function getOnePost($slug) {
    global $pdo;

    try {
        $query = 
        "SELECT 
            A.`id`, `image`, `createdAt`, `updatedAt`, `title`, A.`content`, 
            `name`, B.`slug`, `lastName`, `firstName`, `email`
        FROM posts A
        INNER JOIN categories B ON A.id_categories = B.id
        INNER JOIN users C ON id_users = C.id
        WHERE active = TRUE
            AND A.slug = :slug";

        $cursor = $pdo->prepare($query);
        $cursor->bindValue(':slug', $slug, PDO::PARAM_STR);
        $cursor->execute();
        
        $post = $cursor->fetch();
        return $post;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}