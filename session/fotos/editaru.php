<?php
session_start();
if ( $_SESSION['tipo']==1){
include '../conexi.php' ;
$id="";
$id2="";
$ida="";
$ida3="";
$rutaqr="";
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$ape = $_POST['ape'];
$documento = $_POST['documento'];
$whatsapp = $_POST['whatsapp'];
$usuario = $_POST['usuario'];
$activo = true;
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$tipo = $_POST['tipo'];
$im=$_FILES['image']['tmp_name'];
if(filesize($im)>0){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $stmt = "UPDATE usuario SET documento='$documento', nombre='$nombre', ape='$ape', correo='$correo', whatsapp='$whatsapp', usuario='$usuario', tipo='$tipo', activo='$activo', foto='$imgContenido', grado='$grado', grupo='$grupo' WHERE documento='$documento'";
    }else{
        echo "<script> alert('Imagen no válida');</script>";
    }}else{    $stmt = "UPDATE usuario SET documento='$documento', nombre='$nombre', ape='$ape', correo='$correo', whatsapp='$whatsapp', usuario='$usuario', tipo='$tipo', activo='$activo', grado='$grado', grupo='$grupo' WHERE documento='$documento'";}

    $resultado = mysqli_query($connection,$stmt);
    if(!empty($resultado)){
   
        $connection -> close();
        echo "<script> window.history.go(-1); </script>";
    }else{
        echo "<script> alert('No se guardaron los cambios');window.history.go(-1);</script>";
    }
}
else{
   echo "<script>alert('Usuario no autorizado'); window.location.href='../index.php';</script>";
}  
?>