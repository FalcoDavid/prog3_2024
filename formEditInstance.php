<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Instancia</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/editSubjectinstance.css">
    
</head>
<body>

    <form method="POST" name="editInstance" action="controller/instance.controller.php">
        <input type="hidden" name="operation" value="edit"/>

        <label>Id:</label><br>
        <input type="text" name="id_Cicleinstance" value=""><br>

        <label>Fecha de Inicio:</label> <br>
        <input type="date" name="stdate_instance" value=""><br>

        <label>Fecha de Finalización:</label> <br>
        <input type="date" name="findate_instance" value=""><br>

        <label>Año:</label>  <br>
        <input type="text" name="year_instance" value=""><br>

        <label>Trimestre:</label>    <br>
        <input type="number" name="quarnumber_instance" value=""><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
        <button type="button" id="deleteInstanceBtn">Eliminar</button> <!-- Botón de eliminar -->
    </form>
    <div>
        <h3>Instancias Cargadas</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha In</th>
                    <th>Fecha Fin</th>
                    <th>Año</th>
                    <th>Trimestre</th>
                </tr>
            </thead>
            <tbody id="instanceTable">
                <!-- Los datos se cargarán aquí dinámicamente con AJAX -->
            </tbody>
        </table>
    </div>
</div>
<script src="js/EditInstance.js"></script>
    <table border="1" id="instanceTable"></table> 
</body>

</html>