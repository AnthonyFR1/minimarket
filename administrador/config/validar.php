<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","ventas");

$consulta="SELECT * FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_rol']==1){ //administrador
    header("location:../inicio.php");

}else
if($filas['id_rol']==2){ //cliente
header("location:../../index.php");
}
else{
    ?>
     <?php
     header("Location:../../index.php");
     
    //include("../index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

