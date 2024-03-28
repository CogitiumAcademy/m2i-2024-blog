<?php

function getCommentsByPost($id) {
    global $pdo;

    try {
        $query = "SELECT firstName, lastName, content, createdAt 
        FROM comments A
        INNER JOIN users B ON A.id_users = B.id 
        WHERE A.id_posts = $id 
        ORDER by createdAt DESC";
        $cursor = $pdo->query($query);
        $comments = $cursor->fetchAll();
        return $comments;
    } catch (PDOException $e) {
        die("Erreur SQL : " . $e->getMessage());
    }
}

function addComment($idUser, $idPost, $comment, $createdAt) {
    global $pdo;

    try {
        $query = 
        "INSERT INTO `comments`
            (`content`, `createdAt`, `id_users`, `id_posts`)
        VALUES
            (:content, :createdAt, :id_users, :id_posts)";

        $cursor = $pdo->prepare($query);
        $cursor->bindParam(':content', $comment, PDO::PARAM_STR);
        $cursor->bindParam(':createdAt', $createdAt, PDO::PARAM_STR);
        $cursor->bindParam(':id_users', $idUser, PDO::PARAM_INT);
        $cursor->bindParam(':id_posts', $idPost, PDO::PARAM_INT);
        $cursor->execute();
        
        return TRUE;
    } catch (PDOException $e) {
        //die("Erreur SQL : " . $e->getMessage());
        return FALSE;
    }
}
