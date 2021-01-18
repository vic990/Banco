<?php
include("conexion.php");
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$monto=$_POST['monto'];
$inicio=$_POST['inicio'];
$final=$_POST['final'];
$abono=$_POST['abono'];

$sql="INSERT INTO prestamo VALUES ('$cedula','$nombre','$monto','$inicio','$final','$abono')";
$result=$con->query($sql);

if($result){
echo "Registrado.";
header("location:index.php");
}
else{
    echo "no registrado";
}
?>