<?php 
include("../model/instance.class.php");
$operation = $_REQUEST["operation"];

// Creamos el objeto $instance de tipo Instance
$instance = new Instance();

if ($operation == "add") {
    // Seteamos los valores recibidos del formulario, incluyendo el nuevo campo stdateInstance
    $instance->setIdCicleInstance($_REQUEST["idCicleInstance"]);
    $instance->setStdateInstance($_REQUEST["stdate_Instance"]); 
    $instance->setFindateInstance($_REQUEST["findate_Instance"]);
    $instance->setYearInstance($_REQUEST["year_Instance"]);
    $instance->setQuarnumberInstance($_REQUEST["quarnumber_Instance"]);
    $instance->addInstance();

} else if ($operation == "update") {
    // Actualizamos los valores de la instancia
    $instance->setIdCicleInstance($_REQUEST["idCicleInstance"]);
    $instance->setStdateInstance($_REQUEST["stdate_Instance"]); // Nuevo campo
    $instance->setFindateInstance($_REQUEST["findate_Instance"]);
    $instance->setYearInstance($_REQUEST["year_Instance"]);
    $instance->setQuarnumberInstance($_REQUEST["quarnumber_Instance"]);
    $instance->editInstance();

} else if ($operation == "delete") {
    // Eliminamos la instancia
    if (isset($_REQUEST["idCicleInstance"])) {
        $instance->setIdCicleInstance($_REQUEST["idCicleInstance"]); 
        $result = $instance->deleteInstance();  // Método para eliminar la instancia en la base de datos
        
        // Verificamos el resultado y mostramos un mensaje adecuado
        if ($result) {
            echo "Instancia eliminada correctamente.";
        } else {
            echo "Error al eliminar la instancia.";
        }
    } else {
        echo "ID de la instancia no proporcionado.";
    }
}
?>
