<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Instancia</title>
</head>
<body>
    <form method="POST" action="controller/instance.controller.php">
        <input type="hidden" name="operation" value="update"/>
        <input type="hidden" name="idCicleInstance" value="<?=$instance->getIdCicleInstance();?>">

        <label>Fecha de Finalización:</label> 
        <input type="date" name="findateInstance" value="<?=$instance->getFindateInstance();?>"><br>

        <label>Año:</label>  
        <input type="text" name="yearInstance" value="<?=$instance->getYearInstance();?>"><br>

        <label>Cuatrimestre:</label>    
        <input type="number" name="quarnumberInstance" value="<?=$instance->getQuarnumberInstance();?>"><br>

        <label>Nota:</label>  
        <input type="text" name="noteInstance" value="<?=$instance->getNoteInstance();?>"><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>

