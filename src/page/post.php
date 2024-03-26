<?php 
require 'sql/post.sql.php';
require 'sql/comment.sql.php';

if (!isset($_GET['slug'])) {
    die('Paramètre slug absent !');
}

$post = getOnePost($_GET['slug']);
//var_dump($post); exit;

if ($post != false) {

    $comments = getCommentsByPost($post['id']);
    //var_dump($comments); exit;

    $layoutImage = $post['image'];
    $headerTitle = $post['title'];
    $headerSubheading = "Rédigé le " . date("m/d/Y", strtotime($post['createdAt']) ) . " par " . $post['lastName'] . " " . $post['firstName'];

    require 'template/post.tpl.php';

} else {
    die('404 : Article introuvable !');
}

