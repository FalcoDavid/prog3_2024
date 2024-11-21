<?php
// Incluye el archivo de conexión a la base de datos
include("../model/database.class.php");

// Obtén los parámetros de filtro para año y turno, si existen
$year = isset($_GET['year']) ? $_GET['year'] : '';
$turn = isset($_GET['turn']) ? $_GET['turn'] : '';

// Inicializa la consulta base
$query = "SELECT name_Subject, year_Subject, teacher_Subject, hour_Subject, theme_Subject, turn_Subject FROM subject";

// Aplica los filtros solo si hay algún valor en ellos
if ($year || $turn) {
    $query .= " WHERE 1=1";
    if ($year !== '') {
        $query .= " AND year_Subject = '$year'";
    }
    if ($turn !== '') {
        $query .= " AND turn_Subject = '$turn'";
    }
}

$conexion = new Database();
$conexion->query("SET NAMES 'utf8'");
$result = $conexion->query($query);

// Si hay resultados, crea las filas de la tabla HTML
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['name_Subject']}</td>
            <td>{$row['year_Subject']}</td>
            <td>{$row['teacher_Subject']}</td>
            <td>{$row['hour_Subject']}</td>
            <td>{$row['theme_Subject']}</td>
            <td>{$row['turn_Subject']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No se encontraron materias.</td></tr>";
}
?>


