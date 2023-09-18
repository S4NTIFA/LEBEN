<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resgistrar Produccion</title>
  <script>
    function mostrarAlerta() {
      alert("Producción registrada con éxito.");
    }
  </script>
  <link rel="stylesheet" href="../CSS/Sa_Produccion.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="shortcut icon" type="image/x-icon" href="../img/leben.jpg">
</head>

<body>
  <div class="container">
    <section>
      <nav class="a-hover">
        <ul>
          <li>
            <a href="#" class="logo">
              <img src="../IMG/leben.jpg" alt="">
              <span class="nav-item">PRODUCCION</span>
            </a>
          </li>
          <li><a href="../HTML/SaProduccion.html">
              <i class="fas fa-circle-user"></i>
              <span class="nav-item">Perfil</span>
            </a></li>
          </li>
          </li>
          <li><a href="../PHP/Sa_RegistarInsumos.php">
              <i class="fas fa-pen"></i>
              <span class="nav-item">Registrar Insumos</span>
            </a></li>
          <li><a href="../PHP/Sa_RegistrarProduccion.php">
              <i class="fas fa-pen"></i>
              <span class="nav-item">Registrar Produccion</span>
            </a></li>
          </a></li>
          <li><a href="../PHP/Sa_FinalizarProduccion.php">
              <i class="fas fa-pen"></i>
              <span class="nav-item">Finalizar Produccion</span>
            </a></li>
          <li><a href="../PHP/Sa_ConsultarInsumos.php">
              <i class="fas fa-list"></i>
              <span class="nav-item">Consultar Insumos</span>
            </a></li>
          <li><a href="../PHP/Sa_ConsultarProduccion.php">
              <i class="fas fa-list"></i>
              <span class="nav-item">Consultar Produccion</span>
            </a></li>
          <li><a href="../SanSalir.html">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Salir</span>
            </a></li>
        </ul>
      </nav>
    </section>
    <section class="main">
      <div class="formulario">
        <h2>Registro de Produccion</h2>
        <h3>Inicio</h3>
        <form method="POST" onsubmit="mostrarAlerta()">
          <div class="form-group">
            <label for="tipProducto">Tipo Producto:</label>
            <select id="tipProducto" name="tipoProducto" required>
              <option value="">Seleccione Producto</option>
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "snb";

              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("La conexión falló: " . $conn->connect_error);
              }

              $sql = "SELECT DISTINCT nombreProducto FROM producto";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<option value='" . $row["nombreProducto"] . "'>" . $row["nombreProducto"] . "</option>";
                }
              } else {
                echo "<option value=''>No hay productos disponibles</option>";
              }

              $conn->close();
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tipInsumos">Tipo Insumos:</label>
            <select id="tipInsumos" name="tipoInsumos" required>
              <option value="">Seleccione Tipo de Insumos</option>
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "snb";

              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("La conexión falló: " . $conn->connect_error);
              }

              $sql = "SELECT DISTINCT tipoInsumos FROM insumos";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<option value='" . $row["tipoInsumos"] . "'>" . $row["tipoInsumos"] . "</option>";
                }
              } else {
                echo "<option value=''>No hay tipos de insumos disponibles</option>";
              }

              $conn->close();
              ?>
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "snb";

              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("La conexión falló: " . $conn->connect_error);
              }

              $tipoProducto = $_POST['tipoProducto'];
              $tipoInsumos = $_POST['tipoInsumos'];
              $nombreProduccion = $_POST['nombreProduccion'];
              $cantidadSolicitada = $_POST['cantidadSolicitada'];
              $fechaInicio = $_POST['fechaInicio'];

              $sqlProducto = "SELECT idProducto FROM producto WHERE nombreProducto = '$tipoProducto'";
              $resultProducto = $conn->query($sqlProducto);

              if ($resultProducto->num_rows > 0) {
                $rowProducto = $resultProducto->fetch_assoc();
                $idProducto = $rowProducto["idProducto"];

                $sqlInsumo = "SELECT idInsumos FROM insumos WHERE tipoInsumos = '$tipoInsumos'";
                $resultInsumo = $conn->query($sqlInsumo);

                if ($resultInsumo->num_rows > 0) {
                  $rowInsumo = $resultInsumo->fetch_assoc();
                  $idInsumos = $rowInsumo["idInsumos"];

                  $sql = "INSERT INTO produccion (idProducto, idInsumos, nombreProduccion, cantidadSolicitada, fechaInicio) VALUES ('$idProducto', '$idInsumos', '$nombreProduccion', '$cantidadSolicitada', '$fechaInicio')";

                  if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('Producción registrada con éxito.');</script>";
                    header("location: ../PHP/Sa_ConsultarProduccion.php");
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                } else {
                  echo "Error: No se pudo encontrar el idInsumos para '$tipoInsumos'.";
                }
              } else {
                echo "Error: No se pudo encontrar el idProducto para '$tipoProducto'.";
              }

              $conn->close();
              ?>

            </select>
          </div>
          <div class="campos-linea">
            <label for="nombre">Nombre de la Produccion:</label>
            <input type="text" id="nombre" name="nombreProduccion" placeholder="Ingrese el nombre de la produccion" required>
          </div>
          <div class="campos-linea">
            <label for="cantidad">Cantidad solicitada:</label>
            <input type="number" id="cantidad" name="cantidadSolicitada" placeholder="Ingrese la cantidad" required>
          </div>

          <div class="campos-linea">
            <label for="fechaInicio">Fecha de Inicio:</label>
            <input type="date" id="fechaInicio" name="fechaInicio" required>
          </div>
          <button type="submit">Guardar</button>
        </form>
      </div>
    </section>
  </div>

</body>

</html>