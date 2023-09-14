<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resgistrar producto</title>
  <link rel="stylesheet" href="../CSS/inventario.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="shortcut icon" type="image/x-icon" href="/img/leben.jpg">
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
        <h2>Registro de Insumos</h2>
        <form onsubmit="return validarFormulario()">
          <div class="form-group">  
            <label for="categoria">Tipo Insumos:</label>
            <select id="categoria" required>
              
              <option>Seleccione un tipo</option>
              <option>Cordones</option>
        
            </select>   
          </div>  
          <div class="campos-linea">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" placeholder="Ingrese la cantidad" required>
          </div>
          
          <div class="campos-linea">
            <label for="fechaEntrada">Fecha de Entrada:</label>
            <input type="date" id="fechaEntrada" required>
          </div>
          
          
          <button type="submit">Guardar</button>
        </form>
      </div>
    </section>
  </div>
  
</body>
</html>