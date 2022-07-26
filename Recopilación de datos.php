<html>

<body>
    <?php
    require_once('Conexión.php');
    ?>


    Ha registrado el producto: <?php echo $_POST["Producto"]; ?><br>
    de la marca: <?php echo $_POST["Marca"]; ?><br>
    con un costo de: $<?php echo $_POST["Precio"]; ?><br>
    e identificador: <?php echo $_POST["ID"]; ?><br>
    <?php
    $ID = $_POST['ID'];
    $Producto = $_POST['Producto'];
    $Marca = $_POST['Marca'];
    $Precio = $_POST['Precio'];

    $sql = ("INSERT INTO `papelería-money` (ID, Producto, Marca, Precio)" .
        "VALUES (" .
        $ID .
        ", '" .
        $Producto .
        "', '" .
        $Marca .
        "', " .
        $Precio .
        ")"
    );

    echo $sql;
    /* $sql = "INSERT INTO `papelería-money` (ID, Producto, Marca, Precio)
    VALUES (2, 'Cartulina blanca', 'Sin marca', 6.5)"; */


    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    ?>

</body>

</html>