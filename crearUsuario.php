<?php
include('conexion.php');
$nombre=$_POST['usuario'];
$correo=md5($_POST['contraseña']);
$datos = mysql_query("insert into usuarios(idusuario,usuario,password) values('NOW()','$nombre','$correo')");
mysql_close($con);
header("location:ingresarPromo.php");
mysql_close($con);
mysql_close($db);
?>