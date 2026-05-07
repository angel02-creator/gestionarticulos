<?php

include("conexion.php");

$sql = "SELECT * FROM articulos";
$resultado = $conn->query($sql);

echo "<table>";

echo "<tr>
<th>ID</th>
<th>Nombre</th>
<th>Marca</th>
<th>Cantidad</th>
<th>Bodega</th>
<th>Acción</th>
</tr>";

while($fila = $resultado->fetch_assoc()){

    echo "<tr>
    <td>".$fila['id']."</td>
    <td>".$fila['nombre']."</td>
    <td>".$fila['marca']."</td>
    <td>".$fila['cantidad']."</td>
    <td>".$fila['bodega']."</td>
    <td>
        <a href='eliminar.php?id=".$fila['id']."'>Eliminar</a>
    </td>
    </tr>";
}

echo "</table>";

?>