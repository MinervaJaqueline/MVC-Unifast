<?php
/*Recibir parametros*/
$nombre=$_POST['Nom_producto'];
$precio=$_POST['Precio'];
$categoria=$_POST['Categoria'];
$clave=$_POST['clave'];
$inventario=$_POST['inventario'];
/*Agregar archivo de conexion*/
include("../Modelo/conecta.phtml");
$con=conecta();

$insert = "insert into rproducto values (default, '$nombre', $precio, '$categoria','$clave',$inventario);";
//echo $insert;  
mysqli_query($con,$insert);
print "<script> alert (\"Producto Registrado\");window.location='../Vista/registrar_producto.html';</script>";
?>