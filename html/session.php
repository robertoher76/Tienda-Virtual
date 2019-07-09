<?php
    require ("funciones/clase-usuario.php");

    $usuario = $_POST['usuario'];
    $contra = $_POST['contra'];

    $inicio = new Usuario();
    $val =$inicio->inicioSession($usuario,$contra);

    if($val == 1){
        header("location:inicio.php");
    }else{
        header("location:index.php");
    }

?>