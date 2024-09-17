<?php 
include("../model/instance.class.php");
$operation = $_REQUEST["operation"];

// Creamos el objeto $instance de tipo Instance
$instance = new Instance();

if ($operation == "add") {
    // Seteamos los valores recibidos del formulario
    $instance->setFindateInstance($_REQUEST["findateInstance"]);
    $instance->setYearInstance($_REQUEST["yearInstance"]);
    $instance->setQuarnumberInstance($_REQUEST["quarnumberInstance"]);
    $instance->setNoteInstance($_REQUEST["noteInstance"]);
    $instance->addInstance();

} else if ($operation == "update") {
    // Actualizamos los valores de la instancia
    $instance->setIdCicleInstance($_REQUEST["idCicleInstance"]);
    $instance->setFindateInstance($_REQUEST["findateInstance"]);
    $instance->setYearInstance($_REQUEST["yearInstance"]);
    $instance->setQuarnumberInstance($_REQUEST["quarnumberInstance"]);
    $instance->setNoteInstance($_REQUEST["noteInstance"]);
    $instance->editInstance();

} else if ($operation == "delete") {
    // Eliminamos la instancia
    $instance->setIdCicleInstance($_REQUEST["idCicleInstance"]); 
    $result = $instance->deleteInstance();
    echo $result; 
}
?>

