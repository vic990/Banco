<?php
include("conexion.php");
$cedula=$_POST['cedula'];
$numerocuenta=$_POST['numerocuenta'];
$nombre=$_POST['nombre'];
$tipocuenta=$_POST['tipocuenta'];
$deposito=$_POST['deposito'];

include("process.php");
$sql="UPDATE cliente SET numerocuenta ='$numerocuenta',nombre='$nombre',
tipocuenta='$tipocuenta',interes ='$interes',deposito='$deposito',saldonuevo='$saldonuevo' WHERE cedula='$cedula'";

$resul=$con->query($sql);
if($resul){
   header("location: reportecliente.php");
}
else{
    echo "No modificado";
}

?>