<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ecogestion-page/assets/css/foro.css">
    <link rel="icon" type="image/png" href="/Ecogestion-page/assets/img/logo-no-background.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Foro Ecogestion</title>
</head>

<body>
    <header>
        <div class home="header-wrapper">
            <div class="login" id="login-php-foro">
                <h3>Bienvenido,ㅤ<span><?php echo $_SESSION['usuario'];?>!</span></h3>
                    <!-- Button trigger modal -->
                    <h4> <a class="logout" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-log-out'></i> Cerrar sesión</a></h4>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Sesión Finalizada</h1>
                                </div>
                                <div class="modal-body">
                                    <h2><span>Cierre de sesión exitoso</span></h2>
                                    <h2><span class="smaller-text">Hasta la próxima <i class='bx bx-wink-smile'></i></span></h2>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mejor me quedo</button>
                                    <a href="cerrar_sesion.php" type="button" class="btn btn-primary">Entendido</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

            <div class="logo">
                <a href="index.html">
                    <img src="/Ecogestion-Page/assets/img/logo-no-background.png" alt="Ecogesion">
                </a>
            </div>

            <div class="nav" id="left-menu-php-foro">
                <nav>
                    <span><i id="x-php-foro" class='bx bx-left-arrow-alt' onclick="cerrarMenuForoPhp()"></i></span>
                    <ul class="nav-links">
                        <li><i class='bx bxs-home' id="home-php-foro"></i><a href="/Ecogestion-page/php/index.php">Inicio</a></li>
                        <hr class="linea">
                        <li><i class='bx bxs-book-reader' id="book-php-foro"></i><a href="/Ecogestion-page/php/index.php#fondo-who">¿Quiénes Somos?</a></li>
                        <hr class="linea">
                        <li id="beneficios"><i class='bx bxs-medal' id="medal-php-foro"></i><a href="/Ecogestion-page/php/perfil.php#beneficios">Recompensas</a></li>
                        <hr class="linea">
                        <li><i class='bx bxs-star' id="star-php-foro"></i><a href="/Ecogestion-page/php/index.php#fondo-serv">¿Qué ofrecemos?</a></li>
                        <hr class="linea">
                        <li><i class='bx bxs-message-detail' id="message-php-foro"></i><a href="/Ecogestion-page/php/foro.php">Foro</a></li>
                        <hr class="linea">
                    </ul>
                </nav>
            </div>
            <span id="barras-php-foro" onclick="abrirMenuForoPhp()"><i class='bx bx-menu'></i></span>
    </header>

    <div class="banner-wrapper" id="foro-fondo-main">
        <div class="foro-banner">
            <h1>Foro</h1>
        </div>
    </div>

    <div class="foro-title">
        <h2>Aquí podrás interactuar con la comunidad, hacer preguntas y responder</h2>
    </div>

    <div class="foro-publicacion-wrapper">
        <div class="foto-user-name-wrapper">
            <div class="foto-user">
                <img src="/Ecogestion-Page/assets/img/usuario1.png" alt="Foto Usuario">
            </div>
            <div class="name-user">
                <h4>Usuario</h4>
            </div>
        </div>

        <div class="foro-pregunta-wrapper">
            <div class="pregunta-title">
                <h2>¿Desea preguntar algo el día de hoy?</h2>
            </div>
            <div class="input-pregunta">
                <input type="text" name="pregunta" id="pregunta-foro" placeholder="Pregunta aca">
            </div>
            <div class="button-enviar">
                <button>Enviar</button>
            </div>
        </div>
    </div>

    <div class="last-discusiones-title">
        <h2>Ultimas discusiones</h2>
    </div>
    
    
    <div class="foro-publicacion-wrapper">
        <div class="foto-user-name-wrapper">
            <div class="foto-user">
                <img src="/Ecogestion-Page/assets/img/usuario1.png" alt="Foto Usuario">
            </div>
            <div class="name-user">
                <h4>Usuario</h4>
            </div>
        </div>
        
        <div class="pregunta-boton-wrapper">
            <div class="foro-pregunta">
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam similique molestias dicta fugit voluptates eveniet minima.</h2>
            </div>
            <div class="button-comentarios">
                <button>Ver Comentarios</button>
            </div>
        </div>
            
    </div>
        
    <footer class="clase-footer">

        <div class="footer-wrapper">
            <div class="textos">
                <h4>Contacto</h4>
                <h4>Nuestros Servicios</h4>
                <h4>Mi cuenta</h4>
            </div>

            <div class="wraper-footer">
                
                <div class="contacto-wrapper">
                    <div class="lista-contacto">
                        <ul>
                            <li> <box-icon name="envelope"></box-icon><a href="mailto:Ecogestion@gmail.com">Ecogestion@gmail.com</a></li>
                            <li> <box-icon name="phone"></box-icon> <a href="tel:+569 12345678">+569 12345678</a></li>
                            <li> <box-icon name="map"></box-icon> <a href="https://maps.app.goo.gl/zcX4muADG8J8eaTKA" target="_blank">Viel 3414</a></li>
                        </ul>
                    </div>
                </div>

                <div class="lista-wrapper">
                    <div class="lista-servicio">
                        <ul>
                            <li> <box-icon name="map-alt"></box-icon> <a href="#fondo-mapa">Mapa de reciclaje</a></li>
                            <li> <box-icon name="book-content"></box-icon> <a href="#fondo-guia">Guía de reciclaje</a></li>
                            <li> <box-icon name="smile"></box-icon> <a href="foro.html">Foro</a></li>
                            <li> <box-icon name="trophy"></box-icon> <a href="perfil.html#beneficios">Recompensas</a></li>
                        </ul>
                    </div>
                </div>

                <div class="cuenta-wrapper">
                    <div class="lista-cuenta">
                        <ul>
                            <li> <box-icon name="user"></box-icon> <a href="login.html">Iniciar sesión</a> </li>
                            <li> <box-icon name="user-plus"></box-icon> <a href="login.html">Registrarse</a></li>
                            <li> <box-icon name="star"></box-icon> <a href="perfil.html">Beneficios disponibles</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copi">
                <h4>© 2023 Copyright Ecogestion. <br> Todos los derechos reservados</h4>
            </div>

        </div>

    </footer>

        
    </body>
    </html>

    <script src="/Ecogestion-page/assets/js/foro.js"></script>