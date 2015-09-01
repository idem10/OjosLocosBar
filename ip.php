<?php
include('conexion.php');
$nombre=$_POST['nombre'];
$desc=$_POST['descripcion'];
$cover=$_POST['precio'];
$datos = mysql_query("INSERT INTO `barra1`(`id`, `nombre`, `descripcion`, `precio`) VALUES ('NOW()','$nombre','$desc','$cover')");
mysql_close($con);
header("location:ingresarPromo.php");
mysql_close($con);
mysql_close($db);
?>