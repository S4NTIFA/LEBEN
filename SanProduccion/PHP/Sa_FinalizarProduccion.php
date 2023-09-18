<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finalizar Produccion</title>
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
        <form onsubmit="">
          <div class="form-group">
            <label for="categoria">Nombre de la Produccion:</label>
            <select id="categoria" required>
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
                  echo "<option value=''>Seleccione una produccion</option>";
                  echo "<option value='" . $row["nombreProduccion"] . "'>" . $row["nombreProduccion"] . "</option>";
                }
              } else {
                echo "<option value=''>No hay producciones disponibles</option>";
              }


              $conn->close();
              ?>
            </select>
          </div>

          <div class="campos-linea">
            <label for="cantidad">Cantidad Entregada:</label>
            <input type="number" id="cantidad" placeholder="Ingrese la cantidad de insumos requeridos" required>
          </div>
          <div class="campos-linea">
            <label for="fechaEntrada">Fecha de Entrega:</label>
            <input type="date" id="fechaEntrada" required>
          </div>

          <button type="submit">Actualizar</button>
        </form>
      </div>
    </section>
  </div>

</body>

</html>