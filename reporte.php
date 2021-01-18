<!doctype html>
<html lang="en">
  <head>
    <title>
        Reporte general
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Total de estudiantes</th>
      <th scope="col">Total de materias</th>
      <th scope="col">Estudiantes menor a 8</th>
      <th scope="col">Estudiantes entre 8 y 12</th>
      <th scope="col">Estudiantes mayor a 12</th>
      <th scope="col">Credito mayor</th>
      <th scope="col">Credito menor</th>
    </tr>
  </thead>
  <?php
        include("conexion.php");
        $sql="SELECT count(carnet) as Total_universitarios,
        sum(materia) as Total_de_materias,
        count(case when credito between 0 and 7
        then carnet end) as unversitarios_menor_a_8,
        count(case when credito between 8 and 12
        then carnet end) as Universitario_8_a_12,
        count(case when credito > 12
        then carnet end) as Universitario_mayor_12,
        max(credito) as Mayor_credito,
        min(credito) as Menor_credito
        from matricula";
                $result=$con->query($sql);
                while($row=mysqli_fetch_array($result)){
                    
    ?>
  <tbody>
    <tr>
    
      <th scope="row"><?php echo $row ['Total_universitarios']; ?></th>
      <td><?php echo $row ['Total_de_materias']; ?></td>
      <td><?php echo $row ['unversitarios_menor_a_8']; ?></td>
      <td><?php echo $row ['Universitario_8_a_12']; ?></td>
      <td><?php echo $row ['Universitario_mayor_12']; ?></td>
      <td><?php echo $row ['Mayor_credito']; ?></td>
      <td><?php echo $row ['Menor_credito']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>


   

            
                
            
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>