<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="ingreso.css">  
  </head>
  <body>
  <?php  
  
   $cedula = $_REQUEST['cedula'];
   include("conexion.php");
           $sql="SELECT * FROM cliente WHERE cedula ='$cedula'";
           $result=$con->query($sql);
           $row=mysqli_fetch_array($result);
?>
<div id="link">
    <a href="reportecliente.php">Reporte de clientes</a>
    </div>

<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
         <form action="modificar2.php" id="frmajax" method="POST">
         <input type="text" value="modificar" name="opc" hidden>

        <label>Numero de cedula</label><br>
         <input type="text" REQUIRED name="cedula" placeholder = "cedula" value="<?php echo $row['cedula'];?>"readonly> <br><br>

         <label>Numero de cuenta</label><br>
         <input type="text" REQUIRED name="numerocuenta" placeholder = "numerocuenta" value="<?php echo $row['numerocuenta'];?>" readonly> <br><br>

         <label>Nombre</label><br>
         <input type="text" REQUIRED name="nombre" placeholder = "nombre" value="<?php echo $row['nombre'];?>"/> <br><br>

         <label>Tipo de cuenta</label><br>
         <select class="custom-select custom-select-sm" name="tipocuenta">
                  <option selected><?php echo $row['tipocuenta'];?></option>
                  <option >Ahorro</option>
                  <option >Corriente</option>
                  <option >FAL</option>
                  <option >Prestamo</option>
                  </select> 
                  <br><br>
                  <label>Monto depositado</label><br>
         <input type="text" REQUIRED name="deposito" placeholder = "deposito" value="<?php echo $row['deposito'];?>"/> <br><br>

         <button id="btnguardar" class="btn btn-primary">Modificar</button>
         <br><br>

        </form>
        </div>  
	  	</div>
    </div>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>