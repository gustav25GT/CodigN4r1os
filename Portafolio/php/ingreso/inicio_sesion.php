<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf8">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" href="../../estilo.css" type="text/css">

</head>

<body>
	<nav>

	</nav>
	<form action="validacion.php">
		<img src="sitio-web.png" style="width: 30%; height: 25%; align-items: center;">
		<h1> SISTEMA DE INGRESO </h1>
		<label> Apellido: </label>
		<input type="text" name="apellido">

		<label class="form-label"> Contraseña </label>
		<input type="password" name="password" required="">

		<select>
			<option> Tecnico </option>
			<option> Administrador </option>
		</select>

		<a href="../../formulario.php"> Reestablecer Contraseña </a>

		<input type="submit" name="validar">
	</form>

</body>

</html>