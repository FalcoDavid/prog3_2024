<?php
include("database.class.php");

Class Subject {
    private $idSubject=null;
    private $nameSubject=null;
    private $teacherSubject=null;
    private $levelSubject=null;
    private $hourSubject=null;
    private $themeSubject=null;
    private $noteSubject=null;


public function addSubject (){
    $sql="INSERT INTO subjects (idSubject, nameSubject, teacherSubject, levelSubject, hourSubject, themeSubject, noteSubject) 
    VALUES (".$this->idSubject.",'".$this->nameSubject."','".$this->teacherSubject."','".$this->levelSubject."','".$this->hourSubject."','".$this->themeSubject."','".$this->noteSubject."')";
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion->closeDB();
    return $result;
}

public function editSubject (){
    $sql="UPDATE subjects SET nameSubject='".$this->nameSubject."', teacherSubject='".$this->levelSubject."', hourSubject='".$this->hourSubject."', themeSubject='".$this->themeSubject."', noteSubject='".$this->noteSubject."' WHERE idSubject=".$this->idSubject;
        
    $this->conexion=new Database();
    $result= $this->conexion=query($sql);
    $this->conexion->closeDB();

    return $result;
}

public function deleteSubject (){
    $sql="DELETE FROM subjects WHERE idSubject=".$this->$idSubject;

    $this->conexion=new Database();
    $result= $this->conexion=query($sql);
    $this->conexion->closeDB();

    return $result;
}

public function getSubject(){
    $sql="SELECT * FROM subjects WHERE idSubject=".$this->$idSubject;

    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion->closeDB();
    if ($result){
        if($row=$result->fetch_assoc){
            $this->nameSubject=$row["nameSubject"];
            $this->teacherSubject=$row["teacherSubject"];
            $this->levelSubject=$row["levelSubject"];
            $this->hourSubject=$row["hourSubject"];
            $this->themeSubject=$row["themeSubject"];
            $this->noteSubject=$row["noteSubject"];
            return true;
        }
    }
    return false;
}

public function listAllSubject (){

}
public function getIdSubject(){
    return $this->idSubject;
    
}

public function setIdSubject($idSubject){
    $this->idStudent=$idSubject;
}

public function getNameSubject(){
    return $this->nameSubject;
    
}

public function setNameSubject($nameSubject){
    $this->nameSubject=$nameSubject;
}

public function getTeacherSubject(){
    return $this->teacherSubject;
    
}

public function setTeacherSubject($teacherSubject){
    $this->teacherSubject=$teacherSubject;
}

public function getLevelSubject(){
    return $this->levelSubject;
    
}

public function setLevelSubject($levelSubject){
    $this->levelSubject=$levelSubject;
}

public function getHourSubject(){
    return $this->hourSubject;
    
}

public function setHourSubject($hourSubject){
    $this->hourSubject=$hourSubject;
}

public function getThemeSubject(){
    return $this->themeSubject;
    
}

public function setThemeSubject($themeSubject){
    $this->themeSubject=$themeSubject;
}

public function getNoteSubject(){
    return $this->noteSubject;
    
}

public function setNoteSubject($noteSubject){
    $this->noteSubject=$noteSubject;
}

}

?>