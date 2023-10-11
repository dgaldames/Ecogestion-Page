<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Ecogestion-page/assets/css/main-style.css">
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
                <div class="login">
                    <h3 class="bienvenida">Bienvenido,ㅤ<span><?php echo $_SESSION['usuario'];?>!</span></h3>
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

                <div class="logo">
                    <a href="index.html">
                        <img src="/Ecogestion-page/assets/css/img/logo-no-background.png" alt="Ecogesion">
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
                <h1>Recicla con nuestra <br> ayuda porque con <br> ecogestion tu reciclaje <br> va como avión</h1>
            </div>
            <div class="main-foto">
                <img src="/Ecogestion-Page/assets/css/img/reciclaje main.png" alt="Persona reciclando">
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita debitis eius nulla autem eaque. Optio unde debitis, dolores veritatis nemo ipsum minus. Repellat ut dicta dignissimos eligendi maiores, molestias fuga.</p>
            </div>
            <div class="foto-tilines">
                <img src="/Ecogestion-Page/assets/css/img/foto-tilines.png" alt="Foto de los tilines">
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
                        <img src="/Ecogestion-page/assets/css/img/frame 1.jpg" alt="guia">
                    </div>
                    <div class="btn-option" id="guia-ancla2">
                        <button>Guía de reciclaje</button>
                    </div>
                </div>
                
                <div class="frames">
                    <div class="img-option-serv">
                        <img src="/Ecogestion-page/assets/css/img/frame 2.jpg" alt="mapa" class="img-size">
                    </div>
                    <div class="btn-option" id="mapa-ancla2">
                        <button>Mapa</button>
                    </div>
                </div>
                
                <div class="frames">
                    <div class="img-option-serv">
                        <img src="/Ecogestion-page/assets/css/img/frame 3.jpg" alt="foro">
                    </div>
                    <div class="btn-option">
                        <a href="foro.html"><button>Foro</button></a>
                    </div>
                </div>
                
                <div class="frames">
                    <div class="img-option-serv">
                        <img src="/Ecogestion-page/assets/css/img/frame 4.jpg" alt="recompensas">
                    </div>
                    <div class="btn-option">
                        <a href="perfil.html#beneficios"><button>Recompensas</button></a>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt omnis ipsum delectus dicta itaque, minus rem optio cupiditate necessitatibus tempora repellat et, earum veritatis voluptatem non quam harum provident modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur provident ipsam ex fugit tempore impedit. Reiciendis deserunt fugiat, ratione eos expedita optio aspernatur fugit dolore aut id iure aliquid totam.</p>
            </div>

            <div class="recicle-wrapper">
                <div class="options-line">
                    <div class="img-option">
                        <img src="/Ecogestion-page/assets/css/img/guia clasificacion icons/Dalle-icono-botella-plastico-paint.png" alt="">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalPlastico">Plásticos</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalPlastico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Plástico
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="img-option">
                        <img src="/Ecogestion-page/assets/css/img/guia clasificacion icons/Dalle-icono-botella-vidrio-paint.png" alt="">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalVidrio">Vidrio</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalVidrio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Vidrio
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="img-option">
                        <img src="/Ecogestion-page/assets/css/img/guia clasificacion icons/Dalle-icono-papel2.png" alt="">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalPapel">Papel</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalPapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Papel
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="img-option">
                        <img src="/Ecogestion-Page/assets/css/img/guia clasificacion icons/Dalle-icono-lata-paint.png" alt="">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalLatas">Latas</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalLatas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Latas
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>

                <div class="options-line">
                    <div class="img-option">
                        <img src="/Ecogestion-Page/assets/css/img/guia clasificacion icons/Dalle-icono-organico-paint.bmp">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalOrganicos">Orgánicos</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalOrganicos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Orgánicos
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="img-option">
                        <img src="/Ecogestion-Page/assets/css/img/guia clasificacion icons/icono-caja-final.png" alt="">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalCarton">Cartón</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalCarton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Cartón
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="img-option">
                        <img src="/Ecogestion-Page/assets/css/img/guia clasificacion icons/icono-electronico.png" alt="">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalElectronicos">Electrónicos</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalElectronicos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Electrónicos
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="img-option">
                        <img src="/Ecogestion-Page/assets/css/img/guia clasificacion icons/icono-ropa.png" alt="">
                        <div class="riclaje-btn">
                            <button data-bs-toggle="modal" data-bs-target="#exampleModalTextil">Textil</button>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalTextil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Textil
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae a aut cum et, quisquam quis, tempore eveniet eum explicabo repellat dolorum mollitia reprehenderit ut dolore facilis dignissimos esse. Illum, porro? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum exercitationem repudiandae hic ipsa aut. Doloremque saepe illum asperiores, reiciendis accusantium libero fuga ipsa, earum accusamus praesentium alias rerum culpa quo.</p>
            </div>
            
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212998.56777100364!2d-70.7946386810924!3d-33.47267890100095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5410425af2f%3A0x8475d53c400f0931!2sSantiago%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1693514406788!5m2!1ses!2scl" width="1020" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                    <li> <box-icon name="user"></box-icon> <a href="/Ecogestion-Page/php/login.php">Iniciar sesión</a> </li>
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



<script src="/Ecogestion-Page/assets/js/main-script.js"></script>