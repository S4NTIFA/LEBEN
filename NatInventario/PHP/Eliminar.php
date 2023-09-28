<?php     

if (isset($_POST['idProducto'])) {
    $idProducto = $_POST['idProducto'];

    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=snb", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM producto WHERE idProducto = :idProducto";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "exito";
        } else {
        }
    } catch (PDOException $e) {
    }
} else {
    echo "'idProducto' no recibido.";
}
