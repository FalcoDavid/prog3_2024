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