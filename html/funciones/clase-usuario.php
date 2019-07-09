<?php 

    require ("config/conexion.php");

    class Usuario extends Conexion{

        public function Usuario(){

            parent::__construct();
        }

        public function inicioSession($usuario,$contra){

            $resultado = $this->conexion_db->prepare("SELECT * FROM usuarios WHERE usuario=? AND contra=?");
            $resultado->bind_param("ss",$usuario, $contra);
            $resultado->execute();
            $resultado->store_result();
            $filas_afectadas = $resultado->num_rows;
            $resultado->bind_result($id,$nombre,$apellido,$usuario,$contra,$tipo,$email,$nac,$imagen);
            if($filas_afectadas == 1){
                session_start();
            }
            while($resultado->fetch()){
                
                $_SESSION['id']=$id;
                $_SESSION['nombre']=$nombre;
                $_SESSION['apellido']=$apellido;
                $_SESSION['usuario']=$usuario;
                $_SESSION['tipo']=$tipo;
                $_SESSION['email']=$email;
                $_SESSION['nac']=$nac;
                $_SESSION['imagen']=$imagen;
            }
            $resultado->close();
            $this->conexion_db->close();
            
            return $filas_afectadas;
        }
    }

?>