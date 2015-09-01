<?php
include('conexion.php');
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$estado=$_POST['estado'];
$quejas=$_POST['quejas'];
$datos = mysql_query("insert into registro(id_r,nombre,correo,telefono,ciudad,estado,quejas) values('NOW()','$nombre','$correo','$telefono','$ciudad','$estado','$quejas')");
mysql_close($con);
header("location:contacto.php");
mysql_close($con);
mysql_close($db);
?>