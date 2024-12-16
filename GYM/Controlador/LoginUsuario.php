<?php
session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $mantenerConectado = isset($_POST['mantenerConectado']) ? true : false;

        require_once '../Controlador/UsuarioController.php';
        $controller = new UsuarioController();
        $response = $controller->validarLogin($usuario, $password, $mantenerConectado);
        if ($response['status'] == 'success') {
            header("Location:../Index.php");
            exit();
        } else {
            echo "<script>alert('{$response['message']}'); window.history.back();</script>";
            echo 'AQUI';
        }
    }
?>