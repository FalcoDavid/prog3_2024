<?php 
include("../model/student.class.php");
$operation=$_REQUEST["operation"];

//creamos el objeto $student de tipo Student 
$student= new Student();




if($operation=="add"){
    $student->setDni($_REQUEST["dni"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setName($_REQUEST["name"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->addStudent();
}else if($operation=="update"){

}else if($operation=="delete"){
    
}


?>