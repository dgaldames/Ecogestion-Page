<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ecogestion-page/assets/css/perfil.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>

<body>

    <header>
        <div class home="header-wrapper">
            <div class="login">
                <h3>Bienvenido, <span><?php echo $_SESSION['usuario'];?>!</span></h3>
                    <!-- Button trigger modal -->
                    <h4> <a class="logout" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-log-out'></i> Cerrar sesión</a></h4>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Sesión Finalizada</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h2><span>Cierre de sesión exitoso</span></h2>
                                    <h2><span class="smaller-text">Hasta la próxima <i class='bx bx-wink-smile'></i></span></h2>
                                </div>
                                <div class="modal-footer">
                                    <a href="cerrar_sesion.php" type="button" class="btn btn-primary" id="entendido">Entendido</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

            <div class="logo">
                <a href="index.html">
                <img src="/Ecogestion-Page/assets/css/img/logo-no-background.png" alt="Ecogestion"">
                </a>
            </div>

            <div class="nav">
                <nav>
                    <ul class="nav-links">
                        <li><a href="/Ecogestion-page/php/index.php">Inicio</a></li>
                        <li><a href="/Ecogestion-page/php/index.php#fondo-who">¿Quiénes Somos?</a></li>
                        <li><a href="/Ecogestion-page/php/perfil.php#beneficios">Recompensas</a></li>
                        <li><a href="/Ecogestion-page/php/index.php#fondo-serv">¿Qué ofrecemos?</a></li>
                        <li><a href="/Ecogestion-page/php/foro.php">Foro</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="bienvenida-usuario">
        <img src="/Ecogestion-Page/assets/css/img/foto tilines.png" alt="Foto usuario" width="150px">
        <h1>Hola, <span><?php echo $_SESSION['usuario'];?>!</span></h1>
    </div>

    <div class="x-puntos">
        <h3>Tienes X puntos</h3>
    </div>

    <div class="pregunta">
        <h5>¿Qué deseas canjear hoy?</h5>
    </div>

    <div class="bene-dispo" id="beneficios">
        <h2>Beneficios Disponibles</h2>
    </div>

        <div class="primeros-cupones">

            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Show a second modal and hide this one with the button below.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Hide this modal and show the first with the button below.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" id="btn-250" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cupones por 250 pts</button>

            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Show a second modal and hide this one with the button below.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Hide this modal and show the first with the button below.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" id="btn-500" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cupones por 500 pts</button>
        </div>

    <div class="segundos-cupones">
        
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Show a second modal and hide this one with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                    </div>
                </div>
            </div>
        </div>
            <button class="btn btn-primary" id="btn-750" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cupones por 750 pts</button>

        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Show a second modal and hide this one with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" id="btn-1000" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Cupones por 1000 pts</button>

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
                            <li> <box-icon name="envelope"></box-icon> Ecogestion@gmail.com </li>
                            <li> <box-icon name="phone"></box-icon> +569 12345678 </li>
                            <li> <box-icon name="map"></box-icon> <a href="">Viel 3414</a></li>
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