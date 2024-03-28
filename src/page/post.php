<?php 
require 'sql/post.sql.php';
require 'sql/comment.sql.php';

if (!isset($_GET['slug'])) {
    die('Paramètre slug absent !');
}

$post = getOnePost($_GET['slug']);
//var_dump($post); exit;

if ($post != false) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $today = date("Y-m-d H:i:s");
        $isInserted = addComment($_SESSION['user']['id'], $post['id'], $_POST['comment'], $today);
        if ($isInserted) {
            set_flash_message('blog', 'Merci pour votre commentaire !','success');
        } else {
            set_flash_message('blog', 'Problème technique !','danger');
        }
        header('Location: index.php?page=post&slug=' . $_GET['slug']);
        exit;
    }

    $comments = getCommentsByPost($post['id']);
    //var_dump($comments); exit;

    $layoutImage = $post['image'];
    $headerTitle = $post['title'];
    $headerSubheading = "Rédigé le " . date("m/d/Y", strtotime($post['createdAt']) ) . " par " . $post['lastName'] . " " . $post['firstName'];

    require 'template/post.tpl.php';

} else {
    die('404 : Article introuvable !');
}

