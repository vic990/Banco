<!doctype html>
<html lang="en">
<html>
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
           
           <header id="main-header">
            <h3 > Gorilla Bank</h3>
            <h4>Su banco de confianza!</h4><br>
            <h4>Reporte General de clientes</h4>
           </header>    
                
      <a href="index.php">Ingresar nuevo cliente</a>
  
<table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Cedula</th>
      <th scope="col">Numero de cuenta</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo de cuenta</th>
      <th scope="col">Interes a pagar</th>
      <th scope="col">Deposito</th>
      <th scope="col">Saldo nuevo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
    <?php
    include("conexion.php");
    $sql="SELECT * FROM cliente";
    $result=$con->query($sql);
    while($row=mysqli_fetch_array($result)){
    ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $row ['cedula']; ?></th>
      <td><?php echo $row ['numerocuenta']; ?></td>      
      <td><?php echo $row ['nombre']; ?></td>
      <td><?php echo $row ['tipocuenta']; ?></td>
      <td><?php echo $row ['interes']; ?></td>
      <td><?php echo $row ['deposito']; ?></td>
      <td><?php echo $row ['saldonuevo']; ?></td>
      <td>
        <div class="text-center">
        <div class="btn-group">
                          
            <a href ="eliminar.php?cedula=<?php echo $row['cedula'];?>"> Eliminar </a>
                            
            <a href ="modificar.php?cedula=<?php echo $row['cedula'];?>"> Modificar </a>
        </div>
        </div>
     </td>
    </tr>     
    <?php
       }
    ?>
    
  </tbody>
  </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>