<?php
/*Recibir parametros*/
$idpro=$_POST['idRproducto'];
$nom=$_POST['Nom_producto'];
$pre=$_POST['Precio'];
$inv=$_POST['inventario'];



    /*Agregar archivo de conexión*/
    include("../Modelo/conecta.phtml");
    $con=conecta();
    $actualiza="update rproducto set idRproducto=$idpro, Nom_producto='$nom', Precio='$pre', inventario='$inv' where idRproducto=$idpro";
    mysqli_query($con,$actualiza);
    echo "Producto guardado";

print "<script> alert (\"Producto Actualizado\");window.location='../Controlador/listaproducto.php';</script>";

?>
<br>
<a href="../Controlador/listaproducto.php">Consulta producto</a>