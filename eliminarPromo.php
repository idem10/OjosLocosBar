<?php 
include('conexion.php');
$eliminar= $_GET['id'];
mysql_query("DELETE FROM `bar`.`barra1` WHERE `barra1`.`id`=$eliminar",$con); 
header('location:ingresarPromo.php');
?>