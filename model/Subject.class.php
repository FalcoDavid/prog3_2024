<?php
include("database.class.php");

class Subject {
    private $idSubject;
    private $nameSubject;
    private $yearSubject;
    private $teacherSubject;
    private $levelSubject;
    private $hourSubject;
    private $themeSubject;
    private $noteSubject;
    private $turnSubject;

    public function addSubject() {
        $sql = "INSERT INTO subject (name_Subject, year_Subject, teacher_Subject, level_Subject, hour_Subject, theme_Subject, note_Subject, turn_Subject) 
                VALUES ('".$this->nameSubject."', '".$this->yearSubject."', '".$this->teacherSubject."', '".$this->levelSubject."', '".$this->hourSubject."', '".$this->themeSubject."', '".$this->noteSubject."', '".$this->turnSubject."')";
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function editSubject() {
        $sql = "UPDATE subject 
                SET name_Subject = '".$this->nameSubject."', 
                    year_Subject = '".$this->yearSubject."', 
                    teacher_Subject = '".$this->teacherSubject."', 
                    level_Subject = '".$this->levelSubject."', 
                    hour_Subject = '".$this->hourSubject."', 
                    theme_Subject = '".$this->themeSubject."', 
                    note_Subject = '".$this->noteSubject."', 
                    turn_Subject = '".$this->turnSubject."' 
                WHERE id_Subject = ".$this->idSubject;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function deleteSubject() {
        $sql = "DELETE FROM subject WHERE id_Subject = ".$this->idSubject;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function getSubject() {
        $sql = "SELECT * FROM subject WHERE id_Subject = ".$this->idSubject;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        if ($result) {
            if ($row = $result->fetch_assoc()) {
                $this->nameSubject = $row["name_Subject"];
                $this->yearSubject = $row["year_Subject"];
                $this->teacherSubject = $row["teacher_Subject"];
                $this->levelSubject = $row["level_Subject"];
                $this->hourSubject = $row["hour_Subject"];
                $this->themeSubject = $row["theme_Subject"];
                $this->noteSubject = $row["note_Subject"];
                $this->turnSubject = $row["turn_Subject"];
                return true;
            }
        }
        return false;
    }

    public function getIdSubject() {
        return $this->idSubject;
    }

    public function setIdSubject($idSubject) {
        $this->idSubject = $idSubject;
    }

    public function getNameSubject() {
        return $this->nameSubject;
    }

    public function setNameSubject($nameSubject) {
        $this->nameSubject = $nameSubject;
    }

    public function getYearSubject() {
        return $this->yearSubject;
    }

    public function setYearSubject($yearSubject) {
        $this->yearSubject = $yearSubject;
    }

    public function getTeacherSubject() {
        return $this->teacherSubject;
    }

    public function setTeacherSubject($teacherSubject) {
        $this->teacherSubject = $teacherSubject;
    }

    public function getLevelSubject() {
        return $this->levelSubject;
    }

    public function setLevelSubject($levelSubject) {
        $this->levelSubject = $levelSubject;
    }

    public function getHourSubject() {
        return $this->hourSubject;
    }

    public function setHourSubject($hourSubject) {
        $this->hourSubject = $hourSubject;
    }

    public function getThemeSubject() {
        return $this->themeSubject;
    }

    public function setThemeSubject($themeSubject) {
        $this->themeSubject = $themeSubject;
    }

    public function getNoteSubject() {
        return $this->noteSubject;
    }

    public function setNoteSubject($noteSubject) {
        $this->noteSubject = $noteSubject;
    }

    public function getTurnSubject() {
        return $this->turnSubject;
    }

    public function setTurnSubject($turnSubject) {
        $this->turnSubject = $turnSubject;
    }
}
?>
