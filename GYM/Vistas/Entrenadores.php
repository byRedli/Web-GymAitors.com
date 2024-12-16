<?php
 session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Componentes/stylesComponente.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <base href="/GYM/">
    <link rel="icon" type="image/x-icon" href="Img/LogoNegro.ico">
    <link rel="stylesheet" href="Componentes/stylesComponente.css">
    <link rel="stylesheet" href="css/stylesE.css">
    <title>Entrenadores</title>
</head>
<body>
    <main class="container">
        <header style="background: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(70, 70, 70, 0)), url('./Img/Encabezado2.PNG');background-size: cover;background-position: center;position: relative;">
            <nav id="navbar-placeholder"></nav>
            <div class="text-M">
                <h1 class="tittle-M">ENTRENADORES</h1>
                <p class="subTittle-M">Tenemos un equipo de entrenadores dispuestos a guiarte...</p>
            </div>
        </header>
        <div class="container-Entrenadores">
            <h1>NUESTRO EQUIPO</h1>
            <p >En esta sección podrás visualizar nuestro equipo de entrenadores capacitados para apoyarte y guiarte en tu rutina diaria.</p>
            <p>Nota: La contratación se hace de manera presencial, para asegurar la comprensión por ambas partes sobre el contrato.</p>
            <div class="entrenador">
                <img src="Img/E-Hombre1.PNG" alt="">
                <div>
                    <h1>JUAN PÉREZ</h1>
                    <p>Origen: Perú</p>
                    <p>Edad: 28</p>
                    <p>Altura: 1.75 cm</p>
                    <p>Apasionado por el fitness</p>
                </div>
            </div>
            <div class="entrenador">
                <img src="Img/E-Mujer1.PNG" alt="">
                <div>
                    <h1>MARÍA LÓPEZ</h1>
                    <p>Origen: Perú</p>
                    <p>Edad: 28</p>
                    <p>Altura: 1.65 cm</p>
                    <p>Le encanta la nutrición</p>
                </div>
            </div>
            <div class="entrenador">
                <img src="Img/E-Mujer2.PNG" alt="">
                <div>
                    <h1>Johana Torres</h1>
                    <p>Origen: Perú</p>
                    <p>Edad: 30</p>
                    <p>Altura: 1.80 cm</p>
                    <p>Instructora de yoga</p>
                </div>
            </div>
            <div class="entrenador">
                <img src="Img/E-Hombre2.PNG" alt="">
                <div>
                    <h1>Julio Gonzale</h1>
                    <p>Origen: Perú</p>
                    <p>Edad: 27</p>
                    <p>Altura: 1.60 cm</p>
                    <p>Amante de los deportes extremos</p>
                </div>
            </div>
            <div class="entrenador">
                <img src="Img/E-Hombre3.PNG" alt="">
                <div>
                    <h1>ANTHONY LOPEZ</h1>
                    <p>Origen: Perú</p>
                    <p>Edad: 25</p>
                    <p>Altura: 1.75 cm</p>
                    <p>Especialista en pilates</p>
                </div>
            </div>
            <div class="entrenador">
                <img src="Img/E-Mujer3.PNG" alt="">
                <div>
                    <h1>MARTA GUERRERO</h1>
                    <p>Origen: Perú</p>
                    <p>Edad: 25</p>
                    <p>Altura: 1.68 cm</p>
                    <p>'Futbolista profesional retirada</p>
                </div>
            </div>
            <div class="entrenador">
                <img src="Img/E-Mujer4.PNG" alt="">
                <div>
                    <h1>ANA RIVERA</h1>
                    <p>Origen: Perú</p>
                    <p>Edad: 29</p>
                    <p>Altura: 1.78 cm</p>
                    <p>Fanática del Atletismo</p>
                </div>
            </div>
        </div>
        <footer id="footer-placeholder"></footer>
    </main>
    <script src="Funciones/Codigo.js"></script>
</body>
</html>