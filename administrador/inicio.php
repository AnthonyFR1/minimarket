

  <link rel="stylesheet" href="../css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../css/2.css">
	<link rel="stylesheet" href="../css/estilo.css">

<?php include("template/encabezado.php"); ?>

      <div class="col-md-12">
        

        <div class="jumbotron">
            <h1 class="display-3">Bienvenido <?php echo $_SESSION['usuario'];?> </h1>
          <p class="lead">Administrador del sitio web</p>
          <hr class="my-2">
          <p>Mas info</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="listar.php" role="button">Administrar Productos</a>
          </p>
        </div> 
      </div>

<?php include("../pie.php"); ?>


