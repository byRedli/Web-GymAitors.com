<?php
 session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ew, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <base href="/GYM/">
    <link rel="icon" type="image/x-icon" href="Img/LogoNegro.ico">
    <link rel="stylesheet" href="Componentes/stylesComponente.css">
    <link rel="stylesheet" href="css/styleM.css">
    <title>Planes</title>
</head>
<body>
    <main class="container">
        <header style="background: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(70, 70, 70, 0)), url(./Img/Encabezado2.PNG);background-size: cover;background-position: center;position: relative;">
            <nav id="navbar-placeholder"></nav>
            <div class="text-M">
                <h1 class="tittle-M">MEMBRESIAS</h1>
                <p class="subTittle-M">Únete a nosotros para un estilo de vida mejor...</p>
            </div>
        </header>
        <div class="container-planes">
            <p class="info-planes">Tenemos disponibles grandes ofertas en membresías, 
                algunas incluyen contrato con un entrenador que te guiara en tu camino al cambio,  
                también puedes contratarlo por separado en la pestaña de “Entrenadores” 
                donde puedes visualizar la lista de entrenadores disponibles y los servicios que ofrece.
            </p>
            <h1 class="title-container">PRINCIPALES PROMOCIONES</h1>
            <div class="container-tarjet">
                <div class="tarjet" id="Plan1">
                    <img src="Img/imgTarjet1.PNG" alt="">
                    <div>
                        <h1>1 MES</h1>
                        <p>- Esta promoción incluye lo siguiente:</p>
                        <p>- Acceso libre a las maquinas</p>
                        <p>- Acceso a la sección de nutrición de nuestra página web</p>
                        <p>- 10% de descuento en nuestra tienda fisica de ropa fitnnes</p>
                    </div>
                    <h1>s/. 25</h1>
                    <button id="promo-1">ADQUIRIR</button>
                </div>
                <div class="tarjet" id="Plan2">
                    <img src="Img/imgTarjet2.PNG" alt="">
                    <div>
                        <h1>3 MESES</h1>
                        <p>- Esta promoción incluye lo siguiente:</p>
                        <p>- Acceso libre a las maquinas</p>
                        <p>- Rutina personalizada</p>
                        <p>- Acceso a la sección de nutrición de nuestra página web</p>
                        <p>- 20% de descuento en nuestra tienda física de ropa Fitnnes</p>
                    </div>
                    <h1>s/. 65</h1>
                    <button id="promo-2">ADQUIRIR</button>
                </div>
                <div class="tarjet" id="Plan3">
                    <img src="Img/imgTarjet3.PNG" alt="">
                    <div>
                        <h1>1 MES</h1>
                        <p>- Esta promoción incluye lo siguiente:</p>
                        <p>- Acceso libre a las maquinas</p>
                        <p>- Acceso a la sección de nutrición de nuestra página web</p>
                        <p>- Contrato con entrenador (Se te asignara al momento de asistir al local)</p>
                    </div>
                    <h1>s/. 55</h1>
                    <button id="promo-3">ADQUIRIR</button>
                </div>
                
            </div>
            <p class="nota">Si no logras decidirte por alguna membresía, ¡NO TE PREOCUPES! 
                Puedes acercarte a nuestro local y adquirir un plan de un día, y 
                comprobar la calidad de nuestro servicio, nuestros recepcionistas 
                están dispuestos a guiarte.</p>
        </div>
        <footer id="footer-placeholder"></footer>
    </main>
    <script src="./Funciones/Codigo.js"></script>
</body>
</html>
