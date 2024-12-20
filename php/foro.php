<?php

session_start();
include 'conexion_be.php';

$nombre_usuario = $_SESSION['usuario'];
$query = "SELECT * FROM usuarios WHERE usuario = '$nombre_usuario'";
$res = mysqli_query($conexion, $query);
$row_usuario = mysqli_fetch_assoc($res);

if ($row_usuario) {
    $nombre_img = $row_usuario['nombre_img'];
    $ruta = $row_usuario['ruta'];
    $peso = $row_usuario['peso'];
}else{
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/foro.css">
    <link rel="icon" type="image/png" href="../assets/img/logo-no-background.png">
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
                    <img src="../assets/img/logo-no-background.png" alt="Ecogesion">
                </a>
            </div>

            <div class="nav" id="left-menu-php-foro">
                <nav>
                    <span><i id="x-php-foro" class='bx bx-left-arrow-alt' onclick="cerrarMenuForoPhp()"></i></span>
                    <ul class="nav-links">
                        <li><i class='bx bxs-home' id="home-php-foro"></i><a href="../php/index.php">Inicio</a></li>
                        <hr class="linea">
                        <li><i class='bx bxs-book-reader' id="book-php-foro"></i><a href="../php/index.php#fondo-who">¿Quiénes Somos?</a></li>
                        <hr class="linea">
                        <li id="beneficios"><i class='bx bxs-medal' id="medal-php-foro"></i><a href="../php/perfil.php#beneficios">Recompensas</a></li>
                        <hr class="linea">
                        <li><i class='bx bxs-star' id="star-php-foro"></i><a href="../php/index.php#fondo-serv">¿Qué ofrecemos?</a></li>
                        <hr class="linea">
                        <li><i class='bx bxs-message-detail' id="message-php-foro"></i><a href="../php/foro.php">Foro</a></li>
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
                <img class="img-user" src="../<?php echo $ruta ?>" alt="Foto de perfil">
            </div>
            <div class="name-user">
                <h4><?= $_SESSION['usuario'] ?></h4>
            </div>
        </div>

        <div class="foro-pregunta-wrapper">
            <div class="pregunta-title">
                <h2>¿Desea preguntar algo el día de hoy?</h2>
            </div>
            <div class="input-pregunta">
                <form action="../php/publicaciones.php" method="POST">
                    <input type="text" name="contenido" id="pregunta-foro" placeholder="Pregunte sus dudas acá">
                </div>
                <div class="button-enviar">
                    <button id="publicar" type="submit" name="publicar">Enviar</button>
                </div>
                </form>
        </div>
    </div>

    <div class="last-discusiones-title">
        <h2>Ultimas discusiones</h2>
    </div>
    

    <div class="foro-publicaciones-wrapper">
    <?php
    // Recuperar publicaciones existentes
    $query = "SELECT * FROM publicaciones ORDER BY id ASC";
    $result = mysqli_query($conexion, $query);

    while ($row = mysqli_fetch_assoc($result)) :
    ?>

        <div class="foro-publicacion-wrapper">
            <div class="foto-user-name-wrapper">
                <div class="foto-user">
                    <!-- Puedes personalizar la ruta de la imagen del usuario según tu estructura de datos -->
                    <img class="img-user" src="../<?php echo $ruta ?>" alt="Foto de perfil">
                </div>
                <div class="name-user">
                    <h4><?= $_SESSION['usuario'] ?></h4>  <!-- Lo estoy dejando con sesion mientras tanto, la idea es capturar el usuario que lo escribio -->
                </div>
            </div>

            <div class="pregunta-boton-wrapper">
                <div class="foro-pregunta">
                    <h2><?= $row['contenido'] ?></h2>
                </div>
                <div class="button-comentarios">
                    <button>Ver Comentarios</button>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>






<!--     <div class="foro-publicacion-wrapper">
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
            
    </div> -->
        
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
                            <li> <box-icon name="map-alt"></box-icon> <a href="index.php#fondo-mapa">Mapa de reciclaje</a></li>
                            <li> <box-icon name="book-content"></box-icon> <a href="index.php#fondo-guia">Guía de reciclaje</a></li>
                            <li> <box-icon name="smile"></box-icon> <a href="foro.php">Foro</a></li>
                            <li> <box-icon name="trophy"></box-icon> <a href="perfil.php#beneficios">Recompensas</a></li>
                        </ul>
                    </div>
                </div>

                <div class="cuenta-wrapper">
                    <div class="lista-cuenta">
                        <ul>
                            <li> <box-icon name="user"></box-icon> <a href="login.php">Iniciar sesión</a> </li>
                            <li> <box-icon name="user-plus"></box-icon> <a href="login.php">Registrarse</a></li>
                            <li> <box-icon name="star"></box-icon> <a href="perfil.php">Beneficios disponibles</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copi">
                <h4>© 2024 Copyright Ecogestion. <br> Todos los derechos reservados</h4>
            </div>

        </div>

    </footer>

        
    </body>
    </html>

    <script src="../assets/js/foro.js"></script>