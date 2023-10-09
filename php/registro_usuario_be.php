<?php

include 'conexion_be.php';


//INSERTAMOS LOS DATOS DEL USUARIO EN VARIABLES
$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


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

//VERIFICAMOS QUE EL CORREO INTRODUCIDO SEA UN CORREO VALIDO


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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // Inicializa el array de errores
        $errores = [];
    
        // Verifica si algún campo está en blanco
        if (empty($nombre_completo)) {
            $errores[] = "El campo Nombre Completo es obligatorio.";
            echo '
                <script>
                    alert("El campo Nombre Completo es obligatorio.")
                    window.location = "../php/login.php"
                </script>
            ';
        }
    
        if (empty($correo)) {
            $errores[] = "El campo de Correo es obligatorio.";
            echo '
                <script>
                    alert("El campo Correo es obligatorio.")
                    window.location = "../php/login.php"
                </script>
            ';
        }
    
        if (empty($usuario)) {
            $errores[] = "El campo de Usuario es obligatorio.";
            echo '
                <script>
                    alert("El campo Usuario es obligatorio.")
                    window.location = "../php/login.php"
                </script>
            ';
        }
    
        if (empty($contrasena)) {
            $errores[] = "El campo de Contraseña es obligatorio.";
            echo '
                <script>
                    alert("El campo Contraseña es obligatorio.")
                    window.location = "../php/login.php"
                </script>
            ';
        }
    
        // Verifica si el correo electrónico tiene un formato válido
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El correo electrónico ingresado no es válido.";
            echo '
                <script>
                    alert("El correo electronico ingresado no es válido.")
                    window.location = "../php/login.php"
                </script>
            ';
        }
    
        // Si no hay errores, procede con el registro
        if (empty($errores)) {
            // Realiza la inserción en la base de datos
            $query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
            $ejecutar = mysqli_query($conexion, $query);
            
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
            } else {
            // Mostrar los mensajes de error
            foreach ($errores as $error) {
                echo "<script>alert('$error');</script>";
            }
        }
    }
    


mysqli_close($conexion);

?>
