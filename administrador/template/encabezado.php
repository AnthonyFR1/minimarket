<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php
//session_start();
if(!isset($_SESSION['usuario'])){
  header("Location:index.php");
}else{
    if($_SESSION['usuario']=="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];
    }
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
	

	<link rel="stylesheet" href="./css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./css/2.css">
	<link rel="stylesheet" href="./css/estilo.css">
  
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				
          <a class="navbar-brand active" href="#" style="color:white;">USUARIO: <?php  echo $_SESSION['usuario'];?></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
          <li><a href="../administrador/inicio.php">Inicio</a></li>
					<li><a href="../administrador/listar.php">Productos</a></li>
					<li><a href="../administrador/vender.php">Vender</a></li>
					<li><a href="../administrador/ventas.php">Ventas</a></li>
          <li><a href="../index.php">Ver sitio web</a></li>
          <li><a name="cerrar" href="../administrador/cerrar.php">Cerrar Sesión</a> </li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">