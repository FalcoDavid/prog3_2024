<?php
// Incluye la conexión a la base de datos
include("../model/database.class.php");


$conexion = new Database();
$conexion->query("SET NAMES 'utf8'");
$result = $conexion->query($query);

// Genera las filas de la tabla
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id_Cicleinstance']}</td>
            <td>{$row['stdate_Instance']}</td>
            <td>{$row['findate_Instance']}</td>
            <td>{$row['year_Instance']}</td>
            <td>{$row['quarnumber_Instance']}</td>
            <td>{$row['note_Instance']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron instancias.</td></tr>";
}
?>
