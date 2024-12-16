<?php
header('Content-Type: application/json');
require_once "../Controlador/conexion.php";

class EntrenadoresController {
    // Obtener todos los entrenadores
    public function obtenerEntrenadores() {
        global $conn;
        try {
            $query = "SELECT foto, nombre, origen, edad, altura, descripcion FROM entrenadores";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $entrenadores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($entrenadores) {
                return [
                    'status' => 'success',
                    'data' => $entrenadores
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'No se encontraron entrenadores.'
                ];
            }
        } catch (PDOException $e) {
            return [
                'status' => 'error',
                'message' => 'Error al obtener entrenadores: ' . $e->getMessage()
            ];
        }
    }
}

// Instanciamos el controlador
$controller = new EntrenadoresController();

// Verificamos si la solicitud es de tipo GET (para obtener los entrenadores)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($controller->obtenerEntrenadores());
}
?>