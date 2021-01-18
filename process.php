<?php
include("conexion.php");
$cedula=$_POST['cedula'];
$numerocuenta=$_POST['numerocuenta'];
$nombre=$_POST['nombre'];
$tipocuenta=$_POST['tipocuenta'];
$interes=0;
$deposito=$_POST['deposito'];
$saldonuevo=0;

switch($tipocuenta)
{
    case "Ahorro";
        $interes=$deposito*0.10;
        $saldonuevo=$deposito + $interes;
        break;
    case "Corriente":
        $interes=$deposito*0.08;
        $saldonuevo=$deposito + $interes;
        break;
    case "FAL":
        $interes=$deposito*0.12;
        $saldonuevo=$deposito + $interes;
        break;  
    case "Prestamo":
    $interes=$deposito*0.0;
    $saldonuevo=$deposito + $interes;
    break;    
}



?>