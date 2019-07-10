<?php 
    require ("funciones/clase-producto.php");

    $id=$_GET['id'];

    $producto = new Producto();
    $fila = $producto->getProducto($id);

    $nombre = $fila['nombre_pro'];
    $descripcion = $fila['descripcion'];
    $precio = $fila['precio'];
    $imagen = $fila['imagen'];
    $cat = $fila['id_categ'];

    $producto->cerrarConexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Tienda Online</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/producto.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenedor">
        <div class="nombre">
            <h2>Camisa Gris</h2>   
        </div>
        <div class="caja">
            <div class="img">
                <img src="../<?php echo $imagen; ?>">
            </div>
            <div class="info">
                <div class="precio">
                    <h2>Precio:  $<?php echo $precio; ?></h2>
                </div>
                <div class="descripcion">
                    <h2>Descripción: </h2>
                    <p><?php echo $descripcion; ?></p>
                </div>
                <div class="stock">
                    <h2>Tallas: S, M, L</h2>
                </div>
                <br>
                <br>
                <div class="comprar">
                    <a href="#">Comprar</a>
                </div>
            </div>
        </div>
        <div class="regresar">
            <a href="catalogodecatalogo.php?id=<?php echo $cat; ?>">Regresar</a>
        </div>
        <br>
        <br>
    </div>
    <br>
    <footer>
        <p>Designed in Soyapango</p>
    </footer>
</body>
</html>