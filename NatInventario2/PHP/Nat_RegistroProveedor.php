<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistrar provedor</title>
    <script>
        function mostrarAlerta() {
            alert("Insumo registrado con éxito.");
        }
    </script>
    <link rel="stylesheet" href="../CSS/inventario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="/img/leben.jpg">
</head>

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
                    <li><a href="perfil.html">
                            <i class="fas fa-user"></i>
                            <span class="nav-item">Perfil</span>
                    <li><a href="inventario.html">
                            <i class="fas fa-house"></i>
                            <span class="nav-item">Inicio</span>
                        </a></li>
                    <li><a href="../PHP/Nat_FormularioEntrada.php">
                            <i class="fas fa-pencil"></i>
                            <span class="nav-item">Registro Entrada</span>
                        </a></li>
                    <li><a href="../PHP/Nat_RegistroProveedor.php">
                            <i class="fas fa-person"></i>
                            <span class="nav-item">Registro Proveedor</span>
                        </a></li>
                    <li><a href="../PHP/Nat_RegistarSalida.php">
                            <i class="fas fa-pencil"></i>
                            <span class="nav-item">Registro Salida</span>
                        </a></li>
                    <li><a href="crearcategoria.html">
                            <i class="fas fa-file"></i>
                            <span class="nav-item">Crea Categoria</span>
                        </a></li>
                </ul>
            </nav>
        </section>

        <section class="main">
            <div class="formulario">
                <h2>Registrar Proveedor</h2>
                <form method="POST">
                    <label for="nombreProveedor">Nombre del Proveedor:</label>
                    <input type="text" name="nombreProveedor" placeholder="Ingrese el nombre del proveedro" required><br><br>

                    <label for="direccionProveedor">Dirección del Proveedor:</label>
                    <input type="text" name="direccionProveedor" placeholder="Ingrese la direcion del proveedro"required><br><br>

                    <label for="telefonoProveedor">Teléfono del Proveedor:</label>
                    <input type="text" name="telefonoProveedor" placeholder="Ingrese el telefono del proveedro" required><br><br>

                    <button type="submit">Guardar</button>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "snb";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("La conexión falló: " . $conn->connect_error);
                    }

                    $nombreProveedor = $_POST['nombreProveedor'];
                    $direccionProveedor = $_POST['direccionProveedor'];
                    $telefonoProveedor = $_POST['telefonoProveedor'];

                    $sql = "INSERT INTO proveedor (nombreProveedor, direccionProveedor, telefonoProveedor) VALUES ('$nombreProveedor', '$direccionProveedor', '$telefonoProveedor')";

                    if ($conn->query($sql) === TRUE) {
                        
                    } else {
                        echo "Error al agregar el proveedor: " . $conn->error;
                    }

                    $conn->close();
                }
                ?>
                <script>
                </script>
        </section>
    </div>

</body>

</html>