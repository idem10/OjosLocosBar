<?php
include('conexion.php');
$nombre=$_POST['nombre'];
$desc=$_POST['descripcion'];
$fecha=$_POST['fecha'];
$cover=$_POST['precio'];
$datos = mysql_query("INSERT INTO `eventos`(`id_e`,`nombre`, `descripcion`, `fecha`, `precio`) VALUES('NOW()','$nombre','$desc','$fecha','$cover')");
mysql_close($con);
header("location:ingresarPromo.php");
mysql_close($con);
mysql_close($db);
?>