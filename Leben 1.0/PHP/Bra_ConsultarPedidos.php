<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Pedidos</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/leben.jpg">
    
    <!--conexion con stilos css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="../CSS/braVentas.css">
</head>
<body>

    <!--menu-->
    <div class="container">
        <section>
            <div class="container">
                <nav class ="a-hover">
                    <ul>
                        <li class="logo">
                            <img src="../IMG/leben.jpg" alt="">
                            <span class="nav-item">Ventas</span>
                        </li>
                        <li>
                            <a href="../html/dashboard.html">
                                <i class="fas fa-house"></i>
                                <span class="nav-item">Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href="../PHP/Bra_ConsultarPedidos.php">
                                <i class="fas fa-list"></i>
                                <span class="nav-item">Consultar Pedidos</span>
                            </a>
                        </li>               
                        <li>
                            <a href="index.html">
                                <i class="fas fa-sign-out-alt"></i>
                                <span class="nav-item">Salir</span>
                            </a>
                        </li>      
                    </ul>
                </nav>
            </div>
        </section>


        <section class="main">
            <section class="attendance">
                <div class="attendance-list">
                    <table class="table">
                        <thead>
                            <tr>                       					
                                <th>Id Pedido</th>
                                <th>Fecha Pedido</th>
                                <th>Tipo Pedido</th>
                                <th>Estado Pedido</th>
                                <th>Valor Pedido</th>
                                <th>Id Usuarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                require("../conexion.php");

                                try {
                                $pdo = new PDO("mysql:host=127.0.0.1;dbname=snb", "root", "");
                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                $consulta = "SELECT idPedido, fechaPedido, tipoPedido, estadoPedido, valorPedido, idUsuarios FROM pedido;";

                                $stmt = $pdo->query($consulta);

                                while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                    $idPedido = $fila['idPedido'];
                                    $fechaPedido = $fila['fechaPedido'];
                                    $tipoPedido = $fila['tipoPedido'];
                                    $estadoPedido = $fila['estadoPedido'];
                                    $valorPedido = $fila['valorPedido'];
                                    $idUsuarios = $fila['idUsuarios'];

                                    echo "<tr>";
                                    echo "<td>$idPedido</td>";
                                    echo "<td>$fechaPedido</td>";
                                    echo "<td>$tipoPedido </td>";
                                    echo "<td>$estadoPedido</td>";
                                    echo "<td>$valorPedido</td>";
                                    echo "<td>$idUsuarios</td>";

                                    echo "<td><a class='btn-eliminar' href='#' onclick='confirmarEliminacion(" . $fila["idPedido"] . ")'><i class='fa-solid fa-trash'></i></a>";
                                    echo "<a class='btn-eliminar' href='Sa_EditarInsumos.php?idPedido=" . $fila["idPedido"] . "'><i class='fa-solid fa-pen-to-square'></i></a></td>";
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