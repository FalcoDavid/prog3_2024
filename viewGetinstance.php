<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia por el nombre del servidor
$username = "root"; // Cambia por tu usuario de la base de datos
$password = ""; // Cambia por tu contraseña
$dbname = "db_school"; // Cambia por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Consulta para obtener todas las instancias
$sql = "SELECT id_Cicleinstance, stdate_Instance, findate_Instance, year_Instance, quarnumber_Instance, note_Instance FROM instance";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Instancias</title>
    <link rel="stylesheet" href="css/viewsubins.css">
    
</head>
<body>

<h2>Instancias</h2>

<table>
    <thead>
        <tr>
            <th>Fecha de Inicio</th>
            <th>Fecha de Fin</th>
            <th>Año</th>
            <th>Trimestre</th>
            <th>Nota</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['stdate_Instance']; ?></td>
                    <td><?php echo $row['findate_Instance']; ?></td>
                    <td><?php echo $row['year_Instance']; ?></td>
                    <td><?php echo $row['quarnumber_Instance']; ?></td>
                    <td><?php echo $row['note_Instance']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay datos disponibles</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th class="left-align">Nombre Espacio</th>
            <th>1er Trim.</th>
            <th>2do Trim.</th>
            <th>3er Trim.</th>
            <th>Nota Anual</th>
            <th>Recup. 1</th>
            <th>Recup. 2</th>
            <th>Mesa Esp.</th>
            <th>Nota Final</th>
        </tr>
    </thead>
    <tbody>
        <!-- Ejemplo de fila -->
        <tr>
            <td class="left-align">Matemática</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>8</td>
            <td>7</td>
            <td>8</td>
            <td>-</td>
            <td>8</td>
        </tr>

<?php
// Cerrar conexión
$conn->close();
?>

</body>
</html>
