<?php

    require "conec.php";
    class Pacientes extends Conexion{
        public function  Pacientes(){
            parent::__construct();           
            }
            public function get_pacientes(){
                $resultado=$this->conexion_db->query('select * from pacientes');
                $pacientes=$resultado->fetch_all(MYSQLI_ASSOC);
                return $pacientes;
            }
        }
    

?>