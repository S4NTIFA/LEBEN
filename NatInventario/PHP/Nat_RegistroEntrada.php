<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "snb";

// Obtener los valores del formulario
$categoria = $_POST["categoria"];
$talla = $_POST["talla"];
$referencia = $_POST["referencia"];
$entrada = $_POST["entrada"];
$fechaEntrada = $_POST["fechaEntrada"];
$proveedor = $_POST["proveedor"]; // Nuevo campo proveedor
$valorProducto = $_POST["valorProducto"]; // Nuevo campo valorProducto

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("La conexión falló: " . $conn->connect_error);
}

// Insertar un nuevo registro en la tabla de producto
$sql_producto = "INSERT INTO producto (nombreProducto, cantidadProducto, idCategoria, idTallas, idProveedor, valorProducto) VALUES (?, ?, ?, ?, ?, ?)";
$stmt_producto = $conn->prepare($sql_producto);
$stmt_producto->bind_param("siisdd", $referencia, $entrada, $categoria, $talla, $proveedor, $valorProducto);

if ($stmt_producto->execute()) {
  // Obtener el idProducto del producto recién insertado
  $idProducto = $stmt_producto->insert_id;

  // Insertar un nuevo registro en la tabla de entrada
  $sql_entrada = "INSERT INTO entrada (cantidadEntrada, fechaEntrada, idProducto) VALUES (?, ?, ?)";
  $stmt_entrada = $conn->prepare($sql_entrada);
  $stmt_entrada->bind_param("iss", $entrada, $fechaEntrada, $idProducto);

  if ($stmt_entrada->execute()) {
    echo "Registro de entrada exitoso.";
  } else {
    echo "Error al registrar la entrada: " . $stmt_entrada->error;
  }

  $stmt_entrada->close();
} else {
  echo "Error al registrar el producto: " . $stmt_producto->error;
}

$stmt_producto->close();
$conn->close();
?>



