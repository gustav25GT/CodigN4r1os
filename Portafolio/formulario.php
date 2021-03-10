<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf8">

	<link rel="stylesheet" href="estilo.css">
	<meta charset="utf8">
	<title>Login</title>
</head>

<body>
	<header>

	</header>

	<section>


		<form action="php/ingreso/insertar_datos.php" method="post">
			<img src="f_m.png" style=" width: 45% ; height: 60%; ">
			<h1>Formulario</h1>

			<label> Nombre: </label>
			<input type="text" name="nombre" required="Ingrese nombres completo">

			<label> Usuario </label>
			<select class="input-select" name="select">
				<option> Administrador </option>
				<option> Tecnico </option>
			</select>
			<label> Contraseña</label>
			<input type="password" name="password">&#128064



			<input type="submit" name="register">
		</form>
	</section>

</body>

</html>