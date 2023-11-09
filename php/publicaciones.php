<?php

include 'conexion_be.php';
session_start();

?>

<?php

if(isset($_POST['publicar'])){

    $usuario = $_POST['usuario'];
    $contenido = $_POST['contenido'];

    $query = "INSERT INTO publicaciones (usuario, contenido)
            VALUES('$usuario', '$contenido')";

    $res = mysqli_query($conexion, $query);

    if ($res) {
        echo '
            <script>
                window.location = "../php/foro.php"
            </script>
            ';
    }else{
        echo '
            <script>
                alert("Hubo un error :(, Inténtelo de nuevo.")
                window.location = "../php/foro.php"
            </script>
            ';
    }


}
?>

