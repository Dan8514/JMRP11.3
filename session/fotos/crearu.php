<?php
session_start();
if ( $_SESSION['tipo']==1){
include '../conexi.php';
$activo=true;
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$ape = $_POST['ape'];
$usuario = $_POST['usuario'];
$query0 = "SELECT * FROM usuario WHERE usuario='$usuario'";
$resultado0 = mysqli_query($connection,$query0);
if(mysqli_num_rows($resultado0)>0){
    echo "<script>alert('El nombre de usuario ya existe');window.history.go(-1);</script>";
}
$clave = $_POST['clave'];
$clave2 = $_POST['clave2'];
if ($clave !== $clave2){
    echo "<script>alert('Las contraseñas no coinciden');window.history.go(-1);</script>";
}
$hash = password_hash($clave, PASSWORD_DEFAULT);
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$documento = $_POST['documento'];
$tp = $_POST['tipo'];
$tipo = (Int)$tp;
$whatsapp = $_POST['whatsapp'];
$revisar = getimagesize($_FILES["image"]["tmp_name"]);
if($revisar !== false){
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));

}else{
    echo "<script> alert('Imagen no válida');</script>";
}
   $query = "INSERT INTO usuario(documento, nombre, ape, correo, whatsapp, usuario, password_hash, tipo, activo, foto, grado, grupo) 
    VALUES('$documento', '$nombre', '$ape', '$correo', '$whatsapp', '$usuario', '$hash', '$tipo', '$activo','$imgContenido', '$grado', '$grupo');";
    $resultado = mysqli_query($connection,$query);
    if(!empty($resultado)){
        echo "<script> window.location.href='usuarios.php';</script>";  
    }else{
        echo "<script> alert('No se guardó');</script>";
    }
    $connection -> close();
}
else{
echo "<script> window.location.href='../index.php';</script>";
}  
?>