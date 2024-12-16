<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/GYM/">
    <link rel="icon" type="image/x-icon" href="Img/LogoNegro.ico">
    <title>Editar Perfil</title>
</head>
<body>
    <main>
        <div class="Menu-User">
            <h1>DATOS DE USUARIO</h1>
            <div class="Perfil-vista">
                <img id="img-User" src="" alt="">
                <h3 id="Name-Usuario">No User</h3>
                <div>
                    <p>ID: </p>
                    <p id="Id-User">NO ID USER</p>
                </div>
            </div>
            <div class="Datos-personales">
                <div class="ou-datos">
                    <ion-icon name="mail-outline"></ion-icon>
                    <p>Correo Electronico: </p>
                    <p id="email-user">NO EMAIL USER</p>
                </div>
                <div class="ou-datos">
                    <ion-icon name="star-outline"></ion-icon>
                    <p>Cumpleaños: </p>
                    <p id="cumpleaños-user">NO CUMPLEANIOS USER</p>
                </div>
                <div class="ou-datos">
                    <ion-icon name="person-outline"></ion-icon>
                    <p>Edad: </p>
                    <p id="edad-user">NO EDAD USER</p>
                </div>
            </div>
        </div>
        <div class="Vista-Datos">
            <div class="volver">
                <a href="Index.php"> Volver al Inicio</a>
            </div>
            <form class="form-editar" >
                <h1>EDITAR DATOS</h1>
                <div class="imput-datosEdit">
                    <p>Correo: </p>
                    <input id="correo-edit" type="text">
                </div>
                <div class="imput-datosEdit">
                    <p>Fecha Nacimiento: </p>
                    <input id="fNaci-edit" type="text">
                </div>
                <div class="imput-datosEdit">
                    <p>Nombres: </p>
                    <input id="nombre-edit" type="text">
                </div>
                <div class="imput-datosEdit">
                    <p>Usuario: </p>
                    <input id="usuario-edit" type="text">
                </div>
                <button id="editar-user" class="btn-user">Editar</button>
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
    width: 100%;
    height: 100vh;
    background: linear-gradient(to left, 
    rgba(0, 0, 0, 0.8), 
    rgba(70, 70, 70, 0)), 
    url('./Img/encabezado1.jpeg');
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
}

.Menu-User{
    display: flex;
    flex-direction: column;
    background-color:var(--color-extra--dos);
    width: 30vw;
    min-width: 300px;
    height: 100vh;
    align-items: center;
    padding: 50px 10px;
    gap: 15px;
}

.Menu-User h1{
    color: var(--color-secundario);
    font-size: 1.8vw;
}

.Vista-Datos{
    display: flex;
    flex-direction: column;
    background-color: var(--color-primario);
    width: 70vw;
    height: 100vh;
    justify-content: space-evenly;
    align-items: center;
}

.Perfil-vista{
    display: flex;
    flex-direction: column;
    width: 90%;
    align-items: center;
    gap: 20px;
}

.Perfil-vista img{
    width: 15vw;
    height: 25vh;
    border: 10px solid var(--text-color--primario);
    border-radius: 5px;
}

.Perfil-vista h3{
    color: var(--text-color--primario);
    font-size: 1.5vw;
}
.Perfil-vista p{
    color: var(--text-color--primario);
}

.Perfil-vista div{
    display: flex;
}

.Datos-personales{
    display: flex;
    flex-direction: column;
    width: 90%;
    height: 30vh;
    align-items: center;
    padding: 50px 0;
    gap: 20px;
    border: 1px dotted var(--text-color--primario);
}

.ou-datos{
    color: var(--text-color--primario);
    display: flex;
    gap: 15px;
    width: 80%;
    font-size: 0.9vw;
}

.btn-user{
    display: flex;
    width: 10vw;
    height: 5vh;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    gap: 10px;
    font-weight: bold;
    font-size: 0.8vw;
    border-radius: 5px;
    background-color: var(--color-secundario);
    color: var(--text-color--primario);
    border: 0px;
    transition: background-color 0.2s ease-in, color 0.2s ease-in;
    border: 1px solid var(--color-primario);
}

.btn-user:hover{
    background-color: var(--text-color--primario);
    color: var(--text-color--secundario);
}

.volver{
    width: 65vw;
    height: 10vh;
    display: flex;
    justify-content: right;
    align-items: center;
    padding-right: 50px;
    border-radius: 20px;
    background-color: var(--text-color--primario);
}
.volver a{
    color: var(--color-primario);
    font-size: 1vw;
}
.volver a:hover{
    color: var(--color-secundario);
}


.Vista-Datos h1{
    font-size: 2vw;
    margin-bottom: 35px;
    color: var(--color-secundario);
    text-decoration: underline;
}

.Vista-Datos p{
    font-size: 1vw;
    font-weight: bold;
    color: var(--color-primario);
}

.section-1, .section-2{
    height: 40vh;
    width: 65vw;
    border-radius: 20px;
    background-color: var(--text-color--primario);
    display: flex;
    flex-direction: column;
    padding: 50px 30px;
}

.ou-datosI{
    display: flex;
    gap: 15px;
}

.form-editar{
    height: 80vh;
    width: 65vw;
    border-radius: 20px;
    background-color: var(--text-color--primario);
    display: flex;
    flex-direction: column;
    padding: 50px 30px;
    gap: 15px;
}

.imput-datosEdit{
    display: flex;
    gap: 15px;
}

.imput-datosEdit input{
    width: 15vw;
    height: 30px;
}
</style>