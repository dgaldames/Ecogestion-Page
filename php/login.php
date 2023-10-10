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
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="/Ecogestion-Page/assets/css/login.css">
<title>Login</title>
</head>

<body>

    <header>
        <div class home="header-wrapper">
            <div class="login">
                <a href="login.php"><h3>Inicio Sesión / Registrarse</h3></a>
            </div>

            <div class="logo">
                <a href="/Ecogestion-page/src/index.html">
                    <img src="/Ecogestion-page/assets/css/img/logo-no-background.png" alt="Ecogesion">
                </a>
            </div>

            <div class="nav">
                <nav>
                    <ul class="nav-links">
                        <li><a href="/Ecogestion-page/src/index.html">Inicio</a></li>
                        <li><a href="/Ecogestion-page/src/index.html#fondo-who">¿Quiénes Somos?</a></li>
                        <li><a href="/Ecogestion-page/src/perfil.html#beneficios">Recompensas</a></li>
                        <li><a href="/Ecogestion-page/src/index.html#fondo-serv">¿Qué ofrecemos?</a></li>
                        <li><a href="/Ecogestion-page/src/foro.html">Foro</a></li>
                    </ul>
                </nav>
            </div>
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
                <form action="/Ecogestion-page/php/registro_usuario_be.php" method="POST" class="formulario-signup">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>

        </div>
    </main>

    <script src="/Ecogestion-page/assets/js/login.js"></script>

</body>
</html>