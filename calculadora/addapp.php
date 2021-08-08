<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Agregar Nueva Aplicación</title>
	</head>

	<body>
		<form action="guardarapp.php" method="post" ">
		<fieldset>

    <legend style="font-family:verdana;font-weight:bold;">Ingreso Datos de la Nueva Aplicación</legend>
		<br>
	
		<label style="font-family:verdana;">Leyenda para Código de Cliente:</label>
		<ol start="1">
		  <li style="font-family:verdana;font-weight:bold;">La Positiva</li>
		  <li style="font-family:verdana;font-weight:bold;">Telefónica del Perú</li>
		  <li style="font-family:verdana;font-weight:bold;">RIMAC</li>
		  <li style="font-family:verdana;font-weight:bold;">Banco de La Nación</li>
		  <li style="font-family:verdana;font-weight:bold;">Banco Falabella</li>
		</ol>
		<br>
    <p><label style="font-family:verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre de Aplicación: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nombre_app"></label></p>

    <p><label style="font-family:verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Código Cliente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="codigo"></label></p>
	<br>

  </fieldset>

  <br>

 <input type="submit" value="Agregar Aplicación" name="submit2" style="font-family:verdana;font-weight:bold;"/>
		</form>
		<br>
		<form action="index.php" method="post">
		<button onclick="goBack()" style="font-family:verdana;font-weight:bold;">Atrás</button>
		</form>
	</body>
</html>