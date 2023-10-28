<?php

include 'conexion_be.php';


//INSERTAMOS LOS DATOS DEL USUARIO EN VARIABLES
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Procesar la imagen cargada
$nombre_archivo = $_FILES['foto']['name']; // Obtener el nombre del archivo
$ruta_temporal = $_FILES['foto']['tmp_name']; // Obtener la ruta temporal del archivo

// Mover la imagen a la carpeta "images"
$directorio_destino = "images"; // Ruta donde se guardará la imagen
$ruta_destino = $directorio_destino . $nombre_archivo; // Ruta completa de destino




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


    if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
        // La imagen se movió correctamente, ahora puedes realizar la inserción en la base de datos
        $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena, foto)
                VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena', '$nombre_archivo')";
    
            $ejecutar = mysqli_query($conexion, $query);
            

            if ($ejecutar) {
    $nombre_archivo = mysqli_insert_id($conexion);
    $_SESSION['foto'] = $nombre_archivo;
    // Redirige al usuario a la página de perfil
    header('Location: perfil.php');
}

            
            if ($ejecutar) {
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

    }
    


mysqli_close($conexion);

?>
