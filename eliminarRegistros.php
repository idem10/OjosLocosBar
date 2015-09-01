<?php 
include('conexion.php');
$eliminar= $_GET['id'];
mysql_query("DELETE FROM `bar`.`registro` WHERE `registro`.`id_r`=$eliminar",$con); 
header('location:ingresarPromo.php');
?>