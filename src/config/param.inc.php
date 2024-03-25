<?php

// Route par défaut
define('DEFAULT_PAGE', 'home');

// Valeurs par défaut du layout
$layoutTitle = 'Un super blog de Surf';
$layoutImage = 'home-bg.jpg';
$layoutDescription = '';

// Config BD MySQL
define( 'DB_HOST', 'localhost' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_NAME', 'm2i_blog' );
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

// Pagination par défaut
define('NB_PAGINATE', 10);

