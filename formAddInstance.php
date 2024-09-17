<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Instancia</title>
</head>
<body>
    <form method="POST" action="controller/instance.controller.php">
        <input type="hidden" name="operation" value="add"/>
        
        <label>Fecha de Finalización:</label> 
        <input type="date" name="findateInstance"><br>

        <label>Año:</label>  
        <input type="text" name="yearInstance"><br>

        <label>Cuatrimestre:</label>    
        <input type="number" name="quarnumberInstance"><br>

        <label>Nota:</label>  
        <input type="text" name="noteInstance"><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>

