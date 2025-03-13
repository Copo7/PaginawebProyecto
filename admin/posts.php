<?php
require('comun.inc.php');
require('../librerias/html_helper.php');
$conn = db_open();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_FILES['foto'])) {
        copy($_FILES['foto']['tmp_name'], 'imagenes/posts/' . $_REQUEST['id'] . '.jpg');
        header('Location: posts.php?editar=' . $_REQUEST['id']);
        exit;
    }

    $post['id'] = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
    $post['titulo'] = $_REQUEST['titulo'];
    $post['contenido'] = $_REQUEST['contenido'];
    $post['usuario_id'] = $_REQUEST['usuario_id'];

    if ($post['id'] == null) {
        $id = db_insert($conn, 'posts', $post);
    } else {
        db_update($conn, 'posts', $post);
        $id = $post['id'];
    }

    $conn = db_close($conn);
    header('Location: posts.php?editar=' . $id);
} else {
    // Borrar post
    if (isset($_REQUEST['borrar']) && is_numeric($_REQUEST['borrar'])) {
        db_delete_by_id($conn, 'posts', $_REQUEST['borrar']);
    } 
    // Editar post
    else if (isset($_REQUEST['editar']) && is_numeric($_REQUEST['editar'])) {
        $id = intval($_REQUEST['editar']);
        $res = db_query($conn, "SELECT * FROM posts WHERE id=?", [$id]);

        if (count($res) == 1) {
            $post = $res[0];
        }
    }
}

$usuarios = db_query($conn, "SELECT * FROM usuarios");

$num_por_pagina = 9;
$pagina = isset($_GET['p']) ? $_GET['p'] : 1;

$total = db_query($conn, "SELECT COUNT(*) AS total FROM posts")[0]['total'];
$num_paginas = ceil($total / $num_por_pagina);
$offset = ($pagina - 1) * $num_por_pagina;

$posts = db_query($conn, "SELECT p.*, u.nombre AS usuario FROM posts p INNER JOIN usuarios u ON p.usuario_id = u.id LIMIT $num_por_pagina OFFSET $offset");

$conn = db_close($conn);

$titulo = "Gestión de Posts";
$vista = 'posts';
require("../vistas/admin/plantilla.html.php");
