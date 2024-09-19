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