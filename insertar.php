<?php
include("conexion.php");
$cedula=$_POST['cedula'];
$numerocuenta=$_POST['numerocuenta'];
$nombre=$_POST['nombre'];
$tipocuenta=$_POST['tipocuenta'];
$deposito=$_POST['deposito'];

include("process.php");
$sql="INSERT INTO cliente VALUES ('$cedula','$numerocuenta','$nombre','$tipocuenta','$interes','$deposito','$saldonuevo')";
$result=$con->query($sql);

if($result){
echo "Registrado.";
header("location:index.php");
}
else{
    echo "no registrado";
}


?>