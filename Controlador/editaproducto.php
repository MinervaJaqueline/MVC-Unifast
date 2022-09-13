<?php

	$id=$_GET['idRproducto'];
	include("../Modelo/conecta.phtml");
    
?>
<form action="editp.php" method="POST">
    <table align= "center" border="1">
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Inventario</th>
            <th colspan="2">Acci&oacute;n</th>
        </tr>
    <?php 
        $con = conecta();
        
        $consulta ="select idRproducto, Nom_producto, Precio, inventario from rproducto where idRproducto=$id";
        $resultado= $con->query($consulta);
        $resultado= $con->query($consulta);
        $filas = $resultado->num_rows;
        for($x=0; $x<$filas; $x++)
        {
            $dato = $resultado->fetch_object();
            echo "<tr>";
            echo "<td><input type='text' name='idRproducto' readonly value=' ".$dato->idRproducto."'></td>";
			echo "<td> <input type='text' name='Nom_producto' value='".$dato->Nom_producto."'></td>";
			echo "<td> <input type='text' name='Precio' value='".$dato->Precio."'></td>";
			echo "<td> <input type='text' name='inventario' value='".$dato->inventario."'></td>";
			echo "<td> <input type='submit' value='Actualizar'";
			echo "</tr>";

            
        }
    ?>
</table>