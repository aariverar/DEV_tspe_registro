<?php 
$conexion=mysqli_connect('bfrjjmrh4mrn5h04ltgi-mysql.services.clever-cloud.com','upngpfhdqtbsetus','mrxBzwRgNSThtNva01Xp','bfrjjmrh4mrn5h04ltgi');
$api=$_POST['api'];

	$sql="SELECT IdApp,
			 Cod_Cliente,
			 Nombre_App 
		from aplicaciones 
		where Cod_Cliente='$api'";

	$result=mysqli_query($conexion,$sql);

	$cadena2="<label style='font-family:verdana'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aplicación:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
			<select id='lista4' name='lista4' style='text-align:center;font-weight:bold'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena2=$cadena2.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena2."</select>";
	

?>