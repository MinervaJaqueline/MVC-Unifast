
<?php

include ("../Modelo/conecta.phtml");
$con = conecta();
    if($con->connect_error)
    {
        die('Error de conexión ('.$con->connect_errno.')'. $con->connect_error);
    }
    else{
        $num = mysqli_num_rows(mysqli_query($con, "select idRproducto, Nom_producto, Precio, inventario from rproducto;"));
        $con->close();
    }
?>
 <h1><b>Existen <?php echo $num; ?> Productos Guardados </b></h1>
 <table align= "center" border="1">
                <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Inventario</th>
                    <th>Acci&oacute;n</th>
                </tr>
            
            
    <?php 
    $con = conecta();
    $consulta ="select idRproducto, Nom_producto, Precio, inventario from rproducto;";
    $resultado= $con->query($consulta);
    $filas = $resultado->num_rows;
    for($x=0; $x<$filas; $x++)
    {
        $dato = $resultado->fetch_object();
        echo "<td>".$dato->idRproducto."</td>";
        echo "<td>".$dato->Nom_producto."</td>";
        echo "<td>".$dato->Precio."</td>";
        echo "<td>".$dato->inventario."</td>";
        echo "<td><a href='editaproducto.php?idRproducto=$dato->idRproducto'>Modificar</a> <a href='eliminaproducto.php?idRproducto=$dato->idRproducto'>Eliminar</a></td>";
        echo"</tr>";


    }
    ?>
  
    </table>
    <?php
    echo "<td><a href='../Vista/index.html'>REGRESAR</a></td>";
    
    ?>

