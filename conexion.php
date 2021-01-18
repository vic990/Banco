<?php 

$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con,"banco") or die("No se pudo conectar a la base de datos");
?>  