<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

if (mysqli_num_rows($validar_login) > 0) {
    header("Location: ../src/index.html");
    $_SESSION['usuario'] = $correo;
    exit;
}else{
    echo '
        <script>

        alert("Usuario no existe, por favor verifique los datos introducidos")
        window.location = "../php/login.php";
        </script>
    ';
    exit;
}


?>