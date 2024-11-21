function loadSubjects() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "getInstances.php", true);  // Cambié el nombre del archivo aquí
    xhr.onload = function() {
        if (this.status == 200) {
            document.getElementById("instanceTable").innerHTML = this.responseText;
        }
    };
    xhr.send();
}

function updateSubject(event) {
    event.preventDefault();  // Evita la recarga de la página
    var formData = new FormData(document.getElementById("editInstanceForm"));
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "controller/instance.controller.php", true);
    xhr.onload = function() {
        if (this.status == 200) {
            alert("Instancia actualizada correctamente");
            loadSubjects();  // Actualiza la tabla después de la edición
        }
    };
    xhr.send(formData);
}

window.onload = function() {
    loadSubjects();  // Cargar materias al cargar la página
};



    // Función de eliminar
    $('#deleteInstanceBtn').click(function() {
        if (confirm('¿Estás seguro de eliminar esta instancia?')) {
            $.ajax({
                url: 'controller/instancia.controller.php',
                type: 'POST',
                data: {
                    operation: 'delete',
                    id_Subject: $('input[name="id_Cicleinstance"]').val()
                },
                success: function(response) {
                    alert('Instancia eliminada correctamente');
                    loadSubjects(); // Actualiza la tabla después de eliminar
                },
                error: function() {
                    alert("Error al eliminar la Instancia."); // Manejo de errores en la eliminación
                }
            });
        }
    });