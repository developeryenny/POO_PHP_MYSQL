<?php

    require "conec.php";
    class Pacientes extends Conexion{
        public function  Pacientes(){
            parent::__construct();           
            }
            public function get_pacientes($sexo){
                $resultado=$this->conexion_db->query('select * from pacientes where sexo="'.$sexo.'"');
                $pacientes=$resultado->fetch_all(MYSQLI_ASSOC);
                return $pacientes;
            }
        }
    

?>