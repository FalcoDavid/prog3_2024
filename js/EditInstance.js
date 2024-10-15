 function loadInstances() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "getInstances.php", true);
            xhr.onload = function() {
                if (this.status == 200) {
                    document.getElementById("instanceTable").innerHTML = this.responseText;
                }
            };
            xhr.send();
        }

        function updateInstance(event) {
            event.preventDefault();  // Evita la recarga de la página
            var formData = new FormData(document.getElementById("editInstanceForm"));
            
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "controller/instance.controller.php", true);
            xhr.onload = function() {
                if (this.status == 200) {
                    alert("Instancia actualizada correctamente");
                    loadInstances();  // Actualiza la tabla después de la edición
                }
            };
            xhr.send(formData);
        }

        window.onload = function() {
            loadInstances();  // Cargar instancias al cargar la página
        };
    
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