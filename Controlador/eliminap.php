<?php
/*Recibir parametros*/
$idpro=$_POST['idRproducto'];
$nom=$_POST['Nom_producto'];
$pre=$_POST['Precio'];
$inv=$_POST['inventario'];


    /*Agregar archivo de conexión*/
    include("../Modelo/conecta.phtml");
    $con=conecta();
    $eliminar="delete from rproducto where idRproducto=$idpro";
    mysqli_query($con,$eliminar);
    echo "Producto eliminado";

print "<script> alert (\"Producto Eliminado\");window.location='../Controlador/listaproducto.php';</script>";    

?>
<br>
<a href="../Controlador/listaproducto.php">Consulta productos</a>