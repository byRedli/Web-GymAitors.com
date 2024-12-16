<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/GYM/">
    <link rel="icon" type="image/x-icon" href="Img/LogoNegro.ico">
    <title>Registro</title>
</head>
<body>
    <main>
        <div class="div-atras">
            <a class="volver" href="Index.php">Volver</a>
        </div>
        <div class="container-form-registro">
        <form action="Controlador/RegistrarUsuario.php" method="POST">
            <h1>Registro</h1>
            <div class="content-imput">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" name="usuario" id="id-UserR" placeholder="Usuario" required title="Este campo es obligatorio.">
            </div>
            <div class="content-imput">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" name="nombres" id="nombres-UserR" placeholder="Nombres y Apellidos" required title="Este campo es obligatorio.">
            </div>
            <div class="content-imput">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="correo" id="Correo-UserR" placeholder="Correo" required title="Este campo es obligatorio.">
            </div>
            <div class="content-imput">
                <ion-icon name="calendar-outline"></ion-icon>
                <input type="date" id="fecha-UserR" name="date" required>
            </div>
            <div class="content-imput">
                <ion-icon name="key-outline"></ion-icon>
                <input type="password" name="password" id="pass-UserR" placeholder="Contraseña" required title="Este campo es obligatorio.">
            </div>
            <div class="content-imput">
                <ion-icon name="checkmark-outline"></ion-icon>
                <input type="password" name="password_confirm" id="passConfi-UserR" placeholder="Confirmar Contraseña" required title="Este campo es obligatorio.">   
            </div>
            <button type="submit" class="btn-form" id="btn-form-registro">Registrar</button>
            <a href="Vistas/Login.php">Volver a login</a>
        </form>
        </div>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
    margin: 0;
    padding: 0;
    font-family: Arial;
}

main{
    width: 100vw;
    height: 100vh;
    background: linear-gradient(to left, 
    rgba(0, 0, 0, 0.8), 
    rgba(70, 70, 70, 0)), 
    url('./Img/encabezado1.jpeg');
    background-size: cover;
    background-position: center;
    position: relative;
}
.div-atras{
    width: 100%;
    height: 5vh;
    display: flex;
    align-items: center;
    padding-left: 20px;
}
.volver{
    font-size: 1vw;
    color: var(--color-extra--dos);
}

.volver:hover{
    color: var(--text-color--primario);
}

.container-form{
    width: 100%;
    height: 95vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container-form form{
    height: 70vh;
    width: 30vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: var(--color-primario);
    border-radius: 15px;
    gap: 20px;
}

.content-check{
    width: 70%;
    height: 20px;
    display: flex;
    gap: 10px;
}

.content-imput{
    background-color: var(--color-extra--dos);
    width: 70%;
    height: 60px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    border-radius: 5px;
}
.content-imput ion-icon{
    color: var(--text-color--primario);
    font-size: 30px;
}

.content-imput input{
    height: 35px;
    width: 80%;
    font-size: 0.8vw;
    background-color: inherit;
    border: none;
    border-bottom: 1px solid var(--color-secundario);
    outline: none;
    color: var(--color-secundario);
}


.container-form form a{
    color: var(--text-color--primario);
    font-size: 0.8vw;
    transition: color 0.2s ease-in;
}

.container-form form a:hover{
    color: var(--color-secundario);
}

.container-form form h1{
    font-size: 3.5vw;
    color: var(--color-secundario);
    margin-bottom: 20px;
}

.container-form form h3{
    color: var(--text-color--primario);
    font-size: 1.8vw;
}

.container-form p{
    color: var(--text-color--primario);
}

.btn-form{
    width: 40%;
    height: 60px;
    font-size: 1vw;
    background-color: var(--color-secundario);
    color: var(--text-color--primario);
    border-radius: 5px;
    cursor: pointer;
    border: 0;
    transition: color 0.2s ease-in-out, background-color 0.2s ease-in;
}

.btn-form:hover{
    background-color: var(--text-color--primario);
    color: var(--text-color--secundario);
}

/*REGISTRO*/

.container-form-registro{
    width: 100%;
    display: flex;
    align-content: center;
    justify-content: center;
}

.container-form-registro h1{
    color: var(--text-color--primario);
    font-size: 1.8vw;
    margin-bottom: 30px;
}

.container-form-registro form{
    height: 80vh;
    width: 30vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: var(--color-primario);
    border-radius: 15px;
    gap: 20px;
}

.container-form-registro a{
    color: var(--text-color--primario);
    font-size: 0.8vw;
    transition: color 0.2s ease-in;
}

.container-form-registro a:hover{
    color: var(--color-secundario);
}
</style>