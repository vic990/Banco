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
  <header id="main-header">
            <h3 > Gorilla Bank</h3>
            <h4>Su banco de confianza!</h4>
            <h4>Reporte General de Banco</h4>
           </header> 

           <a href="index.php">Inicio</a>
           <table class="table">
  <thead class="black white-text">
    <tr>
      <th scope="col">Total de clientes</th>      
      <th scope="col">Total de interes</th>
      <th scope="col">Total de saldo nuevo</th>
      <th scope="col">Saldo nuevo mayor</th>
      <th scope="col">Saldo nuevo menor</th>
      
      
      
    </tr>
  </thead>
    <?php
    include("conexion.php");
    $sql="select count(cedula) as Total_clientes,
    sum(interes) as Total_de_interes,
    sum(saldonuevo) as Total_de_saldo_nuevo,
    max(saldonuevo) as Mayor_saldo_nuevo,
    min(saldonuevo) as Menor_saldo_nuevo
    from cliente";
    $result=$con->query($sql);
    while($row=mysqli_fetch_array($result)){
    ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $row ['Total_clientes']; ?></th>
      <td><?php echo $row ['Total_de_interes']; ?></td>      
      <td><?php echo $row ['Total_de_saldo_nuevo']; ?></td>
      <td><?php echo $row ['Mayor_saldo_nuevo']; ?></td>
      <td><?php echo $row ['Menor_saldo_nuevo']; ?></td>
      
      
      <td>
        <div class="text-center">
        <div class="btn-group">
                          
                       
            
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