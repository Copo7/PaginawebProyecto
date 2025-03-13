<?php
require('../config.php');
require('../librerias/db_mysql.php');

$conn=db_open();
$id = intval($_REQUEST['id']);
$post = db_query($conn, 'SELECT * from posts WHERE id = ?', [$id]);
$post = $post[0];
db_close($conn);

$vista="single-post";
require('../vistas/public/plantilla.html.php');
