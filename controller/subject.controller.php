<?php 
include("../model/subject.class.php");
$operation = $_REQUEST["operation"];

// Creamos el objeto $subject de tipo Subject
$subject = new Subject();

if ($operation == "add") {
    // Seteamos los valores recibidos del formulario
    $subject->setIdSubject($_REQUEST["idSubject"]);
    $subject->setName($_REQUEST["name"]);
    $subject->setCredits($_REQUEST["credits"]);
    $subject->addSubject();

} else if ($operation == "update") {
    // Actualizamos los valores de la materia
    $subject->setIdSubject($_REQUEST["idSubject"]);
    $subject->setName($_REQUEST["name"]);
    $subject->setCredits($_REQUEST["credits"]);
    $subject->editSubject();

} else if ($operation == "delete") {
    // Eliminamos la materia
    $subject->setIdSubject($_REQUEST["idSubject"]); 
    $result = $subject->deleteSubject();
    echo $result; 
}
?>
