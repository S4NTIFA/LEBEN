<?php

if (isset($_POST['idProduccion'])) {
    $idProduccion = $_POST['idProduccion'];

    try {
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=snb", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM produccion WHERE idProduccion = :idProduccion";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idProduccion', $idProduccion, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "exito";
        } else {
        }
    } catch (PDOException $e) {
    }
} else {
    echo "'idProduccion' no recibido.";
}