<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Instancia</title>
</head>
<body>
<?php include("components/header.php");?>
    <form method="POST" name="formAddInstance" action="controller/instance.controller.php">
        <input type="hidden" name="operation" value="add"/>
        
        <label>Fecha de Inicio:</label>  
        <input type="date" name="stdate_Instance"><br> <!-- Nuevo campo -->

        <label>Fecha de Finalización:</label> 
        <input type="date" name="findate_Instance"><br>

        <label>Año:</label>  
        <input type="text" name="year_Instance"><br>

        <label>Cuatrimestre:</label>    
        <input type="number" name="quarnumber_Instance"><br>

        <label>Nota:</label>  
        <input type="text" name="note_Instance"><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
    <?php include("components/footer.php");?>
</body>
</html>


