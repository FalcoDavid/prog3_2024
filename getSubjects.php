<?php
include("model/database.class.php");

$conexion = new Database();
$sql = "SELECT * FROM subject";
$result = $conexion->query($sql);

$output = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output .= "<tr>
                        <td>".$row['id_Subject']."</td>
                        <td>".$row['name_Subject']."</td>
                        <td>".$row['year_Subject']."</td>
                        <td>".$row['teacher_Subject']."</td>
                        <td>".$row['level_Subject']."</td>
                        <td>".$row['hour_Subject']."</td>
                        <td>".$row['theme_Subject']."</td>
                        <td>".$row['note_Subject']."</td>
                        <td>".$row['turn_Subject']."</td>
                    </tr>";
    }
} else {
    $output .= "<tr><td colspan='9'>No hay materias cargadas.</td></tr>";
}

echo $output;

$conexion->closeDB();
?>
