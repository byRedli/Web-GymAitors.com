<?php
 session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <base href="/GYM/">
    <link rel="icon" type="image/x-icon" href="Img/LogoNegro.ico">
    <link rel="stylesheet" href="Componentes/stylesComponente.css">
    <link rel="stylesheet" href="css/stylesQS.css">
    <title>¿Quienes Somos?</title>
</head>
<body>
    <main class="container">
        <header style="background: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(70, 70, 70, 0)), url(./Img/QS-Img.png);background-size: cover;background-position: center;position: relative;">
            <nav id="navbar-placeholder"></nav>
            <div class="text-M">
                <h1 class="tittle-M">¿QUIENES SOMOS?</h1>
                <p class="subTittle-M">En esta sección podras conocernos un poco más ;D</p>
            </div>
        </header>
        <div class="container-QS">
            <div class="info-fundador">
                <img src="Img/AdminFoto.PNG" alt="">
                <h1>Anais Rodriguez</h1>
                <p>¡Hola! Soy uno de los fundadores de este gimnasio, 
                    te doy la bienvenida la página oficial de nuestro 
                    gimnasio, aquí puedes visualizar parte del servicio 
                    que brindamos en Aitor's GYM y el compromiso que 
                    tenemos contigo en la búsqueda de una vida saludable. 
                    Me despido y te animo a unirte a nuestra comunidad fitness.
                </p>
            </div>
            <div class="info-gym">
                <div class="MV-QS">
                    <h1>Visión</h1>
                    <p>Convertirnos en una comunidad de referencia en el ámbito del fitness, inspirando a las personas a alcanzar su mejor versión física, mental y emocional.</p>
                    <h1>Misión</h1>
                    <p>Motivar y acompañar a nuestros clientes en la consecución de sus objetivos de salud y acondicionamiento físico, proporcionando un ambiente seguro, inclusivo y motivador.</p>
                </div>
                <div class="Ubicacion-QS">
                    <h1>Ubicación</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.089145775593!2d-79.84673652422943!3d-6.758983566094803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cef91cf6ac293%3A0xf49363ea8d403568!2sAitor&#39;s%20GYM!5e0!3m2!1ses-419!2spe!4v1734128491404!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p>Ubicanos en Av. Kennedy 325, José Leonardo Ortiz 14002</p>
                </div>
                <div class="redes-QS">
                    <h1>Contactanos</h1>
                    <a href="https://www.facebook.com/elgimnasioqueesperabas" class="f-link" target="_blank"><ion-icon name="logo-facebook"></ion-icon> Aitor's GYM</a>
                    <a href="https://www.instagram.com/aitors_gym?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="ig-link" target="_blank"><ion-icon name="logo-instagram"></ion-icon> @Aitors_gym</a>
                    <a href="https://www.tiktok.com/@aitorsolisgym" class="tk-link" target="_blank"><ion-icon name="logo-tiktok"></ion-icon> @Aitors_oficial</a>
                    <a class="ws-link" ><ion-icon name="logo-whatsapp"></ion-icon> +51 966 666 984</a>
                </div>
            </div>
        </div>
        <footer id="footer-placeholder"></footer>
    </main>
    <script src="Funciones/Codigo.js"></script>
</body>
</html>
