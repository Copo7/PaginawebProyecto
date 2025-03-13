    <main class="mb-4">
    <h1>Bienvenido, <?php echo $_SESSION['usuario']['nombre']; ?></h1>
    <td><p>Nombre, <?php echo $_SESSION['usuario']['nombre']; ?></p></td>
    <td><p>Nombre completo, <?php echo $_SESSION['usuario']['nombre_completo']; ?></p></td>
    <td><p>Contraseña, <?php echo $_SESSION['usuario']['password']; ?></p></td>
    <td><p>telefono, <?php echo $_SESSION['usuario']['telefono'];?></p></td>
    <p>Hora de inicio d sesión: <?php echo $hora_inicio; ?></p>
    </main>

<table class="table">
    <tr>
        <th class="text-end">ID</th>
        <th class="text-end">Título</th>
        <th class="text-center">Contenido</th>
        <th class="text-end">Fecha Publicación</th>
        <th class="text-center">Usuario</th>
        <th class="text-center">Foto</th>
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
        </tr>
    <?php endforeach; ?>
</table>