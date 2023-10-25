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
<link rel="icon" type="image/png" href="/Ecogestion-page/assets/css/img/logo-no-background.png">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="/Ecogestion-Page/assets/css/login.css">
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<title>Login</title>
</head>

<body>

    <header>
        <div class home="header-wrapper">

            <div class="logo">
                <a href="/Ecogestion-page/src/index.html">
                    <img src="/Ecogestion-page/assets/css/img/logo-no-background.png" alt="Ecogesion">
                </a>
            </div>

            <div class="nav" id="left-menu-login">
                    <nav>
                        <span><i id="x-login" class='bx bx-left-arrow-alt' onclick="cerrarMenuLogin()"></i></span>
                        <ul class="nav-links">
                            <li><i class='bx bxs-home' id="home-login"></i><a href="/Ecogestion-Page/src/index.html">Inicio</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-book-reader' id="book-login"></i><a href="/Ecogestion-Page/src/index.html#fondo-who">¿Quiénes Somos?</a></li>
                            <hr class="linea">
                            <li id="beneficios"><i class='bx bxs-medal' id="medal-login"></i><a href="/Ecogestion-Page/src/perfil.html#beneficios">Recompensas</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-star' id="star-login"></i><a href="/Ecogestion-Page/src/index.html#fondo-serv">¿Qué ofrecemos?</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-message-detail' id="message-login"></i><a href="/Ecogestion-Page/src/foro.html">Foro</a></li>
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

                <form action="/Ecogestion-page/php/login_usuario_be.php" method="POST" class="formulario-login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
            <!--Formulario Register-->
                <form action="/Ecogestion-page/php/registro_usuario_be.php" method="POST" class="formulario-signup" enctype="multipart/form-data">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button type="button" class="btn-warning">
                        <i class='bx bx-upload'></i> Subir foto
                        <input type="file">
                    </button>
                    <button>Registrarse</button>
                </form>
            </div>

        </div>
    </main>
    
</body>
</html>

    <script src="/Ecogestion-page/assets/js/login.js"></script>