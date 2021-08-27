<?php 

$servername = "bfrjjmrh4mrn5h04ltgi-mysql.services.clever-cloud.com";
$username = "upngpfhdqtbsetus";
$password = "mrxBzwRgNSThtNva01Xp";
$dbname = "bfrjjmrh4mrn5h04ltgi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registros en BD</title>

    <!-- links para exportar a excel -->
    <script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<br><br>

<div class="container">
    <div class="card">
        <div class="card-header">
            Tabla de Base de Datos Registro Capacitaciones
        </div>
        <div class="card-body">
            <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>

            <table id="tabla" class="table table-border table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Seniority</th>
                    <th>Servicio</th>
                    <th>Capacitación</th>
                    <th>Fecha Registro</th>

                </tr>
                </thead>
                <tbody>
                <?php 
		$sql="SELECT * from tspe_cursos";
		$result=mysqli_query($conn,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
         		<tr>
			<td><?php echo $mostrar['idusuario'] ?></td>
			<td><?php echo $mostrar['nombres'] ?></td>
			<td><?php echo $mostrar['apellidos'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['seniority'] ?></td>
			<td><?php echo $mostrar['servicio'] ?></td>
			<td><?php echo $mostrar['curso'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
		</tr>
	<?php 
	}
	 ?> 
                

                </tbody>
            </table>
        </div>
    </div>
</div>






<!-- script para exportar a excel -->
<script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reporte de prueba", //Nombre del archivo de Excel
            sheetname: "Reporte de prueba", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>

</body>
</html>