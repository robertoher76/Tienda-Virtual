<?php
    require ("funciones/clase-catalogo.php");
    require ("funciones/clase-producto.php");

    $id = $_GET['id'];

    $categoria = new Catalogo();
    $cat = $categoria->nombreCategoria($id);
    $array= $categoria->getCatalogo($id);
    
    $categoria->cerrarConexion();

    $producto = new Producto();
    $num = $producto->numeroProductos($id);
    $producto->cerrarConexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/catalogo.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="registro">
        <h2>Catálogo de <?php echo $cat; ?></h2>
        <p>Número de productos: <?php echo $num; ?></p>
        <br>
        <div class="caja">
            <?php 
                foreach($array as $elemento){
            ?>
            <div class="subcaja">    
                <img src="../<?php echo $elemento['imagen']; ?>">
                <h2><a href="producto.php?id=<?php echo $elemento['id_producto'];?>"><?php echo $elemento['nombre_pro'];?></a></h2>
            </div>
            <br>
            <?php 
                }
            ?>
        </div>
    </div>
    <footer>
        <p>Designed in Soyapango</p>
    </footer>
</body>
</html>