<link rel="stylesheet" href="../css/fontawesome-all.min.css">
	<link rel="stylesheet" href="../css/2.css">
	<link rel="stylesheet" href="../css/estilo.css">

<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["codigo"]) || !isset($_POST["descripcion"]) || !isset($_POST["precioVenta"]) || !isset($_POST["precioCompra"]) || !isset($_POST["stock"])) exit();

#Si todo va bien, se ejecuta esta parte del código...
include_once "config/base_de_datos.php";
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$precioVenta = $_POST["precioVenta"];
$precioCompra = $_POST["precioCompra"];
$stock = $_POST["stock"];


 $sentencia= $base_de_datos->prepare("INSERT INTO productos (codigo, descripcion, precioVenta, precioCompra, stock) VALUES (?, ?, ?, ?, ?);");
  $resultado = $sentencia->execute([$codigo, $descripcion, $precioVenta, $precioCompra, $stock]);

      

if($resultado === TRUE){
	header("Location: listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "../pie.php" ?>