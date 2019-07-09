<?php
    session_start();
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
        <h2>Catálogo</h2>
        <br>
        <h2>Bienvino de nuevo, <?php echo $_SESSION['nombre']; ?></h2>
        <br> 
        <a href="catalogo.php">Catalogo</a>
        <br>
        <br>
    </div>
    <footer>
        <p>Designed in Soyapango</p>
    </footer>
</body>
</html>