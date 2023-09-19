<?php
// Configura la conexión a la base de datos (cambia estos valores según tu configuración)
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) { 
    die("Error de conexión: " . $conn->connect_error);
}

// Obtiene los valores del formulario
$categoria = $_POST['categoria'];
$talla = $_POST['talla'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];

// Inserta los datos en la tabla Categoria
$sql_categoria = "INSERT INTO Categoria (nombreCategoria) VALUES ('$categoria')";

if ($conn->query($sql_categoria) === TRUE) {
    echo "Registro de categoría guardado correctamente.<br>";
} else {
    echo "Error al guardar el registro de categoría: " . $conn->error . "<br>";
}

// Inserta los datos en la tabla Talla
$sql_talla = "INSERT INTO Talla (numeroTalla) VALUES ('$talla')";

if ($conn->query($sql_talla) === TRUE) {
    echo "Registro de talla guardado correctamente.<br>";
} else {
    echo "Error al guardar el registro de talla: " . $conn->error . "<br>";
}

// Inserta los datos en la tabla Entrada
$sql_entrada = "INSERT INTO Entrada (cantidadEntrada, fechaEntrada) VALUES ($cantidad, '$fecha')";

if ($conn->query($sql_entrada) === TRUE) {
    echo "Registro de entrada guardado correctamente.<br>";
} else {
    echo "Error al guardar el registro de entrada: " . $conn->error . "<br>";
}

// Inserta los datos en la tabla Producto
$sql_producto = "INSERT INTO Producto (nombreproducto) VALUES ('$producto')";

if ($conn->query($sql_producto) === TRUE) {
    echo "Registro de producto guardado correctamente.<br>";
} else {
    echo "Error al guardar el registro de producto: " . $conn->error . "<br>";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
