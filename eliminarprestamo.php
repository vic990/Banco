<?php
include("conexion.php");

$cedula= $_REQUEST['cedula'];

$sql="DELETE FROM prestamo WHERE cedula='$cedula'";
$result = $con->query($sql);

if ($result){
    header("Location: index.php");
}
else{
    echo "Insercion no exitosa";

}

?>