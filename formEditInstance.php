<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Instancia</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Cargar datos al inicio
            loadTable();

            // Función de eliminar
            $('#deleteInstanceBtn').click(function(){
                if(confirm('¿Estás seguro de eliminar esta instancia?')) {
                    $.ajax({
                        url: 'controller/instance.controller.php',
                        type: 'POST',
                        data: {
                            operation: 'delete',
                            idCicleInstance: $('input[name="id_Cicleinstance"]').val()
                        },
                        success: function(response) {
                            alert('Instancia eliminada correctamente');
                            window.location.href = "formEditinstance.php"; // Redirige después de eliminar
                        }
                    });
                }
            });
        });
    </script>
</head>
<body>
    <form method="POST" name="editInstance" action="controller/instance.controller.php">
        <input type="hidden" name="operation" value="edit"/>

        <label>Id:</label>
        <input type="text" name="id_Cicleinstance" value=""><br>

        <label>Fecha de Inicio:</label> 
        <input type="date" name="stdate_instance" value=""><br>

        <label>Fecha de Finalización:</label> 
        <input type="date" name="findate_instance" value=""><br>

        <label>Año:</label>  
        <input type="text" name="year_instance" value=""><br>

        <label>Cuatrimestre:</label>    
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
    <table border="1" id="instanceTable"></table> 
</body>
</html>



