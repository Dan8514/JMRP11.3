<?php
session_start();
if($_SESSION['tipo'] == 1){
    include 'conexi.php';

    $titulo      = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fechan      = $_POST['fecha'];
    $fechac      = $_POST['date2'];
    $horan       = $_POST['hora'];
    $idusu       = $_SESSION["id_usu"];
    $idcat       = $_POST['id_cat'];
    $arch        = false; //arch=archivada
    function procesarImagen($campo){
        if(isset($_FILES[$campo]) && $_FILES[$campo]["error"] === 0){
            $revisar = getimagesize($_FILES[$campo]["tmp_name"]);
            if($revisar !== false){
                return addslashes(file_get_contents($_FILES[$campo]["tmp_name"]));
            } else {
                echo "<script>alert('Imagen en $campo no válida');window.history.go(-1);</script>";
                exit();
            }
        }
        return null; //imagenn't 
    }

    $imgContenido = procesarImagen('image');
    $foto2        = procesarImagen('image2');
    $foto3        = procesarImagen('image3');

    $query = "INSERT INTO noticias(titulo, descripcion, fecha_not, fecha_creada, hora_not, archivada, id_usu, id_cat, foto1, foto2, foto3) 
        VALUES('$titulo', '$descripcion', '$fechan', '$fechac', '$horan', '$arch', '$idusu', '$idcat', '$imgContenido', '$foto2', '$foto3')";

    $resultado = mysqli_query($connection, $query);
    if($resultado){
        echo "<script>window.location.href='crudnoticias.php';</script>";
    } else {
        $error = mysqli_error($connection);
        echo "<script>alert(" . json_encode("Error: " . $error) . ");</script>";
    }

    $connection->close();
} else {
    echo "<script>window.location.href='index.php';</script>";
}
?>