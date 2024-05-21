<?php 
    class Database{
        private $nombre="db_school";
        private $servidor="localhost";
        private $usuario="root";
        private $clave="#Promo2024";
        private $conexion=null;

        //Conectar la base de datos 
        public function connectDB(){
            $this->conexion= new mysqli($this->servidor ,$this->usuario, $this->clave, $this->nombre);
            //es una variable que nos avisa si hay un error y si lo hay, nos dice "fallo la conexion".
            if($this->conexion->connect_error){
                print "Fallo la conexion:".$this->conexion->connect_error:
            }
        }
        //Ejecuta la consulta a la base de datos, por ejemplo: INSERT INTO, SELECT, DELETE, UPDATE...
        public function query ($sql) {
            return $this->conexion->query($sql);

        }
        //cierra la conexion de la base de datos.
        //realizarla
        public function closeDB(){
            if $this->conexion(){
                $this->conexion->close();
                print "Conexion cerrada"
            }
        }
    }
?>