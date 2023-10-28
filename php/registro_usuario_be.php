<?php
include 'conexion_be.php';
//INSERTAMOS LOS DATOS DEL USUARIO EN VARIABLES
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Procesar la imagen cargada
$nombre_archivo = $_FILES['imagen']['name']; // Obtener el nombre del archivo
$img_tmp = $_FILES['imagen']['tmp_name']; // Obtener la ruta temporal del archivo
$img_peso = $_FILES['imagen']['size'];
$img_ruta = "assets/imagenes_usuario/$nombre_archivo";
$ruta_mover = "../assets/imagenes_usuario/$nombre_archivo";





//VERIFICAMOS QUE EL CORREO NO SE REPITA
$verificar_correo = mysqli_query
($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro.");
            window.location = "../php/login.php";
        </script>
    ';
    exit();
}
//VERIFICAMOS QUE EL USUARIO NO SE REPITA
$verificar_usuario = mysqli_query
($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
        alert("Este usuario ya esta registrado, intenta con otro.");
        window.location = "../php/login.php";
        </script>
        ';
        exit();
    }



    
    // La imagen se movió correctamente, ahora puedes realizar la inserción en la base de datos
    $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena, nombre_img, ruta, peso)
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena', '$nombre_archivo', '$img_ruta', $img_peso)";

    $res = mysqli_query($conexion, $query);
    
    
    if ($res) {
        move_uploaded_file($img_tmp, $ruta_mover);
        echo '
            <script>
                alert("Usuario registrado exitosamente.");
                window.location = "../php/login.php"
            </script>
            ';
    } else {
        echo '
            <script>
                alert("Hubo un error :(, Inténtelo de nuevo.");
                window.location = "../php/login.php"
            </script>
            ';
    }
    
mysqli_close($conexion);
?>
