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
require("../conexion.php");

                try {
                  $pdo = new PDO("mysql:host=127.0.0.1;dbname=snb", "root", "");
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Consulta SQL para obtener los datos
$sql = "SELECT   ca.nombreCategoria,
                 ta.numeroTallas,
                 pr.idProducto,pr.nombreProducto,
                 sa.cantidadSalida,en.fechaEntrada
                 From producto pr

                INNER JOIN categoria ca ON pr.idCategoria = ca.idCategoria
                INNER JOIN tallas ta ON pr.idTallas = ca.idTallas
                INNER JOIN producto pr ON pr.idProducto = pr.idProducto
                INNER JOIN entrada en ON en.idSalida= en.idSalida";

$stmt = $pdo->query($consulta);

                  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
                    $idProducto = $fila['idProducto'];
                    $nombreCategoria = $fila['nombreCategoria'];
                    $numeroTallas = $fila['numeroTallas'];
                    $nombreProducto = $fila['nombreProducto'];
                    $cantidaEntrada = $fila['cantidadSalida'];
                    $fechaEntrada = $fila['fechaSalida'];
                    

                    echo "<tr>";
                    echo "<td>$idProducto</td>";
                    echo "<td>$nombreCategoria</td>";
                    echo "<td>$numeroTallas</td>";
                    echo "<td>$nombreProducto</td>";
                    echo "<td>$cantidadSalida</td>";
                    echo "<td>$fechaSalida</td>";           



// Cerrar la conexión
$conn->close();
?>

            sssssssssss
              <button class="edit-btn"><i class="fas fa-edit"></i></button>
              <button class="delete-btn"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>