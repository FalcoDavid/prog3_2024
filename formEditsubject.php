<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Cargar datos al inicio
            loadTable();
            
            // Función de eliminar
            $('#deleteSubjectBtn').click(function(){
                if(confirm('¿Estás seguro de eliminar esta materia?')) {
                    $.ajax({
                        url: 'controller/subject.controller.php',
                        type: 'POST',
                        data: {
                            operation: 'delete',
                            id_Subject: $('input[name="id_Subject"]').val()
                        },
                        success: function(response) {
                            alert('Materia eliminada correctamente');
                            window.location.href = "formEditsubject.php"; // Redirige después de eliminar
                        }
                    });
                }
            });
        });
    </script>
</head>
<body>
    <form method="POST" name="editSubject" action="controller/subject.controller.php">
        <input type="hidden" name="operation" value="edit"/>

        <label>Id:</label>
        <input type="text" name="id_Subject" value=""><br>

        <label>Nombre:</label> 
        <input type="text" name="name_Subject" value=""><br>

        <label>Año:</label>  
        <input type="number" name="year_Subject" value=""><br>

        <label>Profesor:</label>    
        <input type="text" name="teacher_Subject" value=""><br>

        <label>Nivel:</label>    
        <input type="number" name="level_Subject" value=""><br>

        <label>Horas:</label>    
        <input type="number" name="hour_Subject" value=""><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
        <button type="button" id="deleteSubjectBtn">Eliminar</button> <!-- Botón de eliminar -->
    </form>

    <div>
        <h3>Materias Cargadas</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Año</th>
                    <th>Profesor</th>
                    <th>Nivel</th>
                    <th>Horas</th>
                    <th>Tema</th>
                    <th>Nota</th>
                    <th>Turno</th>
                </tr>
            </thead>
            <tbody id="subjectTable">
                <!-- Los datos se cargarán aquí dinámicamente con AJAX -->
            </tbody>
        </table>
    </div>
</div>
<script src="./js/EditSubject.js"></script>
    <table border="1" id="subjectTable"></table>
</body>
</html>
