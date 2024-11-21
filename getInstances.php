<?php
include("model/database.class.php");

$conexion = new Database();
$sql = "SELECT * FROM instance";
$result = $conexion->query($sql);

$output = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output .= "<tr>
                        <td>".$row['id_Cicleinstance']."</td>
                        <td>".$row['findate_Instance']."</td>
                        <td>".$row['year_Instance']."</td>
                        <td>".$row['quarnumber_Instance']."</td>
                        <td>".$row['note_Instance']."</td>
                    </tr>";
    }
} else {
    $output .= "<tr><td colspan='5'>No hay instancias cargadas.</td></tr>";
}

echo $output;

$conexion->closeDB();
?>
