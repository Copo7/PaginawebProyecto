<h2>Gestión de usuarios</h2>
<a class="btn btn-primary" href="usuarios.php">Nuevo</a>
<form action="usuarios.php" method="post">
	<div class="row">
		<div class="col">
			<label>ID</label>
			<input class="form-control" type="text" name="id" placeholder="ID" value="<?php echo isset($usuario) ? $usuario['id'] : '' ?>" readonly>
		</div>
		<div class="col">
			<label>Nombre</label>
			<input class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo isset($usuario) ? $usuario['nombre'] : '' ?>" required>
		</div>
		<div class="col">
			<label>N. Completo</label>
			<input class="col form-control" type="text" name="nombre_completo" placeholder="N. Completo" value="<?php echo isset($usuario) ? $usuario['nombre_completo'] : '' ?>" required>
		</div>
		<div class="col">
			<label>Email</label>
			<input class="col form-control" type="text" name="email" placeholder="Email" value="<?php echo isset($usuario) ? $usuario['email'] : '' ?>" required>
		</div>
		<div class="col">
			<label>Teléfono</label>
			<input class="col form-control" type="text" name="telefono" placeholder="Teléfono" value="<?php echo isset($usuario) ? $usuario['telefono'] : '' ?>" required>
		</div>
		<div class="col">
			<label>Password</label>
			<input class="col form-control" type="password" name="password" placeholder="Password" value="<?php echo isset($usuario) ? $usuario['password'] : '' ?>" required>
		</div>
	</div>
	<input class="btn btn-success" type="submit" value="Guardar">
</form>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>N. Completo</th>
		<th>Email</th>
		<th>Teléfono</th>
		<th>Password</th>
		<th>Acciones</th>
	</tr>

	<?php foreach ($usuarios as $usuario): ?>
		<tr>
			<td><?= $usuario['id'] ?></td>
			<td><?= $usuario['nombre'] ?></td>
			<td><?= $usuario['nombre_completo'] ?></td>
			<td><?= $usuario['email'] ?></td>
			<td><?= $usuario['telefono'] ?></td>
			<td><?= $usuario['password'] ?></td>
			<td><a class="btn btn-primary" href="usuarios.php?editar=<?= $usuario['id'] ?>">Editar</a> <a class="btn btn-danger" href="usuarios.php?borrar=<?= $usuario['id'] ?>">Borrar</a></td>
		</tr>
	<?php endforeach; ?>
</table>