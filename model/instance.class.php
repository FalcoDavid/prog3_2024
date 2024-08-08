<?php
  include("database.class.php");

  class Instance{
    private $idcicleInstance;
    private $stdateInstance=null;
    private $findateInstance=null;
    private $yearInstance=null;
    private $quarnumberInstance=null;

    public function addInstance(){
        $sql="INSERT INTO Instances (idcicleInstance, stdateInstance, findateInstance, yearInstance, quarnumberInstance) VALUES  (".$this->idcicleInstance.",'".$this->stdateInstance."', '".$this->findateInstace."', '".$this->yearInstance."', '".$this->quarnumberInstance."')";
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function editInstance(){
        $sql="UPDATE Instances SET idcicleInstance=".$this->idcicleInstance.", stdateInstance'".$this->stdateInstance."', findateInstance='".$this->findateInstance."', yearInstance='".$this->yearInstance."', quarenumber=Instance'".$this->quarenumberInstance."' WHERE idcicleInstance=".$this->idcicleInstance;
       
   
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->closeDB();
        return $result;
    }

    public function deleteInstance(){
        $sql="DELETE FROM Instances WHERE idcicleInstance=".$this->idcicleInstance;
   
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->closeDB();
    }

    public function listAllInstance(){

    }

    public function getInstance(){
        $sql="SELECT * FROM Instances WHERE idcicleInstance=".$this->idcicleInstable;
   
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->closeDB();
        if($result){
           if($row=$result->fetch_assoc()){
               $this->stdateInstance=$row["stdateInstance"];
               $this->findateInstance=$row["findateInstance"];
               $this->yearInstance=$row["yearInstance"];
               $this->quarnumberInstance=$row["quarnumberInstance"];
               return true;
           }  
        }
        return false;
   }

   public function getAllInstance(){
      $sql="SELECT*FROM Instances";
      $this->conexion=new Database();
      $result= $this->conexion->query($sql);
      $allInstance=null;
      if ($result){
         while ($row=$result->fetch_asooc()){
           $allInstance[]=$row;
        }
       }
       
       return $allInstance;
   }

   public function getIdCicleInstance(){
       return $this->idcicleInstance;
   }
   public function setIdCicleInstance (){
       $this->idCicleInstance=$idcicleInstance;
   }

   public function getStdateInstance(){
       return $this->stdateInstance;
       
   }

   public function setStdateInstance($stdateInstance){
       $this->stdateInstance=$stdateInstance;
   }

   public function getFindateInstance(){
       return $this->findateInstance;
       
   }

   public function setFindateInstance($findateInstance){
       $this->findateInstance=$findateInstance;
   }

   public function getYearInstance(){
       return $this->yearInstance;
       
   }

   public function setYearInstance($yearInstance){
       $this->yearInstance=$yearInstance;
   }

   public function getQuarnumberInstance(){
       return $this->quarnumberInstance;
       
   }

   public function setQuarnumberInstance($quarnumberInstance){
       $this->quarnumberInstance=$quarnumberInstance;
   }  
  }
?>