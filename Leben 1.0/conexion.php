<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>
    <?php
    $enlace = mysqli_connect("127.0.0.1","root","","snb");
    
    if(!$enlace) {
        die("No se pudo hacer la conexion con la base de datos" .mysqli_error());
    }
    echo "";
    mysqli_close($enlace);
    ?>
</body>
</html>