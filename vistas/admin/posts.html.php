<h2 style="float: left; margin-right: 30px;">Gestión de Posts</h2>
<a class="btn btn-primary mb-3" href="posts.php">Nuevo</a>

<form action="posts.php" method="post">
    <div class="row">
        <div class="col-1">
            <label for="inputID" class="col-form-label">ID</label>
            <input class="form-control" type="text" name="id" value="<?= isset($post) ? $post['id'] : '' ?>" readonly>
        </div>
        <div class="col-auto">
            <label for="inputTitulo" class="col-form-label">Título</label>
            <input class="form-control" type="text" name="titulo" value="<?= isset($post) ? $post['titulo'] : '' ?>" required>
        </div>
        <div class="col-auto">
            <label for="inputContenido" class="col-form-label">Contenido</label>
            <textarea class="form-control" name="contenido" required><?= isset($post) ? $post['contenido'] : '' ?></textarea>
        </div>
        <div class="col-auto mb-3">
            <label for="inputUsuario" class="col-form-label">Usuario</label>
            <select class="form-select" name="usuario_id">
                <?php foreach ($usuarios as $usuario): ?>
                    <option value="<?= $usuario['id'] ?>" <?= (isset($post) && $usuario['id'] == $post['usuario_id']) ? 'selected' : '' ?>>
                        <?= $usuario['nombre'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <input class="btn btn-success mb-3" type="submit" value="Guardar">
</form>

<?php if (isset($post) && isset($_GET['editar'])): ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <div class="col-5">
                <input type="file" class="form-control" name="foto">
            </div>
            <div class="col-3">
                <input class="btn btn-success mb-3" type="submit" value="Subir">
            </div>
        </div>
    </form>
    <img style="height: 100px;" src="imagenes/posts/<?= $post['id'] ?>.jpg">
<?php endif; ?>


<p>Paginas totales <?php echo $total ?></p>
<?php include("paginacion.html.php") ?>

<table class="table">
    <tr>
        <th class="text-end">ID</th>
        <th class="text-end">Título</th>
        <th class="text-center">Contenido</th>
        <th class="text-end">Fecha Publicación</th>
        <th class="text-center">Usuario</th>
        <th class="text-center">Foto</th>
        <th class="text-center">Acciones</th>
    </tr>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td class="text-end"><?= $post['id'] ?></td>
            <td class="text-center"><?= $post['titulo'] ?></td>
            <td class="text-end"><?= $post['contenido'] ?></td>
            <td class="text-center"><?= $post['fecha_publicacion'] ?></td>
            <td class="text-center">
                <?php 
                // Buscar el nombre del usuario en el array de usuarios
                $nombre_usuario = '';
                foreach ($usuarios as $usuario) {
                    if ($usuario['id'] == $post['usuario_id']) {
                        $nombre_usuario = $usuario['nombre'];
                        break;
                    }
                }
                echo $nombre_usuario; 
                ?>
            </td>
            <td class="text-center"><img height="90px" src="imagenes/posts/<?php echo $post['id']?>.jpg"></td>
            <td class="text-center">
                <a class="btn btn-primary" href="posts.php?editar=<?= $post['id'] ?>">Editar</a> 
                <a class="btn btn-danger" href="posts.php?borrar=<?= $post['id'] ?>">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
