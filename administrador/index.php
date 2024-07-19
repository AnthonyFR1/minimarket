<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
      <div class="row">
        <div class="col-md-4">
        </div>


        <div class="col-md-4">
        </br></br></br>
      

        <div class="card">
        <div class="card-header">
          <center>
          <img src="../img/logojema.PNG">
          </center>
        </div>
        <div class="card-body">

        <?php if(isset($mensaje)) {?>
            <div class="alert alert-danger" role="alert">
                  <?php echo $mensaje; ?>
            </div>
        <?php } ?>

            <form action="config/validar.php" method="POST">
                <div class = "form-group">
                <label>Usuario</label>
                <input type="text" class="form-control" name="usuario" pattern="[@-A-Za-z0-9_-@]{1,35}"  placeholder="Ecribe tu usuario">
                </div>

                <div class="form-group">
                <label>Contraseña</label>
                <input type="password"  class="form-control" name="contraseña" pattern="[A-Za-z0-9_-]{1,35}"  placeholder="Escribe tu contraseña">
                </div>
      
                <button type="submit" class="btn btn-primary">Ingrese al Sistema</button>
                <button type="submit" class="btn btn-primary" header(Location:../index.php)>Regrese</button>
                
                </form>
  
  </div>
  
  </div>
</div>
</div>  
      </div>
    
    </div>
  </div>

  </body>
</html>

