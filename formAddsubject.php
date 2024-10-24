<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Materia</title>
</head>
<body>
<?php include("components/header.php");?>
    <form method="POST" action="controller/subject.controller.php">
        <input type="hidden" name="operation" value="add"/>

        <label>Nombre de la Materia:</label>
        <input type="text" name="name_Subject" required><br>

        <label>Año:</label>
        <input type="number" name="year_Subject" required><br>

        <label>Profesor:</label>
        <input type="text" name="teacher_Subject" required><br>

        <label>Nivel:</label>
        <input type="number" name="level_Subject" required><br>

        <label>Horas:</label>
        <input type="number" name="hour_Subject" required><br>

        <label>Tema:</label>
        <input type="text" name="theme_Subject" required><br>

        <label>Nota:</label>
        <input type="number" name="note_Subject" required><br>

        <label>Turno:</label>
        <input type="text" name="turn_Subject" required><br>

        <button type="submit">Agregar</button>
    </form>
    <?php include("components/footer.php");?>
</body>
</html>
