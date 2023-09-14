<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produccion</title>
  <link rel="stylesheet" href="../CSS/inventario.css"> 
  <link rel="shortcut icon" type="image/x-icon" href="../IMG/leben.jpg">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <section>
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
                <img src="/IMG/leben.jpg" alt="">
                <span class="nav-item">PRODUCCION</span>
            </a>
        </li>
          <li><a href="SaProduccion.html">
            <i class="fas fa-circle-user"></i>
            <span class="nav-item">Perfil</span>
        </a></li> 
          </li>
          </li>
          <li><a href="Sa_RegistarInsumos.html">
            <i class="fas fa-pen"></i>
            <span class="nav-item">Registrar Insumos</span>
        </a></li>
          <li><a href="Sa_RegirarProduccion.html">
            <i class="fas fa-pen"></i>
            <span class="nav-item">Registrar Produccion</span>
        </a></li>
           <li><a href="Sa_ConsultarInsumos.html">
            <i class="fas fa-list"></i>
            <span class="nav-item">Consultar Insumos</span>
        </a></li>
          <li><a href="Sa_ConsultarProduccion.html">
            <i class="fas fa-list"></i>
            <span class="nav-item">Consultar Produccion</span>
        </a></li>
          <li><a href="Sa_ConsultarProduccion.html">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Salir</span>
        </a></li>      
        </ul>
      </nav>
    </section>
    <section class="main">
      <div class="main-top">
        <h1>Productos</h1>      
      </div>
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
                <th>Gasto</th>  
              </tr>
            </thead>
            <tbody>
              <?php
              require("../conexion.php");
          
             try {
          $pdo = new PDO("mysql:host=127.0.0.1;dbname=snb", "root", "");
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $consulta = "SELECT i.idInsumos, i.tipoInsumos, i.cantidadInsumos, i.fechaInsumos, g.cantidadGasto FROM insumos AS i INNER JOIN gastoinsumos AS g ON i.idInsumos = g.idInsumos";

          $stmt = $pdo->query($consulta);
    
         while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
          // Procesa cada fila de resultados aquí
          $idInsumo = $fila ['idInsumos'];
          $tipoInsumo = $fila['tipoInsumos'];
          $cantidadInsumos = $fila ['cantidadInsumos'];
          $fechaInsumos = $fila['fechaInsumos'];
          $cantidadGasto = $fila['cantidadGasto'];

          echo "<tr>";
          echo "<td>$idInsumos</td>";
          echo "<td>$tipoInsumos</td>";
          echo "<td>$cantidadInsumos </td>";
          echo "<td>$fechaInsumos:</td>";
          echo "<td>$cantidadGasto:</td>";
          echo "<tr>";
        }
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }

      // Cierra la conexión
      $pdo = null;
     ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
</body>
</html>