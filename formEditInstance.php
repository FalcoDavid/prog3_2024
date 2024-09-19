<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editSubjectInstance.css">
    <title>Editar Instancia</title>
    
</head>
<body>

<div class="container">
    <!-- Formulario para editar instancia -->
    <form id="editInstanceForm" onsubmit="updateInstance(event)">
        <input type="hidden" name="operation" value="update"/>

        <label>ID de la Instancia:</label>
        <input type="number" name="id_Cicleinstance" required><br>

        <label>Fecha de Finalización:</label>
        <input type="date" name="findate_Instance" required><br>

        <label>Fecha de Inicio:</label> 
        <input type="date" name="stdate_Instance" required><br>

        <label>Año:</label>
        <input type="number" name="year_Instance" required><br>

        <label>Cuatrimestre:</label>
        <input type="number" name="quarnumber_Instance" required><br>

        <label>Nota:</label>
        <input type="text" name="note_Instance" required><br>

        <button type="submit">Actualizar</button>
    </form>

    <!-- Tabla que muestra las instancias cargadas en la base de datos -->
    <div>
        <h3>Instancias Cargadas</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha Fin</th>
                    <th>Año</th>
                    <th>Cuatrimestre</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody id="instanceTable">
                <!-- Los datos se cargarán aquí dinámicamente con AJAX -->
            </tbody>
        </table>
    </div>
</div>
<script src="./js/EditInstance.js"></script>
</body>
</html>


