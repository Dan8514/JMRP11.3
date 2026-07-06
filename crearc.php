<?php
session_start();
if ( $_SESSION['tipo']==1){
include 'conexi.php';
$aprobado=true;
$archivado=false;
$comentario = $_POST['comentario'];
$idnot = $_POST['noticia'];
$fecha = $_POST['fecha'];
$usuario = $_POST['usu'];
$revisar = getimagesize($_FILES["image"]["tmp_name"]);
if($revisar !== false){
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));

}else{
    echo "<script> alert('Imagen no válida');</script>";
}
   $query = "INSERT INTO comentarios(descripcion, fecha, id_usu, id_not, foto, aprobado, archivado)     VALUES('$comentario', '$fecha', '$usuario', '$idnot','$imgContenido', '$aprobado', '$archivado');";
    $resultado = mysqli_query($connection,$query);
    if(!empty($resultado)){
        echo "<script> window.location.href='crudcomentarios.php';</script>";  
    }else{
        echo "<script> alert('No se guardó');</script>";
    }
    $connection -> close();
}
else{
echo "<script> window.location.href='index.php';</script>";
}  
?>