<?php
include("database.class.php");

class Instance {
    private $idCicleInstance;
    private $findateInstance;
    private $yearInstance;
    private $quarnumberInstance;
    private $noteInstance;
    private $conexion;

    public function addInstance() {
        $sql = "INSERT INTO Instance (findate_Instance, year_Instance, quarnumber_Instance, note_Instance) 
                VALUES ('".$this->findateInstance."', '".$this->yearInstance."', '".$this->quarnumberInstance."', '".$this->noteInstance."')";
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function editInstance() {
        $sql = "UPDATE Instance 
                SET findate_Instance = '".$this->findateInstance."', 
                    year_Instance = '".$this->yearInstance."', 
                    quarnumber_Instance = '".$this->quarnumberInstance."', 
                    note_Instance = '".$this->noteInstance."' 
                WHERE id_CicleInstance = ".$this->idCicleInstance;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function deleteInstance() {
        $sql = "DELETE FROM Instance WHERE id_CicleInstance = ".$this->idCicleInstance;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function getInstance() {
        $sql = "SELECT * FROM Instance WHERE id_CicleInstance = ".$this->idCicleInstance;
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        if ($result) {
            if ($row = $result->fetch_assoc()) {
                $this->findateInstance = $row["findate_Instance"];
                $this->yearInstance = $row["year_Instance"];
                $this->quarnumberInstance = $row["quarnumber_Instance"];
                $this->noteInstance = $row["note_Instance"];
                return true;
            }
        }
        return false;
    }

    public function getAllInstances() {
        $sql = "SELECT * FROM Instance";
        $this->conexion = new Database();
        $result = $this->conexion->query($sql);
        $this->conexion->closeDB();
        $allInstances = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $allInstances[] = $row;
            }
        }
        return $allInstances;
    }

    // Getters and setters
    public function getIdCicleInstance() {
        return $this->idCicleInstance;
    }

    public function setIdCicleInstance($idCicleInstance) {
        $this->idCicleInstance = $idCicleInstance;
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
