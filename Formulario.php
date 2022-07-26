<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="Stylesheet" href="" Type="text/css" MEDIA="screen">

    <meta name="author" content="Dante Castelán Carpinteyro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Recopilación de datos.php" method="post">
        <label for="ID">ID:</label><br>
        <input name="ID" type="number" required="" placeholder="Identificador de lista*"><br><br>

        <label for="Producto">Producto:</label><br>
        <input name="Producto" type="text" required="" placeholder="Artículo*"><br><br>

        <label for="Marca">Marca:</label><br>
        <input name="Marca" type="text" required="" placeholder="Marca del artículo*"><br><br>

        <label for="Precio">Precio</label><br>
        <input name="Precio" type="text" required="" placeholder="Precio del artículo*"><br><br>

        <input type="submit" value="Enviar">
    </form>

    //El formulario funciona y sí envía la información al archivo de recuperación: primer paso importante y relevante para lo que sigue

</body>
</html>