<?php 
include('conexion.php');
$eliminar= $_GET['id'];
$tabla=$_GET['tab'];
mysql_query("DELETE FROM `bar`.$tabla WHERE $tabla.`id`=$eliminar",$con); 
header('location:ingresarPromo.php');
?>