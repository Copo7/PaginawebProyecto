<?php
require('comun.inc.php');
$conn = db_open();

$usuario = $_SESSION['usuario'];
$usuarios = db_query($conn, "SELECT * FROM usuarios");
$posts = db_query($conn, "SELECT p.*, u.nombre AS usuario FROM posts p INNER JOIN usuarios u ON p.usuario_id = u.id ORDER BY fecha_publicacion DESC LIMIT 4");
$hora_inicio = isset($_COOKIE["hora_inicio"]) ? $_COOKIE["hora_inicio"] : "No disponible";

$conn = db_close($conn);

$titulo = "Dashboard";
$vista = 'dashboard';
require("../vistas/admin/plantilla.html.php");