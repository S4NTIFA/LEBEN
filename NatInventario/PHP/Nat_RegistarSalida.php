<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/inventario.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="validacion.js"></script>
</head>
<img class="marca-agua" src="img.jpeg" alt="Marca de Agua">

<body>
    <div class="container">
        <section>
            <nav>
                <ul>
                    <li>
                        <a href="#" class="logo">
                            <img src="logoleben.png" alt="">
                            <span class="nav-item">Inventario</span>
                        </a>
                    </li>
                    <li><a href="perfil.html">
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
                        </a></li>
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

        <section class="main">
            <div class="formulario">
                <h2>Registro de salida</h2>
                <div class="campos-linea">
                    <form method="POST" onsubmit=>

                        <div class="form-group">
                            <label for="Producto">Producto:</label>
                            <select id="Producto" name="producto" required>
                                <option value="">Seleccione una Producto</option>
                                <?php
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "snb";
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                if ($conn->connect_error) {
                                    die("La conexión falló: " . $conn->connect_error);
                                }
                                $sql = "SELECT DISTINCT idProducto, nombreProducto FROM Producto";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row["idProducto"] . "'>" . $row["nombreProducto"] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay productos disponibles</option>";
                                }
                                $conn->close();
                                ?>
                            </select>
                        </div>
                        <div class="productop">
                            <label for="cantidadSalida">Cantidad salido:</label>
                            <input type="number" id="cantidadSalida" name="cantidadSalida" placeholder="Ingrese la cantidad de salida" oninput="validarCantidad(this)" min="1"></div>
                        </div>
                        <div class="campos-linea">
                            <label for="fechaSalida">Fecha de Salida:</label>
                            <input type="date" id="fechaSalida" name="fechaSalida" required>
                        </div>
                        <div class="opciones">
                            <label>Por defecto</label>
                            <label>
                                <input type="radio" name="tipoSalida" value="si" checked> Sí
                            </label>
                        </div>
                        <input type="hidden" name="formularioEnviado" value="1">
                        <button type="submit">Guardar</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['producto']) && isset($_POST['cantidadSalida']) && isset($_POST['fechaSalida'])) {
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "snb";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("La conexión falló: " . $conn->connect_error);
                            }

                            $idProducto = $_POST['producto'];
                            $cantidadSalida = $_POST['cantidadSalida'];
                            $fechaSalida = $_POST['fechaSalida'];
                            $tipoSalida = "DEFECTO";

                            $sql = "INSERT INTO salida (idProducto, cantidadSalida, fechaSalida, tipoSalida) VALUES ('$idProducto', '$cantidadSalida', '$fechaSalida', '$tipoSalida')";

                            if ($conn->query($sql) === TRUE) {
                            } else {
                                echo "Error al registrar la salida: " . $conn->error;
                            }
                            $conn->close();
                        }
                    }
                    ?>

                </div>
        </section>
    </div>
    <script>

    </script>
</body>

</html>
