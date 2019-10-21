<?php

    require "conec.php";
    class Pacientes extends Conexion{
        public function  Pacientes(){
            parent::__construct();           
        }
            public function get_pacientes($sexo){
                $sql="select * from pacientes where sexo='".$sexo ."' ";
                $sentencia =$this->conexion_db->prepare($sql);
                $sentencia->execute(array());
                $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                $sentencia->closeCursor();
                return $resultado;
                $this->conexion_db=null;
            }
        }
    

?>