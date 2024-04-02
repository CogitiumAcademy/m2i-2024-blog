<?php

require('sql/post.sql.php');

$posts = getAllPostsForFlux();

echo json_encode($posts);

