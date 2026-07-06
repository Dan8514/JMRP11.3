<?php
session_start();
if($_SESSION['tipo']==1){
    include 'conexi.php';
    $activo = true;
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $ape = $_POST['ape'];
    $usuario = $_POST['usuario'];

    $query0 = "SELECT * FROM usuario WHERE usuario='$usuario'";
    $resultado0 = mysqli_query($connection, $query0);
    if(mysqli_num_rows($resultado0) > 0){
        echo "<script>alert('El nombre de usuario ya existe');window.history.go(-1);</script>";
        exit();
    }

    $clave = $_POST['clave'];
    $clave2 = $_POST['clave2'];
    if($clave !== $clave2){
        echo "<script>alert('Las contraseñas no coinciden');window.history.go(-1);</script>";
        exit();
    }

    $hash = password_hash($clave, PASSWORD_DEFAULT);
    $grado = $_POST['grado'];
    $grupo = $_POST['grupo'];
    $documento = $_POST['documento'];
    $tipo = (int)$_POST['tipo'];
    $whatsapp = $_POST['whatsapp'];

    if(isset($_FILES["image"]) && $_FILES["image"]["error"] === 0){
        $revisar = getimagesize($_FILES["image"]["tmp_name"]);
        if($revisar !== false){
            $imgContenido = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        } else {
            echo "<script>alert('Imagen no válida');window.history.go(-1);</script>";
            exit();
        }
    } else {
        $svgDefault = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">'
                    . '<circle cx="50" cy="35" r="25" fill="#aaa"/>'
                    . '<ellipse cx="50" cy="90" rx="35" ry="25" fill="#aaa"/>'
                    . '</svg>';
        $imgContenido = addslashes($svgDefault);
    }

    $query = "INSERT INTO usuario(documento, nombre, ape, correo, whatsapp, usuario, password_hash, tipo, activo, foto, grado, grupo) 
        VALUES('$documento', '$nombre', '$ape', '$correo', '$whatsapp', '$usuario', '$hash', '$tipo', '$activo', '$imgContenido', '$grado', '$grupo')";
    
    $resultado = mysqli_query($connection, $query);
    if($resultado){
        echo "<script>window.location.href='usuarios.php';</script>";
    } else {
        $error = mysqli_error($connection);
        echo "<script>alert(" . json_encode("Error: " . $error) . ");</script>";
    }

    $connection->close();
} else {
    echo "<script>window.location.href='index.php';</script>";
}
?>