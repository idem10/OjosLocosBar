<?php 
include('conexion.php');
$eliminar= $_GET['id'];
mysql_query("DELETE FROM `bar`.`usuarios` WHERE `usuarios`.`idusuario`=$eliminar",$con); 
header('location:ingresarPromo.php');
?>