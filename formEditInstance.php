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

            // Cargar datos en la tabla
            function loadTable() {
                $.ajax({
                    url: 'controller/instance.controller.php',
                    type: 'POST',
                    data: { operation: 'list' },
                    success: function(response) {
                        $('#instanceTable').html(response);
                    }
                });
            }

            // Actualizar formulario
            $('form[name="editInstance"]').submit(function(event){
                event.preventDefault();
                $.ajax({
                    url: 'controller/instance.controller.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Instancia actualizada correctamente');
                        loadTable();
                    }
                });
            });

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
                            window.location.href = "listaInstancia.php"; // Redirige después de eliminar
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
        <input type="hidden" name="id_Cicleinstance" value="<?=$instance->getIdCicleInstance();?>">

        <label>Fecha de Inicio:</label> 
        <input type="date" name="stdate_instance" value="<?=$instance->getStdateInstance();?>"><br>

        <label>Fecha de Finalización:</label> 
        <input type="date" name="findate_instance" value="<?=$instance->getFindateInstance();?>"><br>

        <label>Año:</label>  
        <input type="text" name="year_instance" value="<?=$instance->getYearInstance();?>"><br>

        <label>Cuatrimestre:</label>    
        <input type="number" name="quarnumber_instance" value="<?=$instance->getQuarnumberInstance();?>"><br>

        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
        <button type="button" id="deleteInstanceBtn">Eliminar</button> <!-- Botón de eliminar -->
    </form>

    <table border="1" id="instanceTable"></table> 
</body>
</html>



