<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="../CSS/inventario.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
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
                            </a>
                    </li>
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
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "snb";

            $conn = new mysqli($servername, $username, $password, $database);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta SQL para obtener los datos
            $sql = "SELECT ca.nombreCategoria,
                           ta.numeroTallas,
                           pr.idProducto,
                           pr.nombreProducto,
                           en.cantidadEntrada,
                           en.fechaEntrada
                    FROM producto pr
                    INNER JOIN categoria ca ON pr.idCategoria = ca.idCategoria
                    INNER JOIN tallas ta ON pr.idTallas = ta.idTallas
                    INNER JOIN entrada en ON pr.idProducto = en.idProducto";
            $result = $conn->query($sql);

            if ($result !== false && $result->num_rows > 0) {
                // Imprimir los resultados en una tabla
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["idProducto"] . "</td>
                            <td>" . $row["nombreCategoria"] . "</td>
                            <td>" . $row["numeroTallas"] . "</td>
                            <td>" . $row["nombreProducto"] . "</td>
                            <td>" . $row["cantidadEntrada"] . "</td>
                            <td>" . $row["fechaEntrada"] . "</td>
                            <td>
                                <button class='delete-btn'href='Eliminar.php?idProducto=" . $row["idProducto"] ."'><i class='fas fa-trash-alt'></i></button>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No se encontraron registros.</td></tr>";
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>

</html>