<?php

    require ("config.php");

    class Conexion{

        protected $conexion_db;

        public function Conexion(){

            $this->conexion_db= new mysqli(DB_HOST,DB_USER,DB_CONTRA,DB_NOMBRE);

            if($this->conexion_db->connect_errno){
                
                echo "Fallo al conectar a la base de datos: ".$this->conexion_db->connect_error;
                return;
            }

            $this->conexion_db->set_charset(DB_CHARSET);
        }
    }

?>