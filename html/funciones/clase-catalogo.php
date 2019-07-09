<?php

    require ("config/conexion.php");

    class Catalogo extends Conexion{

        public function Catalogo(){
            
            parent::__construct();

        }

        public function getCatalogo(){

            $resultado = $this->conexion_db->query("SELECT * FROM categoria");
            $categoria = $resultado->fetch_all(MYSQLI_ASSOC);
            $resultado->close();
            $this->conexion_db->close();

            return $categoria;
        }
    }

?>