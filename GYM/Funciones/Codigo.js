document.addEventListener("DOMContentLoaded", () => {
    // Para cargar el navbar
        fetch("./Componentes/navbar.php")
        .then(response => response.text())
        .then(data => {
        document.getElementById("navbar-placeholder").innerHTML = data;
        })
        .catch(error => console.error("Error cargando el navbar:", error));

        // Para cargar el footer
        fetch("./Componentes/footer.html")
        .then(response => response.text())
        .then(data => {
        document.getElementById("footer-placeholder").innerHTML = data;
        })
        .catch(error => console.error("Error cargando el footer:", error));
    // Registro
    document.getElementById("btn-form-registro").addEventListener("click", (e) => {
        e.preventDefault();
        const data = {
            action: "register",
            usuario: document.getElementById("id-UserR").value,
            nombres: document.getElementById("nombres-UserR").value,
            correo: document.getElementById("Correo-UserR").value,
            fecha: document.getElementById("fecha-UserR").value,
            password: document.getElementById("pass-UserR").value,
        };

        fetch("./Controlador/UsuarioController.php", { 
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(data),
        })
        .then(res => res.json())
        .then(response => {
            alert(response.message);
            if (response.status === "success") window.location.href = "Login.php"; 
        })
        .catch(error => console.error('Error al registrar:', error)); 
    });

    // Login
    document.getElementById("btn-form-login").addEventListener("click", (e) => {
        e.preventDefault();
        const data = {
            action: "login",
            usuario: document.getElementById("user-Login").value,
            password: document.getElementById("pass-login").value,
            mantenerConectado: document.querySelector("input[type='checkbox']").checked,
        };

        fetch("./Controlador/UsuarioController.php", { 
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams(data),
        })
        .then(res => res.json())
        .then(response => {
            alert(response.message);
            if (response.status === "success") window.location.href = "./Index.php"; 
        })
        .catch(error => console.error('Error al iniciar sesión:', error));  
    });

    fetch("./Controlador/EntrenadoresController.php") 
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                const contenedorEntrenadores = document.querySelector('.container-Entrenadores');  
                contenedorEntrenadores.innerHTML = '';
                data.data.forEach(entrenador => {
                    const div = document.createElement('div');
                    div.classList.add('entrenador');
                    div.innerHTML = `
                        <img src="${entrenador.foto}" alt="${entrenador.nombre}">
                        <div>
                            <h1>${entrenador.nombre}</h1>
                            <p>Altura: ${entrenador.altura}</p>
                            <p>Edad: ${entrenador.edad}</p>
                            <p>Descripción: ${entrenador.descripcion}</p>
                            <p>Origen: ${entrenador.origen}</p>
                        </div>
                    `;
                    contenedorEntrenadores.appendChild(div);
                });
            } else {
                console.error(data.message);
            }
    })
    .catch(error => console.error('Error al cargar entrenadores:', error));

    const menuSelector = document.querySelector('.menu-selector');
    const contenido = document.querySelector('.contenido-n');

    // Función para cargar un artículo por ID
    function cargarArticulo(id) {
        fetch(`./Controlador/getArticulos.php?id=${id}`)
            .then(response => response.json())
            .then(articulo => {
                if (articulo) {
                    contenido.innerHTML = `
                        <h1>${articulo.titulo}</h1>
                        <div class="articulo">
                            <img src="${articulo.imagen}" alt="${articulo.titulo}">
                            <p>${articulo.contenido}</p>
                        </div>
                    `;
                }
            })
            .catch(error => console.error("Error al cargar el artículo:", error));
    }

    // Obtener los artículos del servidor
    fetch('./Controlador/getArticulos.php')
        .then(response => response.json())
        .then(articulos => {

            articulos.forEach(articulo => {
                const enlace = document.createElement('a');
                enlace.href = "#";
                enlace.classList.add('tema');
                enlace.innerHTML = `
                    <img src="${articulo.imagen}" alt="${articulo.titulo}">
                    <h2>${articulo.titulo}</h2>
                `;

              
                enlace.addEventListener('click', function(event) {
                    event.preventDefault();  
                    cargarArticulo(articulo.id);
                });

                menuSelector.appendChild(enlace);
            });

            if (articulos.length > 0) {
                cargarArticulo(articulos[0].id);
            }
        })
        .catch(error => console.error("Error al cargar los artículos:", error));
    
    const userLogeado = document.getElementById("user-logeado");
    const userContainer = document.querySelector(".User");
    const logoutBtn = document.getElementById("Cerrar");

    const username = localStorage.getItem("username");

    if (username) {
        userLogeado.textContent = username;
        userContainer.style.display = "flex";
    } else {
        userContainer.style.display = "none";
    }

    logoutBtn.addEventListener("click", () => {
        localStorage.removeItem("username");
        window.location.href = "./Vistas/Login.php"; 
    });
});
