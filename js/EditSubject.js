function loadSubjects() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "getSubjects.php", true);
            xhr.onload = function() {
                if (this.status == 200) {
                    document.getElementById("subjectTable").innerHTML = this.responseText;
                }
            };
            xhr.send();
        }

        function updateSubject(event) {
            event.preventDefault();  // Evita la recarga de la página
            var formData = new FormData(document.getElementById("editSubjectForm"));
            
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "controller/subject.controller.php", true);
            xhr.onload = function() {
                if (this.status == 200) {
                    alert("Materia actualizada correctamente");
                    loadSubjects();  // Actualiza la tabla después de la edición
                }
            };
            xhr.send(formData);
        }

        window.onload = function() {
            loadSubjects();  // Cargar materias al cargar la página
        };

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