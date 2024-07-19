<link rel="stylesheet" href="../css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../css/2.css">
	<link rel="stylesheet" href="../css/estilo.css">

<?php include_once "template/encabezado.php" ?>



<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php" enctype="multipart/form-data" >
		<label for="codigo">Código de barras:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="descripcion">Descripción:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="text" id="precioVenta" placeholder="Precio de venta">

		<label for="precioCompra">Precio de compra:</label>
		<input class="form-control" name="precioCompra" required type="text" id="precioCompra" placeholder="Precio de compra">

		<label for="stock">Stock:</label>
		<input class="form-control" name="stock" required type="text" id="stock" placeholder="Cantidad o stock">



		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "../pie.php" ?>