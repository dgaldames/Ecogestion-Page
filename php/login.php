<?php

/* session_start();

if (isset($_SESSION['usuario'])) {
    header("location: home.html");
} */



// CREO QUE SI TENGO ESTO NO ME DEJA IR AL APARTADO DE INICIAR SESION DE NUEVO
?>




<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="../assets/img/logo-no-background.png">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/css/login.css">
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<title>Login</title>
</head>

<body>

    <header>
        <div class home="header-wrapper">

            <div class="logo">
                <a href="/Ecogestion-page/src/index.html">
                    <img src="../assets/img/logo-no-background.png" alt="Ecogesion">
                </a>
            </div>

            <div class="nav" id="left-menu-login">
                    <nav>
                        <span><i id="x-login" class='bx bx-left-arrow-alt' onclick="cerrarMenuLogin()"></i></span>
                        <ul class="nav-links">
                            <li><i class='bx bxs-home' id="home-login"></i><a href="../src/index.html" class="verde">Inicio</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-book-reader' id="book-login"></i><a href="../src/index.html#fondo-who" class="verde">¿Quiénes Somos?</a></li>
                            <hr class="linea">
                            <li id="beneficios"><i class='bx bxs-medal' id="medal-login"></i><a class="verde">Recompensas</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-star' id="star-login"></i><a href="../src/index.html#fondo-serv" class="verde">¿Qué ofrecemos?</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-message-detail' id="message-login"></i><a class="verde">Foro</a></li>
                            <hr class="linea">
                        </ul>
                    </nav>
                </div>
                <span id="barras-login" onclick="abrirMenuLogin()"><i class='bx bx-menu'></i></span>
        </div>
    </header>

    <main>

        <div class="contenerdor-todo">

            <div class="caja-trasera">
                <div class="caja-trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn-login">Iniciar sesión</button>
                </div>
                <div class="caja-trasera-signup">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para entrar en la página</p>
                    <button id="btn-signup">Registrarse</button>
                </div>
            </div>
            <!--Formulario login register-->
            <div class="contenedor-login-signup">

            <!--Formulario Login-->

                <form action="./login_usuario_be.php" method="POST" class="formulario-login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
            <!--Formulario Register-->
            <form action="./registro_usuario_be.php" method="POST" class="formulario-signup" enctype="multipart/form-data">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                <input type="email" placeholder="Correo Electronico" name="correo" required>
                <input type="text" placeholder="Usuario" name="usuario" required>
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                
                <!-- Input de tipo file oculto -->
                <input type="file" name="imagen" id="fileInput"/>

                <!-- Contenedor que simula un botón y muestra el nombre del archivo seleccionado -->
                <label for="fileInput" class="custom-file-upload">
                Subir imagen
                    <span class="file-name"></span>
                </label>
                <button type="submit">Registrarse</button>
            </form>
            </div>

        </div>
    </main>
    
</body>
</html>

    <script src="../assets/js/login.js"></script>