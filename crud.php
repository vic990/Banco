<?php
try {

    $conexion = new PDO('mysql:host=localhost;dbname=banco', "root", "");
        
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

switch($_POST['opc'])
{

    case "guardar":
    try{
     
     
             $sql = $conexion->prepare("INSERT INTO cliente
             VALUES('".$_POST['numerocuenta']."','".$_POST['nombre']."','".$_POST['tipocuenta']."','".$_POST['deposito']."')");       
             $sql->execute();         
             header("location:index.php");   
       }
       catch (PDOException $e) {
       print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
       die();
       } 
       break;/*

       case "eliminar":
    try{ 
      $sql = $conexion->prepare("DELETE FROM matricula WHERE carnet =".$_POST['carnet']);       
      $sql->execute();         
      header("location:index.php");   
       }
       catch (PDOException $e) {
       print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
       die();
       } 
       break;

       case "modificar":
        try{
          
          include("process.php");
                $sql = $conexion->prepare("UPDATE matricula SET nombre='".$_POST['nombre']."',materia='".$_POST['materia']."',credito='".$_POST['credito']."',pago='$monto' WHERE carnet=".$_POST['carnet']);       
                $sql->execute();         
                header("location:index.php");   
          }
            catch (PDOException $e) {
          print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
          die();
      }
       break;*/

}

?>