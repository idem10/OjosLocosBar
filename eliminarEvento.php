<?php 
require('conexion.php');
$eliminar= $_GET['id'];
mysql_query("DELETE FROM `bar`.`eventos` WHERE `eventos`.`id_e`=$eliminar",$con); 

?>