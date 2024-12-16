<?php
// Iniciar la sesión
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['date'];
    $password = $_POST['password'];

    if ($password !== $_POST['password_confirm']) {
        echo "Las contraseñas no coinciden.";
        exit();
    }

    require_once '../Controlador/UsuarioController.php';
    $controller = new UsuarioController();

    $response = $controller->registrarUsuario($usuario, $nombres, $correo, $fecha_nacimiento, $password);

    if ($response['status'] == 'success') {
        header("Location: ../Index.php");
        exit();
    } else {
        echo $response['message'];
    }
}
?>
