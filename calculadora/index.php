<!DOCTYPE html>
<?php
  $mysqli = new mysqli('bfrjjmrh4mrn5h04ltgi-mysql.services.clever-cloud.com', 'upngpfhdqtbsetus', 'mrxBzwRgNSThtNva01Xp', 'bfrjjmrh4mrn5h04ltgi');
?>
<html lang="es">
	<head>
	<meta charset="UTF-8">
		<title>TSOFT Perú Calculadora</title>
		<link rel="icon" href="img/icono.png" />
		<script
				src="https://code.jquery.com/jquery-3.3.1.min.js"
				integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				crossorigin="anonymous">
		</script>
		<script src="pdf.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	</head>
	<body>
	<div class="container_title" style="text-align:center">
	<a><img src="img\tsoft.jpg" style="width:15%; height:15%" ></a> 
    <div style="text-align:center; width:750px;height:0px; margin-left:auto; margin-right:auto; margin-bottom:1%; border:0px solid #000;font-size:30px; font-family:verdana;font-weight:bold">Calculadora de Estimación TSOFT PERÚ</div>
   	</div>
	<div class="container_setup" style="text-align:left">

		<p>
			<form action="../home.php" method="post">
			
			<br>
			<br>
			<fieldset> <legend style="font-family:verdana;font-weight:bold;height:50%">Setup Inicial</legend>
			  <br>
					<label for="app" style="font-family:verdana;margin:20px;">Seleccionar Cliente:</label>
								<a style="margin:385px;"><select name="lista1" id="lista1" style="background-color: white;font-weight:bold;color:black;text-align:center;"></a>
									<option value="0">Seleccionar Cliente:</option>
									<option value="1">La Positiva</option>
									<option value="2">Telefónica del Perú</option>
									<option value="3">RIMAC</option>
									<option value="4">Banco de la Nación</option>
									<option value="5">Banco Falabella</option>
							</select><a href="addapp.php" target="_blank" style="font-family:verdana;margin:5px;">Agregar Aplicación</a>
							<br>
							<p></p>
							<div id="select2lista" name="lista2" id="lista2"></div>
					<p></p>
				<!--/* 	<label for="pma" style="font-family:verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pruebas Multiaplicativo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<select name="pma" id="pma" style="background-color:white;font-weight:bold;color:black;text-align:center">
								  <option value="0">Seleccionar:</option>
								  <option value="1">SI</option>
								  <option value="2">NO</option>
							</select> */-->
		
			<!--<p style="font-family:verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Factor de Ejecución Pruebas multiaplicativo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" id="0p" name="factor" value="0"><label for="0">0%</label>&nbsp;
			<input type="radio" id="5p" name="factor" value="5"><label for="10">5%</label>&nbsp;
			<input type="radio" id="10p" name="factor" value="10"><label for="10">10%</label>&nbsp;
			<input type="radio" id="15p" name="factor" value="15"><label for="15">15%</label>&nbsp;
			<input type="radio" id="20p" name="factor" value="20"><label for="20">20%</label>&nbsp;
			<input type="radio" id="25p" name="factor" value="25"><label for="25">25%</label>&nbsp;
			<input type="radio" id="30p" name="factor" value="30"><label for="30">30%</label>&nbsp;
			</p>-->
		
			<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
			<br>
			<p></p>
			<label for="analista_estima" style="font-family:verdana;margin:20px;">Analista que realiza la Estimación:</label>
			<a style="margin:267px;"><select name="" id="analista_estima" step="0.01" oninput="calcular_Plani_Cierre()" style="background-color:white;font-weight:bold;color:black;text-align:center;"></a>
			<option value="0">Seleccionar Analista:</option>
			  <?php
									$query = $mysqli -> query ("SELECT * FROM colaboradores");
									while ($valores = mysqli_fetch_array($query)) {
									echo '<option value="'.$valores['IdColaborador'].'">'.$valores['Nombre_Completo'].'</option>';}
									?>
			</select><a  href="addanalista.php" target="_blank" style="font-family:verdana;margin:5px;">Aregar Analista</a>
			<p style="font-family:verdana;margin:20px;">Fecha de Estimación:<a style="margin:397px;"><input type="date" id="fecha_estima" name="" style="font-family:verdana;"></p></a>
		
					<label for="pma" style="font-family:verdana;margin:20px;">Iteración de Estimación:</label>
							<a style="margin:348px;"><select name="pma" id="pma" style="background-color:white;font-weight:bold;color:black;text-align:center"></a>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>

							</select>
							</fieldset>					 
							</div>
		<div class="container_planificacion" style="text-align:left">

			<fieldset> <legend style="font-family:verdana;font-weight:bold;">Planificación</legend>
			<p style="font-family:verdana;margin:20px;">% definido de Planificación:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="porcentaje_plani" style="background-color: #000000;font-weight:bold;color:white;text-align:center" placeholder="% definir en Cierre"/>&nbsp;%</p>
			<p style="font-family:verdana;color:red;font-weight:bold;margin:20px;">TOTAL HORAS PLANIFICACIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="total_horas_plani" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold"disabled>&nbsp;horas</p>
			</fieldset>
		</div>

		<div class="container_preparacion" style="text-align:left">

			<fieldset> <legend style="font-family:verdana;font-weight:bold;">Preaparación</legend>
		<p style="font-family:verdana;margin:20px;">Ingresar Número aproximado de Casos de Prueba:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="valor1" step="0.001" oninput="calcular_TPCP(); calcular_TECP()" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center" />&nbsp;Casos de Prueba</p>
		<p style="font-family:verdana;margin:20px;">Tiempo promedio aprox. de Preparación por Caso de Prueba:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name=""  id="valor2" step="0.001" oninput="calcular_TPCP()" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center"/>&nbsp;minutos</p>
		<p style="font-family:verdana;margin:20px;">Tiempo de Preparación de Casos de Prueba:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" step="0.01" input="calcular_TOD()" id="total_TPCP" style = "font-weight:bold;text-align:center"/disabled>&nbsp;horas</p>	
		<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
		<p></p>	
		<label for="coda" style="font-family:verdana;margin:20px;">Complejidad en Obtención Data del Aplicativo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<select name="" id="coda" step="0.001" oninput="calcular_TOD()" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center">
								  <option value="0">Seleccionar Complejidad Data:</option>							  
								  <option value="2">Muy Baja</option>
								  <option value="4">Baja</option>
								  <option value="6">Media</option>
								  <option value="8">Alta</option>
								  <option value="12">Muy Alta</option>


							</select>
			<p></p>
		<label for="micod" style="font-family:verdana;margin:20px;">Número de iteraciones consideradas para obtención Data:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<select name="" id="micod" step="0.001" oninput="calcular_TOD()" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>


							</select><a style="font-family:verdana">&nbsp;ciclos</a>
		<p style="font-family:verdana;margin:20px;">Tiempo en obtención de Datos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" step="0.01" oninput="calcular_TOD();" id="total_TOD" style = "font-weight:bold;text-align:center"/disabled></p>
		<p style="font-family:verdana;color:red;font-weight:bold;margin:20px;">TOTAL HORAS PREPARACIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" step="0.01" input="calcular_HORASPREPA();calcular_TOD();" id="total_HORASPREPA" style = "font-weight:bold;text-align:center"/disabled>&nbsp;horas</p>
		</fieldset>
		<br>
		</div>
		<p></p>	
		<div class="container_ejecucion" style="text-align:left">

			<p></p>

		<p></p>
		<fieldset> <legend style="font-family:verdana;font-weight:bold;">Ejecución</legend>
		<br>
		<label for="pma" style="font-family:verdana;margin:20px;">Complejidad en Verificación de Ambiente del aplicativo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<select name="" id="cvap" step="0.001" oninput="calcular_TVA()" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center">
							<option value="0">Seleccionar Complejidad Ambiente:</option>	
								  <option value="1">Muy Baja</option>
								  <option value="2">Baja</option>
								  <option value="4">Media</option>
								  <option value="6">Alta</option>
								  <option value="8">Muy Alta</option>
								  </select>
								  <p></p>
		<label for="pma" style="font-family:verdana;margin:20px;">Número de iteraciones para Verificación de Ambiente: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<select name="" id="nicva" step="0.001" oninput="calcular_TVA()" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  </select><a style="font-family:verdana">&nbsp;ciclos</a>
		
	  <p style="font-family:verdana;margin:20px;">Tiempo en Verificación de Ambiente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="" id="total_TVA" step="0.01" input="calcular_TVA();calcular_Multiapp();" style = "font-weight:bold;text-align:center"/disabled>&nbsp;horas</p>
		<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
		  <p style="font-family:verdana;margin:20px;">Tiempo promedio de Ejecución por Caso de Prueba:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="tpecp" step="0.01" oninput="calcular_TECP();calcular_EstDefectos();" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center"/>&nbsp;minutos</p>
		  <label for="pma" style="font-family:verdana;margin:20px;">Ciclos de Prueba:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							<select name="ciclop" id="ciclop" step="0.01" oninput="calcular_TECP();calcular_EstDefectos();" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  </select><a style="font-family:verdana">&nbsp;ciclos</a>
			<p style="font-family:verdana;margin:20px;">% de Ejecución Ciclos adicionales:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" step="0.01" oninput="calcular_TECP();calcular_EstDefectos();" id="porcecicloadd" style="background-color:black;font-weight:bold;color:white;text-align:center" value="75"/>&nbsp;%</p>
			<p style="font-family:verdana;margin:20px;">Tiempo en Ejecución de Casos: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="total_TECP" step="0.01" oninput="calcular_TECP();calcular_EjeRegre();calcular_Multiapp();" style = "font-weight:bold;text-align:center"/disabled>&nbsp;horas</p>
			<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
			<p style="font-family:verdana;margin:20px;">% Casos de pruebas con defectos :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" step="0.01" oninput="calcular_EstDefectos();" id="proc_cp_defectos" style="background-color: #000000;font-weight:bold;color:white;text-align:center" value="25" />&nbsp;%</p>
			<p style="font-family:verdana;margin:20px;">Estimado de Defectos :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="est_defectos" step="0.01" oninput="calcular_EstDefectos();calcular_GesDefectos();" style="text-align:center;font-weight:bold"/disabled>&nbsp;defectos</p>
			<p style="font-family:verdana;margin:20px;">Tiempo promedio de atención por Defecto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="tiemp_pro_aten_def" step="0.01" oninput="calcular_GesDefectos();" style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center"/>&nbsp;minutos</p>
			<p style="font-family:verdana;margin:20px;">Tiempo en Gestión de Defectos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="tiemp_gestion_defectos" step="0.01" oninput="calcular_EstDefectos();calcular_TotalEjecucion();calcular_Multiapp();"style="font-weight:bold;text-align:center"/disabled>&nbsp;horas</p>
			<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
			<p style="font-family:verdana;margin:20px;">Pruebas Regresión :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="pruebas_regresion" step="0.01" oninput="calcular_EjeRegre()" style="background-color: #000000;font-weight:bold;color:white;text-align:center" placeholder="Ingresa %"/>&nbsp;%</p>
			<p style="font-family:verdana;margin:20px;">Tiempo en ejecutar pruebas de Regresión:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="tiemp_ejecu_pruebas_reg" step="0.01" oninput="calcular_EjeRegre();calcular_Multiapp();" style="text-align:center;font-weight:bold"/disabled>&nbsp;horas</p>
			<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
			<p style="font-family:verdana;margin:20px;">Tiempo Acompañamiento Pruebas UAT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="tiemp_acomp_pruebas_uat" step="0.01" oninput="calcular_TAPUAT()"  style="background-color: #FB4F5F;font-weight:bold;color:white;text-align:center"/>&nbsp;horas</p>
			<p style="font-family:verdana;margin:20px;">Total Pruebas UAT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="total_pruebas_uat" step="0.01" oninput="calcular_TAPUAT();calcular_Multiapp();" style="text-align:center;font-weight:bold"/disabled>&nbsp;horas</p>
			<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
			<p style="font-family:verdana;margin:20px;">% Pruebas Multiaplicativo :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="pruebas_multiapp" step="0.01" oninput="calcular_Multiapp()" style="background-color: #000000;font-weight:bold;color:white;text-align:center" placeholder="Ingresa %"/>&nbsp;%</p>
			<p style="font-family:verdana;margin:20px;">Tiempo en pruebas Multiaplicativo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="tiempo_pruebas_multi" step="0.01" oninput="calcular_Multiapp();" style="text-align:center;font-weight:bold"/disabled>&nbsp;horas</p>
				<p style="font-family:verdana;color:red;font-weight:bold;margin:20px;">TOTAL HORAS EJECUCIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="total_horas_ejecucion" step="0.01" oninput="calcular_Plani_Cierre();" style="text-align:center;font-weight:bold"/disabled>&nbsp;horas</p>
		</fieldset>
		</div>
		<br>
		<br>
		<div class="container_cierre" style="text-align:left">
		<fieldset> <legend style="font-family:verdana;font-weight:bold;">Cierre</legend>
		<p style="font-family:verdana;margin:20px;">% Cierre respecto de Ejecución:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="porc_cierre_resp_eje" step="0.01" oninput="calcular_Plani_Cierre()" style="background-color: #000000;font-weight:bold;color:white;text-align:center" placeholder="Ingresa %"/>&nbsp;%</p>
				<p style="font-family:verdana;margin:20px;">Tiempo en ejecutar actividades de Cierre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="tiemp_ejecutar_act_cierre" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold"/disabled>&nbsp;horas</p>
				<p style="font-family:verdana;color:red;font-weight:bold;margin:20px;">TOTAL HORAS CIERRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="" id="total_horas_cierre" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold"/disabled>&nbsp;horas</p>
		<br>
		</div>
	</fieldset>
		<p></p>
<div class="container">
  <div class="center" style="text-align:center">
    <button type="reset" style="font-family:verdana;color:white;font-weight:bold;background-color: #c00000;width:10%; height:10%">Limpiar</button>
	<button type="btn-volver" style="font-family:verdana;color:white;font-weight:bold;background-color: #c00000;width:10%; height:10%" href="./home.php">Volver</button>
	<!--<button style="font-family:verdana;color:white;font-weight:bold;background-color: #c00000;width:10%; height:10%">Enviar</button>-->
  </div>
  </div>
</div>
</form>
<br>
<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
<a><img src="img\flecha.jpg" style="width:100%; height:0%"></a>
<div class="container_title" style="text-align:center">
	<p></p>
    <div style="text-align:center; width:650px;height:0px; margin-left:auto; margin-right:auto; margin-bottom:1%; border:0px solid #000;font-size:30px; font-family:verdana;font-weight:bold">Resumen de Estimación</div>
    <br>
	</div>
	<div class="container_resumen" style="text-align:left">
	<img src="img\alphatestersanimation2.gif" style="width:20%; height:2%;img-align:right;float: right;">
			<p></p>
				<div class="card" id="invoice">
			<fieldset> <legend style="font-family:verdana;font-weight:bold;">Resumen Final de Estimación</legend>
			<br>
		<label for="analista_estima" style="font-family:verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;El Analista:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="" id="analista_estima" step="0.01" oninput="calcular_Plani_Cierre()" style="background-color:white;font-weight:bold;color:black;text-align:center">
			<option value="0">Seleccionar Analista:</option>
			  <?php
									$query = $mysqli -> query ("SELECT * FROM colaboradores");
									while ($valores = mysqli_fetch_array($query)) {
									echo '<option value="'.$valores['IdColaborador'].'">'.$valores['Nombre_Completo'].'</option>';}
									?>
			</select>	
		<p style="font-family:verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Realizó una estimación el día: <script>(function(){
		var fecha = new Date();
		document.write(fecha);}())</script></p>	
		
		<label for="app" style="font-family:verdana">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Para el Cliente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<select name="lista3" id="lista3" style="background-color: white;font-weight:bold;color:black;text-align:center;">
							  <option value="0">Seleccionar Cliente:</option>
									<option value="1">La Positiva</option>
									<option value="2">Telefónica del Perú</option>
									<option value="3">RIMAC</option>
									<option value="4">Banco de la Nación</option>
									<option value="5">Banco Falabella</option>
							</select>
							<br>
							<p></p>
							<div id="select3lista" name="lista4" id="lista4"></div>
					<p></p>
	<p style="font-family:verdana;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre de Proyecto o Requerimiento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="" id="nombre_proyecto" style="text-align:center;font-weight:bold;width : 350px; heigth : 15px"></p>				
	<div class="container_resumenin" style="text-align:center">
	<br>
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLANIFICACIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="fin_horas_plani" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold" disabled>&nbsp;horas</p>
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PREPARACIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="fin_horas_prepa" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold" disabled>&nbsp;horas</p>
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EJECUCIÓN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="fin_horas_eje" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold" disabled>&nbsp;horas</p>
	<p style="font-family:verdana;color:black;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CIERRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="fin_horas_cierre" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold" disabled>&nbsp;horas</p>
	<a><img src="img\flecha.jpg" style="width:50%; height:1%"></a>
	<p style="font-family:verdana;color:red;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ESTIMADO TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="" id="estimado_total" step="0.01" oninput="calcular_Plani_Cierre()" style="text-align:center;font-weight:bold" disabled>&nbsp;horas</p>
		
	</div>
</fieldset>
</div>
</div>

<br>
	<div class="col-md-12 text-right mb-3"style="text-align:center">
	    <button class="btn btn-primary" id="download" style="font-family:verdana;font-weight:bold;"> Descargar en PDF</button>
    </div>

	</body>
	
	<!-- Función para Calcular Tiempo promedio aprox. de Preparación por Caso de Prueba-->
			<script type="text/javascript">
			function calcular_TPCP(){
				try{
					var a=parseFloat(document.getElementById("valor1").
						value) || 0,
						b=parseFloat(document.getElementById("valor2").value)
							|| 0;
							
				document.getElementById("total_TPCP").value = (a * b)/60;
				} catch (e) {}
					}
					
			</script>
			
		<!-- Función para Calcular Tiempo en Obtención de Datos y Total de horas para la Preparación-->		
			<script type="text/javascript">
			function calcular_TOD(){
				try{
					var a=parseFloat(document.getElementById("coda").
						value) || 0,
						b=parseFloat(document.getElementById("micod").value)
							|| 0;
							
						document.getElementById("total_TOD").value = (a * b);
				
					var c=parseFloat(document.getElementById("total_TPCP").value) || 0,
						d=parseFloat(document.getElementById("total_TOD").value) || 0;
						
						document.getElementById("total_HORASPREPA").value = (c + d);
				} catch (e) {}
					}
					
			</script>
			
		<!-- Función para Calcular Total de horas para la Preparación-->		
			<script type="text/javascript">
			function calcular_HORASPREPA(){
				try{
					var a=parseFloat(document.getElementById("total_TPCP").
					value) || 0,
						b=parseFloat(document.getElementById("total_TODX").value)
						|| 0;
								
				document.getElementById("total_HORASPREPA").value = (a + b);
				} catch (e) {}
					}
					
			</script>
			
			<!-- Función para Calcular Total de horas en la Verificación de Ambiente-->
			<script type="text/javascript">
			function calcular_TVA(){
				try{
					var a=parseFloat(document.getElementById("cvap").
					value) || 0,
						b=parseFloat(document.getElementById("nicva").value)
						|| 0;
								
				document.getElementById("total_TVA").value = (a * b);
				} catch (e) {}
					}
					
			</script>
			
			<!-- Función para Calcular Total de horas en la Ejecución de Casos de Prueba-->			
			<script type="text/javascript">
			function calcular_TECP(){
				try{
					var a=parseFloat(document.getElementById("ciclop").value),
						b=parseFloat(document.getElementById("porcecicloadd").value) || 0,
						c=parseFloat(document.getElementById("valor1").value) || 0,
						d=parseFloat(document.getElementById("tpecp").value) || 0;
								
				document.getElementById("total_TECP").value = (d*c*(1+((b/100)*(a-1))))/60;
				} catch (e) {}
					}
					
			</script>
			
				<!-- Función para Calcular Estimado de Defectos-->			
			<script type="text/javascript">
			function calcular_EstDefectos(){
				try{
					var a=parseFloat(document.getElementById("ciclop").value),
						b=parseFloat(document.getElementById("porcecicloadd").value) || 0,
						c=parseFloat(document.getElementById("valor1").value) || 0,
						d=parseFloat(document.getElementById("proc_cp_defectos").value) || 0;
								
				document.getElementById("est_defectos").value = c*(1+(b/100)*(a-1))*(d/100);
				} catch (e) {}
					}
					
			</script>
			
						<!-- Función para Calcular Tiempo en Gestión de Defectos-->			
			<script type="text/javascript">
			function calcular_GesDefectos(){
				try{
					var a=parseFloat(document.getElementById("est_defectos").value),
						b=parseFloat(document.getElementById("tiemp_pro_aten_def").value) || 0;
								
				document.getElementById("tiemp_gestion_defectos").value = (a*b)/60;
				} catch (e) {}
					}
					
			</script>
			
							<!-- Función para Calcular Tiempo en Ejecutar pruebas de Regresión-->			
			<script type="text/javascript">
			function calcular_EjeRegre(){
				try{
					var a=parseFloat(document.getElementById("pruebas_regresion").value) || 0,
						b=parseFloat(document.getElementById("total_TECP").value) || 0;
								
				document.getElementById("tiemp_ejecu_pruebas_reg").value = (a/100)*b;
				} catch (e) {}
					}
					
			</script>
			
			
									<!-- Función para Calcular Tiempo Acompañamiento Pruebas UAT-->			
			<script type="text/javascript">
			function calcular_TAPUAT(){
				try{
					var a=parseFloat(document.getElementById("tiemp_acomp_pruebas_uat").value) || 0;
								
				document.getElementById("total_pruebas_uat").value = a;
				} catch (e) {}
					}
					
			</script>
			
			
									<!-- Función para Calcular Tiempo en Pruebas Multiaplicativo-->		<!-- Función para Calcular Total de Horas Ejecucion-->		
			<script type="text/javascript">
			function calcular_Multiapp(){
				try{
					var a=parseFloat(document.getElementById("pruebas_multiapp").value) || 0,
						b=parseFloat(document.getElementById("total_TECP").value) || 0;
								
				document.getElementById("tiempo_pruebas_multi").value = (a/100)*b;
				
					var c=parseFloat(document.getElementById("total_TVA").value) || 0,
						d=parseFloat(document.getElementById("total_TECP").value) || 0,
						e=parseFloat(document.getElementById("tiemp_gestion_defectos").value) || 0,
						f=parseFloat(document.getElementById("tiemp_ejecu_pruebas_reg").value) || 0,
						g=parseFloat(document.getElementById("total_pruebas_uat").value) || 0,
						h=parseFloat(document.getElementById("tiempo_pruebas_multi").value) || 0;
					
				document.getElementById("total_horas_ejecucion").value = (c+d+e+f+g+h);	
					
				} catch (e) {}
					}
					
			</script>
			
			
															<!-- Función para Calcular Planificación y Cierre-->			
			<script type="text/javascript">
			function calcular_Plani_Cierre(){
				try{
					var a=parseFloat(document.getElementById("total_horas_ejecucion").value) || 0,
						b=parseFloat(document.getElementById("porc_cierre_resp_eje").value) || 0;
								
				document.getElementById("porcentaje_plani").value = b;
				document.getElementById("tiemp_ejecutar_act_cierre").value = a*(b/100);
				
					var c=parseFloat(document.getElementById("tiemp_ejecutar_act_cierre").value) || 0;
				document.getElementById("total_horas_cierre").value = c;
				document.getElementById("total_horas_plani").value = c;
				
					var d=parseFloat(document.getElementById("total_horas_plani").value) || 0;
				document.getElementById("fin_horas_plani").value = Math.round(d);
				
					var e=parseFloat(document.getElementById("total_HORASPREPA").value) || 0;
				document.getElementById("fin_horas_prepa").value = Math.round(e);
				
					var f=parseFloat(document.getElementById("total_horas_ejecucion").value) || 0;
				document.getElementById("fin_horas_eje").value = Math.round(f);
				
					var g=parseFloat(document.getElementById("total_horas_cierre").value) || 0;
				document.getElementById("fin_horas_cierre").value = Math.round(g);
				
					var h=parseFloat(document.getElementById("fin_horas_plani").value) || 0,
						i=parseFloat(document.getElementById("fin_horas_prepa").value) || 0,
						j=parseFloat(document.getElementById("fin_horas_eje").value) || 0,
						k=parseFloat(document.getElementById("fin_horas_cierre").value) || 0;
						
				document.getElementById("estimado_total").value = (h+i+j+k);
				
				} catch (e) {}
					}
									
			</script>
</html>

<!-- Función para traer datos desde SQL para Las Listas de Listas-->		
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(0);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"continente=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lista3').val(0);
		recargarLista2();

		$('#lista3').change(function(){
			recargarLista2();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista2(){
		$.ajax({
			type:"POST",
			url:"datos2.php",
			data:"api=" + $('#lista3').val(),
			success:function(r){
				$('#select3lista').html(r);
			}
		});
	}
</script>
