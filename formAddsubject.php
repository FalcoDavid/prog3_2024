<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Materia</title>
    <link rel="stylesheet" href="css/editSubjectinstance.css">
</head>
<body>
<?php include("components/header.php");?>
    <form method="POST" action="controller/subject.controller.php">
        <input type="hidden" name="operation" value="add"/>

        <label>Nombre de la Materia:</label><br>
        <input type="text" name="name_Subject" required><br>

        <label>Año:</label><br>
        <input type="number" name="year_Subject" required><br>

        <label>Profesor:</label><br>
        <input type="text" name="teacher_Subject" required><br>

        <label>Horas:</label><br>
        <input type="number" name="hour_Subject" required><br>

        <label>Tema:</label><br>
        <input type="text" name="theme_Subject" required><br>

        <label>Nota:</label><br>
        <input type="number" name="note_Subject" required><br>

        <label>Turno:</label><br><select class="form-select" type="text" name="turn_Subject" required aria-label="Default select example">
           <br> <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
            <option value="Vespertino">Vespertino</option>
        </select> <br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
    <?php include("components/footer.php");?>
</body>
</html>
