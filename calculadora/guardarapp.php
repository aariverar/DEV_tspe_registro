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
					
			if(isset($_POST["submit2"])){

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO `aplicaciones`(`Cod_Cliente`,`Nombre_App`)VALUES ('".$_POST["codigo"]."','".$_POST["nombre_app"]."');";

            if (mysqli_query($conn, $sql)) {
               echo "Registro ingresado correctamente<br>";
			   echo"Datos Guardados Correctamente<br><a href='index.php'>Volver</a>";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
		 

?>