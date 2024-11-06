<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/logo-no-background.png">
        <link rel="stylesheet" href="../assets/css/main-style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <title>Ecogestion</title>
    </head>
    
    <body>
        <header>
            <div class="header-wrapper">
                <div class="login" id="login-php">
                    <h3 class="bienvenida">Bienvenido,ㅤ<span><?php echo $_SESSION['usuario'];?>!</span></h3>
                    <!-- Button trigger modal -->
                    <h4> <a class="logout" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class='bx bx-log-out'></i>ㅤCerrar sesión</a></h4>
                </div>

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

                <div class="logo">
                    <a href="index.html">
                        <img src="../assets/img/logo-no-background.png" alt="Ecogesion">
                    </a>
                </div>

                <div class="nav" id="left-menu-php">
                    <nav>
                        <span><i id="x-php" class='bx bx-left-arrow-alt' onclick="cerrarMenuPhp()"></i></span>
                        <ul class="nav-links">
                            <li><i class='bx bxs-home' id="home-php"></i><a href="../php/index.php">Inicio</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-book-reader' id="book-php"></i><a href="../php/index.php#fondo-who">¿Quiénes Somos?</a></li>
                            <hr class="linea">
                            <li id="beneficios"><i class='bx bxs-medal' id="medal-php"></i><a href="../php/perfil.php#beneficios">Recompensas</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-star' id="star-php"></i><a href="../php/index.php#fondo-serv">¿Qué ofrecemos?</a></li>
                            <hr class="linea">
                            <li><i class='bx bxs-message-detail' id="message-php"></i><a href="../php/foro.php">Foro</a></li>
                            <hr class="linea">
                        </ul>
                    </nav>
                </div>
                <span id="barras-php" onclick="abrirMenuPhp()"><i class='bx bx-menu'></i></span>
            </div>
        </header>

        <div class="banner-wrapper" id="fondo-main">
            <div class="banner">
                <h1>¿Qué tirar en cada contenedor?</h1>
                <div class="doble-btn btn1">
                    <button id="mapa-ancla">Mapa de reciclaje</button>
                    <button id="guia-ancla">Guía de reciclaje</button>
                </div>
            </div>
        </div>
        
        <div class="main-wrapper">
            <div class="main-text">
                <h1>Lorem ipsum dolor <br> Lorem ipsum dolor <br> Lorem ipsum dolor <br> Lorem ipsum dolor</h1>
            </div>
            <div class="main-foto">
                <img src="../assets/img/reciclaje-main.png" alt="Persona reciclando">
            </div>
        </div>

        <!--Fin del home-->
        <!--Comienzo de Quienes somos-->

        <div class="who-banner-wrapper">
            <div class="who-banner" id="fondo-who">
                <!--Aqui va el banner-->
            </div>
        </div>

        <div class="who-tittle">
            <h1>¿Quiénes somos?</h1>
        </div>

        <div class="main-who-wrapper">
            <div class="foto-text">
                <img src="css/img/foto who 1.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="foto-tilines">
                <img src="../assets/img/fotomokup.png" alt="Foto de los tilines">
            </div>
        </div>

        <!--Fin Quienes Somos-->

        <!--Comienzo Nuestros servicios-->

            <div class="services-wrapper">
                <div class="services-banner" id="fondo-serv">
                    <!--Aqui va el banner-->
                </div>
            </div>
            
            <div class="service-title">
                <h1>¿Qué ofrecemos?</h1>
            </div>
            
            <div class="options-wrapper">
                <div class="frames">
                    <div class="img-option-serv">
                        <img src="../assets/img/frame-1.jpg" alt="guia">
                    </div>
                    <div class="btn-option" id="guia-ancla2">
                        <button>Guía de reciclaje</button>
                    </div>
                </div>
                
                <div class="frames">
                    <div class="img-option-serv">
                        <img src="../assets/img/frame-2.jpg" alt="mapa" class="img-size">
                    </div>
                    <div class="btn-option" id="mapa-ancla2">
                        <button>Mapa</button>
                    </div>
                </div>
                
                <div class="frames">
                    <div class="img-option-serv">
                        <img src="../assets/img/frame-3.jpg" alt="foro">
                    </div>
                    <div class="btn-option">
                        <a href="foro.php"><button>Foro</button></a>
                    </div>
                </div>
                
                <div class="frames">
                    <div class="img-option-serv">
                        <img src="../assets/img/frame-4.jpg" alt="recompensas">
                    </div>
                    <div class="btn-option">
                        <a href="perfil.php#recompensas"><button>Recompensas</button></a>
                    </div>
                </div>
            </div>
            
            <!--Fin de Nuestros Servicios-->

        <!--Comienzo de Guias de clasificacion-->

        <div class="guia-wrapper">
            <div class="guia-banner" id="fondo-guia">
                <!--Aqui va el banner-->
            </div>
        </div>

        <div class="guia-tittle">
            <h1>Guía de reciclaje</h1>
        </div>
    
        <div class="main-guia-wrapper">
            <div class="texto-izquierda">
                <h4>¿Qué encontraras aqui?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            </div>
    
            <div class="recicle-wrapper">
                <div class="options-line">
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/Dalle-icono-botella-plastico-paint.png" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalPlastico">Plásticos</button>
                        </div>
                    </div>
    
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/Dalle-icono-botella-vidrio-paint.png" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalVidrio">Vidrio</button>
                        </div>
                    </div>
    
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/Dalle-icono-papel2.png" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalPapel">Papel</button>
                        </div>
                    </div>
    
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/Dalle-icono-lata-paint.png" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalLatas">Latas</button>
                        </div>
                    </div>
    
                </div>
    
                <div class="options-line">
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/Dalle-icono-organico-paint.bmp" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalOrganicos">Organicos</button>
                        </div>
                    </div>
    
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/icono-caja-final.png" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalCarton">Cartón</button>
                        </div>
                    </div>
    
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/icono-electronico.png" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalElectronicos">Electrónicos</button>
                        </div>
                    </div>
    
                    <div class="img-option">
                        <img src="../assets/img/guia-clasificacion-icons/icono-ropa.png" alt="">
                        <div class="riclaje-btn">
                            <button id="boton-popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModalTextil">Textil</button>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    
        <!--Fin de Guia de reciclaje-->
        
        <!--Comienzo de Mapa-->

        <div class="mapa-banner-wrapper">
            <div class="mapa-banner" id="fondo-mapa">
                <!--Aqui va el banner-->
            </div>
        </div>

        <div class="tittle-mapa">
            <h1>Mapa de reciclaje</h1>
        </div>

        <div class="main-mapa-wrapper">
            <div class="texto-mapa">
                <h4>¿Qué encontraras aqui?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
            </div>
            
            <div class="google-maps">
                <iframe src="https://puntoslimpios.mma.gob.cl"></iframe>
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
                                    <li> <box-icon name="user"></box-icon> <a href="#">Iniciar sesión</a> </li>
                                    <li> <box-icon name="user-plus"></box-icon> <a href="#">Registrarse</a></li>
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



<script src="../assets/js/main-script.js"></script>