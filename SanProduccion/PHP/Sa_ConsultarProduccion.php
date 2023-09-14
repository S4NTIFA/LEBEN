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
                <img src="../IMG/leben.jpg" alt="">
                <span class="nav-item">PRODUCCION</span>
            </a>
        </li>
          <li><a href="../SaProduccion.html">
            <i class="fas fa-circle-user"></i>
            <span class="nav-item">Perfil</span>
        </a></li> 
          </li>
          </li>
          <li><a href="../PHP/Sa_RegistarInsumos.php">
            <i class="fas fa-pen"></i>
            <span class="nav-item">Registrar Insumos</span>
        </a></li>
          <li><a href="../PHP/Sa_RegirarProduccion.php">
            <i class="fas fa-pen"></i>
            <span class="nav-item">Registrar Produccion</span>
        </a></li>
           <li><a href="">
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
                <th>Producto</th>
                <th>Entrada</th>
                <th>Fecha</th>
                <th>Salida</th>
                <th>Fecha</th>  
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>zapatosTerry</td>
                <td>12</td>
                <td>03-24-22</td>
                <td>9</td>
                <td>03-24-22</td>               
              </tr>
              <tr class="active">
                <td>02</td>
                <td>Chaquetas</td>
                <td>9</td>
                <td>03-24-22</td>
                <td>5</td>
                <td>03-24-22</td>                
              </tr>
              <tr>
                <td>03</td>
                <td>Pantalones</td>
                <td>6</td>
                <td>03-24-22</td>
                <td>5</td>
                <td>03-24-22</td>                
              </tr>
              <tr>
                <td>04</td>
                <td>Maletas</td>
                <td>12</td>
                <td>03-24-22</td>
                <td>9</td>
                <td>03-24-22</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
</body>
</html>