<?php
session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena' ");

if (mysqli_num_rows($validar_login) > 0) {
    $fila = mysqli_fetch_assoc($validar_login);

    $_SESSION['usuario'] = $fila['usuario']; // Almacena el nombre de usuario en la sesión

    header("Location: ./index.php");
    exit;

}else{
    echo '
        <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../php/login.php";
        </script>
    ';
    exit;
}
?>
