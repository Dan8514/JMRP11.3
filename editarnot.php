<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php' ;
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$id_cat = $_POST['id_cat'];
$fecha_creada = $_POST['fecha_creada'];

$im=$_FILES['foto1']['tmp_name'];
if(filesize($im)>0){
    $revisar = getimagesize($_FILES["foto1"]["tmp_name"]);
    if($revisar !== false){
        $foto1 = $_FILES['foto1']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($foto1));
        $stmt = "UPDATE noticias SET titulo='$titulo', descripcion='$descripcion', id_cat='$id_cat', fecha_creada='$fecha_creada', foto1='$imgContenido' WHERE titulo='$titulo'";
    }else{
        echo "<script> alert('Imagen no válida');</script>";
    }}else{    $stmt = "UPDATE noticias SET titulo='$titulo', descripcion='$descripcion', id_cat='$id_cat', fecha_creada='$fecha_creada', foto1='$imgContenido' WHERE titulo='$titulo'";

    $resultado = mysqli_query($connection,$stmt);
    if(!empty($resultado)){
   
        $connection -> close();
        echo "<script> window.history.go(-1); </script>";
    }else{
        echo "<script> alert('No se guardaron los cambios');window.history.go(-1);</script>";
    }
}
}
else{
   echo "<script>alert('Usuario no autorizado'); window.location.href='index.php';</script>";
}  
?>