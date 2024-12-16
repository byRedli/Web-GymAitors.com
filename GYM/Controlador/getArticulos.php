<?php
require_once "../Controlador/conexion.php";

// Obtener los artículos de la base de datos
try {
    $sql = "SELECT id, titulo, imagen, parrafo1, parrafo2, parrafo3 FROM articulos_nutricion";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    echo json_encode($articulos);
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => "Error al obtener los artículos: " . $e->getMessage()]);
}
?>
