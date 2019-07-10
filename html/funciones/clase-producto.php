<?php

    require_once ("config/conexion.php");

    class Producto extends Conexion{

        public function Producto(){

            parent::__construct();

        }

        public function getProducto($id){
            $resultado = $this->conexion_db->query("SELECT * FROM producto WHERE id_producto=$id");
            $producto = $resultado->fetch_array(MYSQLI_ASSOC);
            $resultado->close();

            return $producto;
        }

        public function numeroProductos($id){
            $resultado = $this->conexion_db->query("SELECT * FROM producto WHERE id_categ=$id");
            return $resultado->num_rows;
        }
    }
?>