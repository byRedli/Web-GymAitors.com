<?php
session_start();
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : null;
?>

<html>
<base href="/GYM/">
<nav class="container-nav">
    <div class="logo">
        <a href="#"><img src="Img/LogoNegro.png" alt="" width="80px" height="80px"></a>
    </div>
    <div class="pagina-web">
        <h1>Aitor's GYM</h1>
    </div>
    <nav class="nav-bar">
        <input type="checkbox" id="menu-toggle" hidden>
        <label for="menu-toggle" class="menu-icon">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
        <ul class="menu">
            <li class="opc-nav"><a href="Index.php">Inicio</a></li>
            <li class="opc-nav"><a href="Vistas/Membresias.php">Membresías</a></li>
            <li class="opc-nav"><a href="Vistas/Nutricion.php">Nutrición</a></li>
            <li class="opc-nav"><a href="Vistas/Entrenadores.php">Entrenadores</a></li>
            <li class="opc-nav"><a href="Vistas/QuienesSomos.php">¿Quienes Somos?</a></li>
        </ul>
    </nav>
            <?php if (!$username): ?>
                    <li class="login">
                        <a href="Vistas/Login.php">Login</a>
                    </li>
                    <li class="register">
                        <a href="Vistas/Registro.php">Registro</a>
                    </li>
            <?php endif; ?>
            <?php if ($username): ?>
                <div class="User">
                    <ion-icon name="person-outline"></ion-icon>
                    <a href="Vistas/UsuarioPage.php" id="user-logeado"><?php echo htmlspecialchars($username); ?></a>
                    <form action="Vistas/logout.php" method="POST" style="display: inline;">
                        <button type="submit" class="btn-logout">Cerrar Sesión</button>
                    </form>
                </div>
            <?php endif; ?>
</nav>
</html>