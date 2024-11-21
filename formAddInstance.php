<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editSubjectinstance.css">
    <title>Agregar Instancia</title>
</head>
<body>
<?php include("components/header.php");?>
    <form method="POST" name="formAddInstance" action="controller/instance.controller.php">
        <input type="hidden" name="operation" value="add"/>
        
        <label>Fecha de Inicio:</label><br>
        <input type="date" name="stdate_Instance"><br> <!-- Nuevo campo -->

        <label>Fecha de Finalización:</label><br>
        <input type="date" name="findate_Instance"><br>

        <label>Año:</label><br>
        <input type="text" name="year_Instance"><br>

        <label>Trimestre:</label><br><select type="number" name="quarnumber_Instance">
           <br> <option value="1">1er</option>
            <option value="2">2do</option>
            <option value="3">3er</option>
        </select> <br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
    <?php include("components/footer.php");?>
</body>
</html>


