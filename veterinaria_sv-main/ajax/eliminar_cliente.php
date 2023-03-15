<?php
// Establecer la conexión a la base de datos
include('../config.php');
// Obtener el ID de la mascota a eliminar
$idMascota = $_GET["id"];

// Preparar la consulta SQL para eliminar la mascota
$sql = "DELETE FROM clientes WHERE id_cliente = :id";
$consulta = $pdo->prepare($sql);
$consulta->bindParam(":id", $idMascota);

// Ejecutar la consulta SQL y verificar si se eliminó la mascota correctamente
try {
    $consulta->execute();
    if ($consulta->rowCount() == 1) {
        echo "cliente eliminado correctamente";
    } else {
        echo "No se encontró ninguna cliente con el ID especificado";
    }
} catch (PDOException $e) {
    echo "Error al Cliente la mascota: " . $e->getMessage();
}
