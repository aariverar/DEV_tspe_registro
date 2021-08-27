<?php
			$servername = "bfrjjmrh4mrn5h04ltgi-mysql.services.clever-cloud.com";
            $username = "upngpfhdqtbsetus";
            $password = "mrxBzwRgNSThtNva01Xp";
            $dbname = "bfrjjmrh4mrn5h04ltgi";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
					
			if(isset($_POST["guardarcurso"])){

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO `tspe_cursos`(`nombres`,`apellidos`,`correo`,`seniority`,`servicio`,`curso`,`fecha`)VALUES ('".$_POST["nombres"]."','".$_POST["apellidos"]."','".$_POST["correo"]."','".$_POST["cate"]."','".$_POST["servicio"]."','".$_POST["curso"]."','".$_POST["trip-start"]."');";

            if (mysqli_query($conn, $sql)) {
               echo "Registro ingresado correctamente<br>";
			   echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
		 

?>