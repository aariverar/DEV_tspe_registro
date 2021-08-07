<?php
include('db.php');
$usuario=$_POST['usuario'];
$pass=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect('localhost','root','','tspe_registros');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$pass'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
     <h1 class="bad">ERROR DE AUTENTICACIÓN</h1>
    <?php
    include("index.html");
  ?>
 
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
