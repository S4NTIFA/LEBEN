<?php

if (isset($_POST['idInsumos'])) {
    $idInsumos = $_POST['idInsumos'];

    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=snb", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM insumos WHERE idInsumos = :idInsumos";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idInsumos', $idInsumos, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "exito";
        } else {
        }
    } catch (PDOException $e) {
    }
} else {
    echo "'idInsumos' no recibido.";
}
