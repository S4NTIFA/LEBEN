<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario</title>
  <link rel="stylesheet" href="inventario.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
  <div class="contenido">
    <!-- Tu contenido aquí -->
</div>
<img class="marca-agua" src="img.jpeg" alt="Marca de Agua">
<div class="container">
    <section>
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <img src="logoleben.png" alt="">
              <span class="nav-item">Inventario</span>
            <a href="perfil.html">
            <i class="fas fa-user"></i>
            <span class="nav-item">Perfil</span>
        </a></li>
          <li><a href="registroEntrada.html">
            <i class="fas fa-pencil"></i>
            <span class="nav-item">Registro Entrada</span>
        </a></li>
        <li><a href="proveedor.html">
          <i class="fas fa-person"></i>
          <span class="nav-item">Registro Proveedor</span>
      </a></li>
      <li><a href="registrarSalida.html">
        <i class="fas fa-pencil"></i>
        <span class="nav-item">Registro Salida</span>
    </a></li>
           <li><a href="crearcategoria.html">
            <i class="fas fa-file"></i>
            <span class="nav-item">Crea Categoria</span>
            <li><a href="ConsultaEntrada.html">
              <i class="fas fa-list"></i>
              <span class="nav-item">Consultar Entrada</span>
          </a></li>
          <li><a href="ConsultaSalida.html">
            <i class="fas fa-list"></i>
            <span class="nav-item">Consultar Salida</span>
        </a></li>
      </ul>
      </nav>
    </section>
    <div class="table-container">
      <h2>Entrada</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>Talla</th>
            <th>Producto</th>
            <th>cantidad</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <tr>
<?php
// Conexión a la base de datos
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos
$sql = "SELECT   ca.nombreCategoria,
                 ta.numeroTallas,
                 pr.idProducto,pr.nombreProducto,
                 en.cantidadEntrada,en.fechaEntrada
                 From producto pr

                INNER JOIN categoria ca ON pr.idCategoria = ca.idCategoria
                INNER JOIN tallas ta ON pr.idTallas = ca.idTallas
                INNER JOIN producto pr ON pr.idProducto = pr.idProducto
                INNER JOIN entrada en ON en.idEntrada = en.idEntrada";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir los resultados en una tabla
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Categoría</th>
                <th>Talla</th>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
                <th>Fecha</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["idProducto"] . "</td>
                <td>" . $row["nombreCategoria"] . "</td>
                <td>" . $row["numeroTalla"] . "</td>
                <td>" . $row["nombreProducto"] . "</td>
                <td>" . $row["cantidadEntrada"] . "</td>
                <td>" . $row["fechaEntrada"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión
$conn->close();
?>


            
              <button class="edit-btn"><i class="fas fa-edit"></i></button>
              <button class="delete-btn"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>