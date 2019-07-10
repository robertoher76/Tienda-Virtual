<?php

    require_once ("config/conexion.php");

    class Catalogo extends Conexion{

        public function Catalogo(){
            
            parent::__construct();

        }

        public function getCatalogo($id){
            $resultado = $this->conexion_db->query("SELECT * FROM producto WHERE id_categ=$id");
            $categoria = $resultado->fetch_all(MYSQLI_ASSOC);
            $resultado->close();

            return $categoria;
        }

        public function nombreCategoria($id){
            $resultado = $this->conexion_db->query("SELECT nombre FROM categoria WHERE id_categoria=$id");
            $categoria = $resultado->fetch_array(MYSQLI_ASSOC);
            $resultado->close();

            return $categoria["nombre"];
        }

        
    }

?>