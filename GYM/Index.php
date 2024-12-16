<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <base href="/GYM/">
    <link rel="icon" type="image/x-icon" href="Img/LogoNegro.ico">
    <link rel="stylesheet" href="Componentes/stylesComponente.css">
    <title>Aitor's GYM</title>
</head>
<body>
    <main class="container">
    <header>
        <nav id="navbar-placeholder"></nav>
        <div class="text-header">
            <h1 class="tittle-header">Aitor's GYM</h1>
            <p class="subTittle-header"> No digas más mañana...</p>
        </div>
    </header>
    <aside class="galeria">
        <div class="recuadro">
            <img src="Img/Espacio7.jpg" alt="Imagen del gimnasio 1">
        </div>
        <div class="recuadro">
            <img src="Img/Espacio2.jpg" alt="Imagen del gimnasio 2">
        </div>
        <div class="recuadro">
            <img src="Img/Espacio8.jpg" alt="Imagen del gimnasio 3">
        </div>
        <div class="recuadro">
            <img src="Img/Espacio6.jpg" alt="Imagen del gimnasio 4">
        </div>
    </aside>
    <div class="cuerpo">
            <div class="info-horarios">
                <h3>Horarios</h3>
                <p>Lunes a Viernes:</p>
                <p> 6:00 AM - 9:00 PM </p>
                <p>Sabado:</p>
                <p> 6:00 AM - 7:30 PM </p>
            </div>
            <div class="contenido">
                <h1>¡Bienvenido a Aitor's GYM!</h1>
                <p>En Aitor's GYM, creemos en el poder transformador del ejercicio y la nutrición. Nuestro objetivo es ofrecerte 
                    un ambiente motivador y cómodo para que puedas alcanzar tus metas de salud. Contamos con entrenadores 
                    experimentados, equipo moderno y un compromiso con tu bienestar. Únete a nosotros y descubre un estilo 
                    de vida saludable con el respaldo de un equipo que te apoya en cada paso.
                </p>
                <a href="Vistas/QuienesSomos.php">LEER MÁS</a>
            </div>
    </div>
    <footer id="footer-placeholder"></footer>
    </main>
    <script src="Funciones/Codigo.js"></script>
</body>
</html>

<style>
    :root{
        --color-primario:#282828;
        --color-secundario:#E4981E;
        --text-color--primario:#E7E7E5;
        --text-color--secundario:#282828;
        --color-extra--uno:#666666;
        --color-extra--dos:#141414;
    }


    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: Arial;
    }

    .container{
        display: grid;
        grid-template-areas: 
        "header"
        "aside"
        "main"
        "footer"
        ;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        height: 100vh;

    }


    header{
        grid-area: header;
        display: flex;
        height: 80vh;
        background: linear-gradient(to left, 
        rgba(0, 0, 0, 0.8), 
        rgba(70, 70, 70, 0)), 
        url('./Img/encabezado1.jpeg');
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .text-header{
        display: flex;
        flex-direction: column;
        position: relative;
        width: 50%;
        overflow: hidden;
        margin: 200px 0 0 200px;
    }

    .tittle-header, .subTittle-header{
        text-shadow: 2px 2px 5px black;
    }

    .tittle-header{
        font-size: 5vw;
        color: var(--color-secundario);
    }
    .subTittle-header{
        font-size: 2vw;
        color: var(--text-color--primario);
    }

    .galeria{
        grid-area: aside;
        display: grid;
        height: 50vh;
        border-top: 2px solid rgb(255, 255, 255);
        border-bottom: 3px solid var(--color-secundario);
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        padding: 30px 1rem;
        gap: 15px;
        background-color: var(--color-primario);
    }

    .recuadro {
        position: relative;
        overflow: hidden;
        border-radius: 5px;
        transition: transform 0.3s ease;
    }

    .recuadro img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .recuadro:hover img {
        transform: scale(1.05); 
    }

    .caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        text-align: center;
        padding: 10px;
        font-size: 1rem;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .recuadro:hover .caption {
        opacity: 1;
    }

    .cuerpo{
        grid-area: main;
        display: flex;
        padding: 50px 0;
        justify-content: space-around;
    }

    .info-horarios{
        display: flex;
        flex-direction: column;
        background-color: var(--color-primario);
        width: 20%;
        height: 300px;
        padding: 20px;
        gap: 10px;
        border: 7px double var(--color-secundario);
    }

    .info-horarios h3, .info-horarios p{
        color: var(--text-color--primario);
    }


    .contenido{
        display: flex;
        flex-direction: column;
        width: 60%;
        gap: 20px;
    }

    .contenido h1{
        color: var(--color-secundario);
        font-size: 50px;
    }

    .contenido p{
        font-size: 18px;
        text-align: justify;
        line-height: 1.6;
    }

    .contenido a{
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        background-color: var(--color-primario);
        color: var(--text-color--primario);
        overflow: hidden;
        width: 200px;
        height: 50px;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.2s ease-in-out;
    }

    .contenido a:hover{
        background-color: var(--color-secundario);
    }


    .info-horarios h3{
        display: flex;
        text-decoration: underline;
        justify-content: center;
        width: 100%;
    }

</style>