<?php
include('conexion.php');
$tabla=$_POST['tabla'];
echo $tabla;
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$datos = mysql_query("INSERT INTO ".$tabla."(`id`, `nombre`, `descripcion`) VALUES('NOW()','$nombre','$descripcion')");
mysql_close($con);
header('location:ingresarPromo.php');
mysql_close($con);
mysql_close($db);
?>