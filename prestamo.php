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
      <h4  >Su banco de confianza!</h4>
    </header>

    <div class="modal-dialog text-center">     
      <div class="col-sm-9 main-section">
          <div class="modal-content">
              <form action="insertprestamo.php" id="frmajax" method="POST">
                  <input type="text" value="guardar" name="opc" hidden>
                  <label>Numero de cedula</label>
                  <br>
                  <input class="form-group" type="text" required name="cedula" id="cedula" placeholder="Numero de cedula">
                  <br>
                  <label>Nombre</label>
                  <br>
                  <input class="form-group" type="text" required name="nombre" id="nombre" placeholder="Nombre">
                 <br>
                  <label>Monto del prestamo</label>
                  <br>
                  <input class="form-group" type="text" required name="monto" id="monto" placeholder="Monto del prestamo">
                 <br>
                 <label>fecha de inicio</label>
                  <br>
                  <input type="text" id="inicio" name="inicio" required placeholder="dd/mm/aaaa">
                 <br>
                  <label>Fecha final</label>
                 <br>
                 <input type="text" id="final" name="final" required placeholder="dd/mm/aaaa">
                 <br>
                 <label>Abono mensual</label><br>
                 <input class="form-group" type="text" required name="abono" id="abono" placeholder="Abono mensual">        
                 <br>                                 
                  <!-- <input type="date" id="bday" name="bday" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}">-->
                  <p></p>
                  <button id="btnguardar" class="btn btn-primary">Guardar datos</button>
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