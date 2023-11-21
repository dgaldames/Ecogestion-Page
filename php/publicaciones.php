<?php

include 'conexion_be.php';
session_start();

?>

<?php

if(isset($_POST['publicar'])){

    $idusuario = $_SESSION['idusuario'];
    $contenido = $_POST['contenido'];

    $query = "INSERT INTO publicacioness (idusuario, contenido)
            VALUES('$idusuario', '$contenido')";

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

