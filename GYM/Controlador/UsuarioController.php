<?php
require_once "../Controlador/conexion.php";

class UsuarioController {
    // Registro de usuario
    public function registrarUsuario($usuario, $nombre, $correo, $fecha, $password) {
        global $conn;
    
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
        try {
            $sql = "INSERT INTO usuarios (usuario, nombres, correo, fecha_nacimiento, password) 
                    VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$usuario, $nombre, $correo, $fecha, $passwordHash]);
    
            // Iniciar sesión automáticamente después del registro
            $userId = $conn->lastInsertId();
            $_SESSION['user_id'] = $userId;
            $_SESSION['username'] = $usuario;
    
            return ["status" => "success", "message" => "Usuario registrado con éxito."];
        } catch (PDOException $e) {
            return ["status" => "error", "message" => "Error al registrar: " . $e->getMessage()];
        }
    }

    // Validar login
    public function validarLogin($usuario, $password, $mantenerConectado) {
        global $conn;

        try {
            $sql = "SELECT id_usuario, usuario, password FROM usuarios WHERE usuario = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$usuario]);
            $user = $stmt->fetch();
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id_usuario'];
                $_SESSION['username'] = $user['usuario'];

                // Mantener conectado
                if ($mantenerConectado) {
                    setcookie("user_id", $user['id_usuario'], time() + 900, "/"); // 15 minutos
                }
                return ["status" => "success", "message" => "Inicio de sesión exitoso."];
            } else {
                return ["status" => "error", "message" => "Usuario o contraseña incorrectos."];
            }
        } catch (PDOException $e) {
            return ["status" => "error", "message" => "Error en el login: " . $e->getMessage()];
        }
    }
}


if (isset($_POST['action'])) {
    $controller = new UsuarioController();

    if ($_POST['action'] === "register") {
        echo json_encode($controller->registrarUsuario(
            $_POST['usuario'], $_POST['nombres'], $_POST['correo'], 
            $_POST['fecha'], $_POST['password']
        ));
    } elseif ($_POST['action'] === "login") {
        echo json_encode($controller->validarLogin(
            $_POST['usuario'], $_POST['password'], isset($_POST['mantenerConectado'])
        ));
    }
}
?>
