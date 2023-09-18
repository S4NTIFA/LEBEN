<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finalizar Produccion</title>
  <script>
    function mostrarAlerta() {
      alert("Se finalizo la produccion con exito.");
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
        <h2>Finalizar Produccion</h2>
        <h3>Finalizar</h3>
        <form method="post" onsubmit="mostrarAlerta()">
          <div class="form-group">
            <label for="nombreProduccion">Nombre de la Produccion:</label>
            <select name="nombreProduccion" id="nombreProduccion" required>
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "snb";

              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("La conexión falló: " . $conn->connect_error);
              }

              $sql = "SELECT DISTINCT nombreProduccion FROM produccion";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<option value='" . $row["nombreProduccion"] . "'>" . $row["nombreProduccion"] . "</option>";
                }
              } else {
                echo "<option value=''>No hay producciones disponibles</option>";
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

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombreProduccionSeleccionado = $_POST["nombreProduccion"];

                $nuevaFechaEntrega = $_POST["fechaEntrega"];
                $nuevaCantidadEntrega = $_POST["cantidadEntregada"];

                $sql = "SELECT idProduccion FROM produccion WHERE nombreProduccion = '$nombreProduccionSeleccionado'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $idProduccion = $row["idProduccion"];

                  $updateSql = "UPDATE produccion SET fechaEntrega = '$nuevaFechaEntrega', cantidadEntrega = $nuevaCantidadEntrega WHERE idProduccion = $idProduccion";

                  if ($conn->query($updateSql) === TRUE) {
                    header("location: ../PHP/Sa_ConsultarProduccion.php");
                  } else {
                    echo "Error en la actualización: " . $conn->error;
                  }
                } else {
                  echo "No se encontró un registro de producción con el nombre especificado.";
                }
              }
              ?>
            </select>
          </div>
          <div class="campos-linea">
            <label for="cantidadEntregada">Cantidad Entregada:</label>
            <input type="number" id="cantidadEntregada" name="cantidadEntregada" placeholder="Ingrese la cantidad de insumos entregados" required>
          </div>
          <div class="campos-linea">
            <label for="fechaEntrega">Fecha de Entrega:</label>
            <input type="date" id="fechaEntrega" name="fechaEntrega" required>
          </div>
          <button type="submit">Actualizar</button>
        </form>
      </div>
    </section>

  </div>

</body>

</html>