<link rel="stylesheet" href="../css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../css/2.css">
	<link rel="stylesheet" href="../css/estilo.css">

<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "config/base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}


?>
<?php include_once "template/encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="codigo">Código de barras:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

			<label for="descripcion">Descripción:</label>
			<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

			<label for="precioVenta">Precio de venta:</label>
			<input value="<?php echo $producto->precioVenta ?>" class="form-control" name="precioVenta" required type="text" id="precioVenta" placeholder="Precio de venta">

			<label for="precioCompra">Precio de compra:</label>
			<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="text" id="precioCompra" placeholder="Precio de compra">

			<label for="stock">Stock:</label>
			<input value="<?php echo $producto->stock ?>" class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad o Stock">

    
    
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "../pie.php" ?>
