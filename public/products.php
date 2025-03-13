<?php
require('../config.php');
require('../librerias/db_mysql.php');
$conn=db_open();

$num_por_pagina=9;
$pagina=isset($_GET['p']) ? $_GET['p'] : 1;
$total=db_query($conn, "select count(*) as total from posts")[0]['total'];
$num_paginas=ceil($total/$num_por_pagina);
$offset=($pagina-1)*$num_por_pagina;

$posts=db_query($conn, "SELECT * from posts LIMIT $num_por_pagina OFFSET $offset");
db_close($conn);

$titulo="posts";
$vista="products";
require('../vistas/public/plantilla.html.php');