<?php
include("../model/subject.class.php");
$operation = $_REQUEST["operation"];

// Creamos el objeto $subject de tipo Subject
$subject = new Subject();

if ($operation == "add") {
    // Seteamos los valores recibidos del formulario
    $subject->setNameSubject($_REQUEST["name_Subject"]);
    $subject->setYearSubject($_REQUEST["year_Subject"]);
    $subject->setTeacherSubject($_REQUEST["teacher_Subject"]);
    $subject->setLevelSubject($_REQUEST["level_Subject"]);
    $subject->setHourSubject($_REQUEST["hour_Subject"]);
    $subject->setThemeSubject($_REQUEST["theme_Subject"]);
    $subject->setNoteSubject($_REQUEST["note_Subject"]);
    $subject->setTurnSubject($_REQUEST["turn_Subject"]);
    $subject->addSubject();

} else if ($operation == "update") {
    // Actualizamos los valores de la materia
    $subject->setIdSubject($_REQUEST["id_Subject"]);
    $subject->setNameSubject($_REQUEST["name_Subject"]);
    $subject->setYearSubject($_REQUEST["year_Subject"]);
    $subject->setTeacherSubject($_REQUEST["teacher_Subject"]);
    $subject->setLevelSubject($_REQUEST["level_Subject"]);
    $subject->setHourSubject($_REQUEST["hour_Subject"]);
    $subject->setThemeSubject($_REQUEST["theme_Subject"]);
    $subject->setNoteSubject($_REQUEST["note_Subject"]);
    $subject->setTurnSubject($_REQUEST["turn_Subject"]);
    $subject->editSubject();

} else if ($operation == "delete") {
    // Eliminamos la materia
    $subject->setIdSubject($_REQUEST["id_Subject"]); 
    $result = $subject->deleteSubject();
    echo $result;
}
?>
