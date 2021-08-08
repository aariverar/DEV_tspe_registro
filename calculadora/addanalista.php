<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Agregar Analista</title>
	</head>

	<body>
		<form action="guardar.php" method="post" ">
		<fieldset>

    <legend style="font-family:verdana;font-weight:bold;">Ingreso Datos Nuevo Analista</legend>

    <p><label style="font-family:verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre Completo:  &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nombre"></label></p>

    <p><label style="font-family:verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cargo:  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cargo"></label></p>

  </fieldset>

  <br>

		<input type="submit" value="Agregar Analista" name="submit" style="font-family:verdana;font-weight:bold;"/>
		</form>
		<br>
		<form action="index.php" method="post" ">
		<button onclick="goBack()" style="font-family:verdana;font-weight:bold;">Atrás</button>
		</form>
	</body>
</html>