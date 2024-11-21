<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Materias por Año y Turno</title>
    <link rel="stylesheet" href="css/viewsubins.css">
    <script>
        function loadSubjects() {
            var year = document.getElementById("yearSelect").value;
            var turn = document.getElementById("turnSelect").value;

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "controller/viewSubjectsByFilters.php?year=" + year + "&turn=" + turn, true);
            xhr.onload = function() {
                if (this.status == 200) {
                    document.getElementById("subjectTableBody").innerHTML = this.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body onload="loadSubjects()">

<div class="filter-container">
    <h2>Filtrar Materias</h2>

    <label for="yearSelect">Año:</label>
    <select id="yearSelect" onchange="loadSubjects()">
        <option value="">Seleccione un año</option>
        <option value="1">1°</option>
        <option value="2">2°</option>
        <option value="3">3°</option>
        <option value="4">4°</option>
        <option value="5">5°</option>
        <option value="6">6°</option>
        <option value="7">7°</option>
    </select>

    <label for="turnSelect">Turno:</label>
    <select id="turnSelect" onchange="loadSubjects()">
        <option value="">Seleccione un turno</option>
        <option value="Mañana">Mañana</option>
        <option value="Tarde">Tarde</option>
        <option value="Vespertino">Vespertino</option>
    </select>

    <button type="submit" onclick="loadSubjects()">Buscar</button>
</div>

<div class="table-container">
    <h2>Materias</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Año</th>
                <th>Profesor</th>
                <th>Horas</th>
                <th>Tema</th>
                <th>Turno</th>
            </tr>
        </thead>
        <tbody id="subjectTableBody">
            <!-- Las materias se cargarán aquí con AJAX -->
        </tbody>
    </table>
</div>

</body>
</html>

