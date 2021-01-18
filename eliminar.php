<?php
include("conexion.php");

$cedula= $_REQUEST['cedula'];

$sql="DELETE FROM cliente WHERE cedula='$cedula'";
$result = $con->query($sql);

if ($result){
    header("Location: reportecliente.php");
}
else{
    echo "Insercion no exitosa";

}

?>