<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editSubjectInstance.css">
    <title>Editar Materia</title>
    
   
    
</head>
<body>

<div class="container">
    <!-- Formulario para editar materia -->
    <form id="editSubjectForm" onsubmit="updateSubject(event)">
        <input type="hidden" name="operation" value="update"/>

        <label>ID de la Materia:</label>
        <input type="number" name="id_Subject" required><br>

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

        <button type="submit">Actualizar</button>
    </form>

    <!-- Tabla que muestra las materias cargadas en la base de datos -->
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
</body>
</html>
