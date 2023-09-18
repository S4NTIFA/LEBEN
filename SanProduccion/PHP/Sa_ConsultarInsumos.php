<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar Insumos</title>
  <link rel="stylesheet" href="../CSS/Sa_Produccion.css">
  <link rel="shortcut icon" type="image/x-icon" href="../IMG/leben.jpg">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
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
      <section class="attendance">
        <div class="attendance-list">
          <h1></h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tipo Insumos</th>
                <th>Cantidad</th>
                <th>Fecha Entrada</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                require("../conexion.php");

                try {
                  $pdo = new PDO("mysql:host=127.0.0.1;dbname=snb", "root", "");
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  $consulta = "SELECT idInsumos, tipoInsumos, cantidadInsumos, fechaInsumos FROM insumos;";

                  $stmt = $pdo->query($consulta);

                  while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    $idInsumo = $fila['idInsumos'];
                    $tipoInsumo = $fila['tipoInsumos'];
                    $cantidadInsumos = $fila['cantidadInsumos'];
                    $fechaInsumos = $fila['fechaInsumos'];

                    echo "<tr>";
                    echo "<td>$idInsumo</td>";
                    echo "<td>$tipoInsumo</td>";
                    echo "<td>$cantidadInsumos </td>";
                    echo "<td>$fechaInsumos</td>";

                    echo "<td><a class='btn-eliminar' href='#' onclick='confirmarEliminacion(" . $fila["idInsumos"] . ")'><i class='fa-solid fa-trash'></i></a>";
                    echo "<a class='btn-eliminar' href='Sa_EditarInsumos.php?idInsumos=" . $fila["idInsumos"] . "'><i class='fa-solid fa-pen-to-square'></i></a></td>";
                    echo "</tr>";
                  }
                } catch (PDOException $e) {
                  echo "Error: " . $e->getMessage();
                }

                $pdo = null;
                ?>
              <tr>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  function confirmarEliminacion(idInsumos) {
    if (confirm("¿Seguro que deseas eliminar este registro?")) {

      $.post('Sa_EliminarInsumos.php', {
        idInsumos: idInsumos
      }, function(data) {

        if (data === 'exito') {
          alert('Registro eliminado con éxito.');

          location.reload();
        } else {
          alert('Registro eliminado con éxito.');
          location.reload();
        }
      });
    }
  }
</script>

</html>