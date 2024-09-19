<?php
include("database.class.php");

class Instance {
    private $idCicleInstance;
    private $stdateInstance = null;  
    private $findateInstance = null;
    private $yearInstance = null;
    private $quarnumberInstance = null;

    public function addInstance() {
        $sql = "INSERT INTO instance (id_Cicleinstance, stdate_Instance, findate_Instance, year_Instance, quarnumber_Instance, note_Instance) 
                VALUES ('".$this->idCicleInstance."', '".$this->stdateInstance."', '".$this->findateInstance."', '".$this->yearInstance."', '".$this->quarnumberInstance."', '".$this->noteInstance."')";
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function editInstance() {
        $sql = "UPDATE instance 
                SET stdate_Instance = '".$this->stdateInstance."', 
                    findate_Instance = '".$this->findateInstance."', 
                    year_Instance = '".$this->yearInstance."', 
                    quarnumber_Instance = '".$this->quarnumberInstance."', 
                    note_Instance = '".$this->noteInstance."' 
                WHERE id_Cicleinstance = ".$this->idCicleInstance;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function deleteInstance() {
        $sql = "DELETE FROM instance WHERE id_Cicleinstance = ".$this->idCicleInstance;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    // Getters y Setters para los campos

    public function getIdCicleInstance() {
        return $this->idCicleInstance;
    }
    public function setIdCicleInstance($idCicleInstance) {
        $this->idCicleInstance = $idCicleInstance;
    }

    public function getStdateInstance() {
        return $this->stdateInstance;
    }
    public function setStdateInstance($stdateInstance) {
        $this->stdateInstance = $stdateInstance;
    }

    public function getFindateInstance() {
        return $this->findateInstance;
    }
    public function setFindateInstance($findateInstance) {
        $this->findateInstance = $findateInstance;
    }

    public function getYearInstance() {
        return $this->yearInstance;
    }
    public function setYearInstance($yearInstance) {
        $this->yearInstance = $yearInstance;
    }

    public function getQuarnumberInstance() {
        return $this->quarnumberInstance;
    }
    public function setQuarnumberInstance($quarnumberInstance) {
        $this->quarnumberInstance = $quarnumberInstance;
    }

    public function getNoteInstance() {
        return $this->noteInstance;
    }
    public function setNoteInstance($noteInstance) {
        $this->noteInstance = $noteInstance;
    }
}
?>
