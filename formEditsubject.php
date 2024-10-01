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

            // Cargar datos en la tabla
            function loadTable() {
                $.ajax({
                    url: 'controller/subject.controller.php',
                    type: 'POST',
                    data: { operation: 'list' },
                    success: function(response) {
                        $('#subjectTable').html(response);
                    }
                });
            }

            // Actualizar formulario
            $('form[name="editSubject"]').submit(function(event){
                event.preventDefault();
                $.ajax({
                    url: 'controller/subject.controller.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Materia actualizada correctamente');
                        loadTable();
                    }
                });
            });

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
                            window.location.href = "listaMateria.php"; // Redirige después de eliminar
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
        <input type="hidden" name="id_Subject" value="<?=$subject->getIdSubject();?>">

        <label>Nombre:</label> 
        <input type="text" name="name_Subject" value="<?=$subject->getNameSubject();?>"><br>

        <label>Año:</label>  
        <input type="number" name="year_Subject" value="<?=$subject->getYearSubject();?>"><br>

        <label>Profesor:</label>    
        <input type="text" name="teacher_Subject" value="<?=$subject->getTeacherSubject();?>"><br>

        <label>Nivel:</label>    
        <input type="number" name="level_Subject" value="<?=$subject->getLevelSubject();?>"><br>

        <label>Horas:</label>    
        <input type="number" name="hour_Subject" value="<?=$subject->getHourSubject();?>"><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
        <button type="button" id="deleteSubjectBtn">Eliminar</button> <!-- Botón de eliminar -->
    </form>

    <table border="1" id="subjectTable"></table> 
</body>
</html>
